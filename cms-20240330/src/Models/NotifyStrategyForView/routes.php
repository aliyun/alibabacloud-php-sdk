<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\FilterSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\routes\channels;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\routes\effectTimeRange;

class routes extends Model
{
    /**
     * @var channels[]
     */
    public $channels;

    /**
     * @var effectTimeRange
     */
    public $effectTimeRange;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var string[]
     */
    public $severities;
    protected $_name = [
        'channels' => 'channels',
        'effectTimeRange' => 'effectTimeRange',
        'filterSetting' => 'filterSetting',
        'severities' => 'severities',
    ];

    public function validate()
    {
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        if (null !== $this->effectTimeRange) {
            $this->effectTimeRange->validate();
        }
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (\is_array($this->severities)) {
            Model::validateArray($this->severities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            if (\is_array($this->channels)) {
                $res['channels'] = [];
                $n1 = 0;
                foreach ($this->channels as $item1) {
                    $res['channels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->effectTimeRange) {
            $res['effectTimeRange'] = null !== $this->effectTimeRange ? $this->effectTimeRange->toArray($noStream) : $this->effectTimeRange;
        }

        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->severities) {
            if (\is_array($this->severities)) {
                $res['severities'] = [];
                $n1 = 0;
                foreach ($this->severities as $item1) {
                    $res['severities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channels'])) {
            if (!empty($map['channels'])) {
                $model->channels = [];
                $n1 = 0;
                foreach ($map['channels'] as $item1) {
                    $model->channels[$n1] = channels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['effectTimeRange'])) {
            $model->effectTimeRange = effectTimeRange::fromMap($map['effectTimeRange']);
        }

        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }

        if (isset($map['severities'])) {
            if (!empty($map['severities'])) {
                $model->severities = [];
                $n1 = 0;
                foreach ($map['severities'] as $item1) {
                    $model->severities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
