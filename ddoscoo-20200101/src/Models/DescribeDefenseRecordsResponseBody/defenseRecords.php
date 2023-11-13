<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class defenseRecords extends Model
{
    /**
     * @description The peak attack traffic. Unit: bit/s.
     *
     * @example 6584186000
     *
     * @var int
     */
    public $attackPeak;

    /**
     * @description The end time of the advanced mitigation session. This value is a UNIX timestamp. Units: miliseconds.
     *
     * @example 1583683200000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of attacks.
     *
     * @example 2
     *
     * @var int
     */
    public $eventCount;

    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The start time of the advanced mitigation session. This value is a UNIX timestamp. Units: miliseconds.
     *
     * @example 1582992000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the advanced mitigation session. Valid values:
     *
     *   **0**: The advanced mitigation session is being used.
     *   **1**: The advanced mitigation session is used.
     *
     * @example 0
     *
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
