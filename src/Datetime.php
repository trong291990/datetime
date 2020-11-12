<?php

namespace TrongTD\Datetime;

use Datetime as BaseDatetime;

class Datetime extends BaseDatetime
{
	public function myFormat()
	{
		return date('Y-m-d H:i:s');
	}
}