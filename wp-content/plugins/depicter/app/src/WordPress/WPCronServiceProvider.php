<?php
namespace Depicter\WordPress;

use WPEmerge\ServiceProviders\ServiceProviderInterface;

class WPCronServiceProvider implements ServiceProviderInterface
{

    /**
	 * Register all dependencies in the IoC container.
	 *
	 * @param Container $container
	 *
	 * @return void
	 */
	public function register($container) {}

	/**
	 * Bootstrap any services if needed.
	 *
	 * @param Container $container
	 *
	 * @return void
	 */
	public function bootstrap($container)
	{

        register_deactivation_hook(DEPICTER_PLUGIN_FILE, [ $this, 'deactivate_cron_jobs'] );

		add_action( 'init', [ $this, 'set_cron_jobs' ] );
		add_action( 'depicter_check_authorize', [ $this, 'check_user_authorize' ] );
		add_action( 'depicter_collect_usage_data', [ $this, 'collectData' ], 10, 1 );
	}

    /**
     * Set cron jobs
     *
     * @return void
     */
    public function set_cron_jobs() {
		if ( ! wp_next_scheduled( 'depicter_check_authorize' ) ) {
			wp_schedule_event( time(), 'twicedaily', 'depicter_check_authorize' );
		}

		if ( ! wp_next_scheduled( 'depicter_collect_usage_data' ) ) {
			wp_schedule_event( time(), 'daily', 'depicter_collect_usage_data' );
		}
	}

    /**
     * check if user has purchased a license or not
     *
     * @return void
     */
    public function check_user_authorize() {
        \Depicter::client()->authorize();
    }

    /**
     * Remove cron jobs on plugin deactivation
     *
     * @return void
     */
    public function deactivate_cron_jobs() {
        $timestamp = wp_next_scheduled( 'depicter_check_authorize' );
        wp_unschedule_event( $timestamp, 'depicter_check_authorize' );
    }

	/**
	 * Collect usage date if user accepts collecting data consent
	 * @return void
	 */
	public function collectData() {
		\Depicter::usageService()->collect();
		\Depicter::usageService()->send();
	}
}
