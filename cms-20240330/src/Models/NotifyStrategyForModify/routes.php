<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify;

use AlibabaCloud\SDK\Cms\V20240330\Models\FilterSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\routes\channels;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\routes\effectTimeRange;
use AlibabaCloud\Tea\Model;

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
        'channels'        => 'channels',
        'effectTimeRange' => 'effectTimeRange',
        'filterSetting'   => 'filterSetting',
        'severities'      => 'severities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['channels'] = [];
            if (null !== $this->channels && \is_array($this->channels)) {
                $n = 0;
                foreach ($this->channels as $item) {
                    $res['channels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->effectTimeRange) {
            $res['effectTimeRange'] = null !== $this->effectTimeRange ? $this->effectTimeRange->toMap() : null;
        }
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->severities) {
            $res['severities'] = $this->severities;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channels'])) {
            if (!empty($map['channels'])) {
                $model->channels = [];
                $n               = 0;
                foreach ($map['channels'] as $item) {
                    $model->channels[$n++] = null !== $item ? channels::fromMap($item) : $item;
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
                $model->severities = $map['severities'];
            }
        }

        return $model;
    }
}
