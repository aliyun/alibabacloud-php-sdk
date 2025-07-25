<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\notification\receivers;
use AlibabaCloud\Tea\Model;

class notification extends Model
{
    /**
     * @description The alert notification channels.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $channels;

    /**
     * @description The interval at which an alert notification is sent. Unit: minutes. Valid values: [5,10000].
     *
     * @example 30
     *
     * @var int
     */
    public $intervalInMinutes;

    /**
     * @description The maximum number of times an alert notification can be sent within a calendar day. Valid values: [1, 10000].
     *
     * @example 3
     *
     * @var int
     */
    public $maximum;

    /**
     * @description The alert recipients.
     *
     * This parameter is required.
     *
     * @var receivers[]
     */
    public $receivers;

    /**
     * @description The end time for silence. The time is in the HH:mm format.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $silenceEndTime;

    /**
     * @description The start time for silence. The time is in the HH:mm format.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $silenceStartTime;
    protected $_name = [
        'channels' => 'Channels',
        'intervalInMinutes' => 'IntervalInMinutes',
        'maximum' => 'Maximum',
        'receivers' => 'Receivers',
        'silenceEndTime' => 'SilenceEndTime',
        'silenceStartTime' => 'SilenceStartTime',
    ];

    public function validate() {}

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
                $n = 0;
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
