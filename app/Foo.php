<?php

class Foo {
	public function Bar(string | int | float | null $fooBar): string
	{
		return (string)$fooBar;
	}
}
