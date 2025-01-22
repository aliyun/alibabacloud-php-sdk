<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\notification\receivers;

class notification extends Model
{
    /**
     * @var string[]
     */
    public $channels;
    /**
     * @var int
     */
    public $intervalInMinutes;
    /**
     * @var int
     */
    public $maximum;
    /**
     * @var receivers[]
     */
    public $receivers;
    /**
     * @var string
     */
    public $silenceEndTime;
    /**
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
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        if (\is_array($this->receivers)) {
            Model::validateArray($this->receivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            if (\is_array($this->channels)) {
                $res['Channels'] = [];
                $n1              = 0;
                foreach ($this->channels as $item1) {
                    $res['Channels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->intervalInMinutes) {
            $res['IntervalInMinutes'] = $this->intervalInMinutes;
        }

        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }

        if (null !== $this->receivers) {
            if (\is_array($this->receivers)) {
                $res['Receivers'] = [];
                $n1               = 0;
                foreach ($this->receivers as $item1) {
                    $res['Receivers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = [];
                $n1              = 0;
                foreach ($map['Channels'] as $item1) {
                    $model->channels[$n1++] = $item1;
                }
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
                $n1               = 0;
                foreach ($map['Receivers'] as $item1) {
                    $model->receivers[$n1++] = receivers::fromMap($item1);
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
