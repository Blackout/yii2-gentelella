<?php
/**
* @copyright Copyright (c) 2015 Yiister
* @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
* @link http://gentelella.yiister.ru
*/

namespace yiister\gentelella\widgets;

use rmrevin\yii\fontawesome\component\Icon;
use yii\base\Widget;
use yii\helpers\ChainHtml;

class DifferenceTile extends Widget
{
	public $options = ['class' => 'tile_stats_count'];
	public $icon;
	public $header;
	public $text;
	public $number_now;
	public $number_before;
	public $period;

	public function run()
	{
		// Variables
		$percent = number_format((($this->number_now / $this->number_before) - 1) * 100, 0);
		$percent = ($percent < 0 ? -$percent : $percent);
		$direction = ($this->number_now >= $this->number_before ? 'asc' : 'desc');
		$color = ($direction == 'asc' ? 'green' : 'red');

		// HTML
		return	(new ChainHtml())->
			start('div', ['class' => 'tile_count'])->
				start('div', $this->options)->
					start('span', ['class' => 'count_bottom'])->
						if ($this->icon)->
							add(new Icon($this->icon))->space()->
						encode($this->header)->
					end('span')->
					tag('div', $this->number_now, ['class' => 'count'])->
					start('span', ['class' => 'count_bottom'])->
						tag('i', new Icon('sort-' . $direction) . " {$percent}% ", ['class' => $color])->
					end('span')->
					encode($this->period)->
				end('div')->
			end('div');
	}
}
