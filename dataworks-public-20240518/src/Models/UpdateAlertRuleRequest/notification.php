<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\notification\receivers;
use AlibabaCloud\Tea\Model;

class notification extends Model
{
    /**
     * @var string[]
     */
    public $channels;

    /**
     * @example 30
     *
     * @var int
     */
    public $intervalInMinutes;

    /**
     * @example 3
     *
     * @var int
     */
    public $maximum;

    /**
     * @var receivers[]
     */
    public $receivers;

    /**
     * @example 00:00:00
     *
     * @var string
     */
    public $silenceEndTime;

    /**
     * @example 00:00:00
     *
     * @var string
     */
    public $silenceStartTime;
    protected $_name = [
        'channels'          => 'Channels',
        'intervalInMinutes' => 'IntervalInMinutes',
        'maximum'           => 'Maximum',
        'receivers'         => 'Receivers',
        'silenceEndTime'    => 'SilenceEndTime',
        'silenceStartTime'  => 'SilenceStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->intervalInMinutes) {
            $res['IntervalInMinutes'] = $this->intervalInMinutes;
        }
        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }
        if (null !== $this->receivers) {
            $res['Receivers'] = [];
            if (null !== $this->receivers && \is_array($this->receivers)) {
                $n = 0;
                foreach ($this->receivers as $item) {
                    $res['Receivers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->silenceEndTime) {
            $res['SilenceEndTime'] = $this->silenceEndTime;
        }
        if (null !== $this->silenceStartTime) {
            $res['SilenceStartTime'] = $this->silenceStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = $map['Channels'];
            }
        }
        if (isset($map['IntervalInMinutes'])) {
            $model->intervalInMinutes = $map['IntervalInMinutes'];
        }
        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }
        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = [];
                $n                = 0;
                foreach ($map['Receivers'] as $item) {
                    $model->receivers[$n++] = null !== $item ? receivers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SilenceEndTime'])) {
            $model->silenceEndTime = $map['SilenceEndTime'];
        }
        if (isset($map['SilenceStartTime'])) {
            $model->silenceStartTime = $map['SilenceStartTime'];
        }

        return $model;
    }
}
