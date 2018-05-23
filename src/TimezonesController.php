<?php
namespace Vivekpandey\Timezones;

use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class TimezonesController extends BaseController {

	public function index($timezone = NULL) {
		$current_time = ($timezone)
		? Carbon::now(str_replace('-', '/', $timezone))
		: Carbon::now();
		return view('timezones::time', compact('current_time'));
	}

}