<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;

class CtripOrderPushRequest extends Model
{
    /**
     * @var string
     */
    public $journeyId;

    /**
     * @var string
     */
    public $scheduleItem;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'journeyId' => 'JourneyId',
        'scheduleItem' => 'ScheduleItem',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->journeyId) {
            $res['JourneyId'] = $this->journeyId;
        }

        if (null !== $this->scheduleItem) {
            $res['ScheduleItem'] = $this->scheduleItem;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['JourneyId'])) {
            $model->journeyId = $map['JourneyId'];
        }

        if (isset($map['ScheduleItem'])) {
            $model->scheduleItem = $map['ScheduleItem'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
