<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeEventsListResponseBody;

use AlibabaCloud\Dara\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var string[]
     */
    public $eventTimeList;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $recoveryTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eventCode' => 'EventCode',
        'eventStatus' => 'EventStatus',
        'eventTimeList' => 'EventTimeList',
        'instanceDescription' => 'InstanceDescription',
        'instanceId' => 'InstanceId',
        'recoveryTime' => 'RecoveryTime',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->eventTimeList)) {
            Model::validateArray($this->eventTimeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }

        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }

        if (null !== $this->eventTimeList) {
            if (\is_array($this->eventTimeList)) {
                $res['EventTimeList'] = [];
                $n1 = 0;
                foreach ($this->eventTimeList as $item1) {
                    $res['EventTimeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }

        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }

        if (isset($map['EventTimeList'])) {
            if (!empty($map['EventTimeList'])) {
                $model->eventTimeList = [];
                $n1 = 0;
                foreach ($map['EventTimeList'] as $item1) {
                    $model->eventTimeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
