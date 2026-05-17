<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyRouteForSubscription\channels;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyRouteForSubscription\effectTimeRange;

class NotifyRouteForSubscription extends Model
{
    /**
     * @var channels[]
     */
    public $channels;

    /**
     * @var effectTimeRange
     */
    public $effectTimeRange;
    protected $_name = [
        'channels' => 'channels',
        'effectTimeRange' => 'effectTimeRange',
    ];

    public function validate()
    {
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        if (null !== $this->effectTimeRange) {
            $this->effectTimeRange->validate();
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

        return $model;
    }
}
