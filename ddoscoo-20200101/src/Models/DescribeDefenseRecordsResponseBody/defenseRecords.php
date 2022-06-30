<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class defenseRecords extends Model
{
    /**
     * @var int
     */
    public $attackPeak;

    /**
     * @var int
     */
    public $endTime;

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
    public $startTime;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'attackPeak' => 'AttackPeak',
        'endTime'    => 'EndTime',
        'eventCount' => 'EventCount',
        'instanceId' => 'InstanceId',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackPeak) {
            $res['AttackPeak'] = $this->attackPeak;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AttackPeak'])) {
            $model->attackPeak = $map['AttackPeak'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
