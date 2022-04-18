<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "M5o1iFTs9l4572jXo+BYQ+HEKuWZJQSnPDe83WHDiJ5czxOKQD8SaOYtFDVdex+5EMP1VFtbn03Codz0bji4/EmHSXPgB5pVO82F4paIEIRNnrahE4GGYu3lyp8OOOyrz4aMaAWRXWJB0NnwBZrYqAdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "97e26cfc880203cd839c7cbdbdd094aa";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
