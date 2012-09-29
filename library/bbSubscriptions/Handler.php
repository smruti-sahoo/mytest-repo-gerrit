<?php

interface bbSubscriptions_Handler {
	public static function send_mail($users, $subject, $text, $attrs);

	/**
	 * Check the inbox for replies
	 */
	public static function check_inbox();

	public static function handle_post();
}