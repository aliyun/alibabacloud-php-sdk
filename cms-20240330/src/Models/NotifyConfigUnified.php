<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class NotifyConfigUnified extends Model
{
    /**
     * @var int[]
     */
    public $activeDays;

    /**
     * @var string
     */
    public $activeEndTime;

    /**
     * @var string
     */
    public $activeStartTime;

    /**
     * @var DirectNotifyChannel[]
     */
    public $channels;

    /**
     * @var int
     */
    public $silenceTimeSecs;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $utcOffset;
    protected $_name = [
        'activeDays' => 'activeDays',
        'activeEndTime' => 'activeEndTime',
        'activeStartTime' => 'activeStartTime',
        'channels' => 'channels',
        'silenceTimeSecs' => 'silenceTimeSecs',
        'type' => 'type',
        'utcOffset' => 'utcOffset',
    ];

    public function validate()
    {
        if (\is_array($this->activeDays)) {
            Model::validateArray($this->activeDays);
        }
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeDays) {
            if (\is_array($this->activeDays)) {
                $res['activeDays'] = [];
                $n1 = 0;
                foreach ($this->activeDays as $item1) {
                    $res['activeDays'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->activeEndTime) {
            $res['activeEndTime'] = $this->activeEndTime;
        }

        if (null !== $this->activeStartTime) {
            $res['activeStartTime'] = $this->activeStartTime;
        }

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

        if (null !== $this->silenceTimeSecs) {
            $res['silenceTimeSecs'] = $this->silenceTimeSecs;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->utcOffset) {
            $res['utcOffset'] = $this->utcOffset;
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
        if (isset($map['activeDays'])) {
            if (!empty($map['activeDays'])) {
                $model->activeDays = [];
                $n1 = 0;
                foreach ($map['activeDays'] as $item1) {
                    $model->activeDays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['activeEndTime'])) {
            $model->activeEndTime = $map['activeEndTime'];
        }

        if (isset($map['activeStartTime'])) {
            $model->activeStartTime = $map['activeStartTime'];
        }

        if (isset($map['channels'])) {
            if (!empty($map['channels'])) {
                $model->channels = [];
                $n1 = 0;
                foreach ($map['channels'] as $item1) {
                    $model->channels[$n1] = DirectNotifyChannel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['silenceTimeSecs'])) {
            $model->silenceTimeSecs = $map['silenceTimeSecs'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['utcOffset'])) {
            $model->utcOffset = $map['utcOffset'];
        }

        return $model;
    }
}
