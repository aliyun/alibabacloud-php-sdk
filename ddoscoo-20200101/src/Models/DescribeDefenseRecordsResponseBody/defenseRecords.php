<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class defenseRecords extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $attackPeak;
    protected $_name = [
        'endTime'    => 'EndTime',
        'status'     => 'Status',
        'startTime'  => 'StartTime',
        'eventCount' => 'EventCount',
        'instanceId' => 'InstanceId',
        'attackPeak' => 'AttackPeak',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->attackPeak) {
            $res['AttackPeak'] = $this->attackPeak;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defenseRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AttackPeak'])) {
            $model->attackPeak = $map['AttackPeak'];
        }

        return $model;
    }
}
