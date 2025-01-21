<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Dara\Model;

class extendInterval extends Model
{
    /**
     * @var int[]
     */
    public $days;
    /**
     * @var int
     */
    public $endMinute;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $endhour;
    /**
     * @var int
     */
    public $startHour;
    /**
     * @var int
     */
    public $startMinute;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'days'        => 'Days',
        'endMinute'   => 'EndMinute',
        'endTime'     => 'EndTime',
        'endhour'     => 'Endhour',
        'startHour'   => 'StartHour',
        'startMinute' => 'StartMinute',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->days)) {
            Model::validateArray($this->days);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->days) {
            if (\is_array($this->days)) {
                $res['Days'] = [];
                $n1          = 0;
                foreach ($this->days as $item1) {
                    $res['Days'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endMinute) {
            $res['EndMinute'] = $this->endMinute;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endhour) {
            $res['Endhour'] = $this->endhour;
        }

        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
        }

        if (null !== $this->startMinute) {
            $res['StartMinute'] = $this->startMinute;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Days'])) {
            if (!empty($map['Days'])) {
                $model->days = [];
                $n1          = 0;
                foreach ($map['Days'] as $item1) {
                    $model->days[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndMinute'])) {
            $model->endMinute = $map['EndMinute'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Endhour'])) {
            $model->endhour = $map['Endhour'];
        }

        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }

        if (isset($map['StartMinute'])) {
            $model->startMinute = $map['StartMinute'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
