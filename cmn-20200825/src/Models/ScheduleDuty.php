<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ScheduleDuty\typeWorkerList;
use AlibabaCloud\Tea\Model;

class ScheduleDuty extends Model
{
    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-12-22
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $scheduleDutyId;

    /**
     * @var string[]
     */
    public $scheduleTypeIds;

    /**
     * @example 2020-12-22
     *
     * @var string
     */
    public $startDate;

    /**
     * @var typeWorkerList[]
     */
    public $typeWorkerList;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 2020-12-22
     *
     * @var string
     */
    public $workDate;

    /**
     * @example 夜班
     *
     * @var string
     */
    public $workType;

    /**
     * @example 123456
     *
     * @var string
     */
    public $workerId;

    /**
     * @example 张三
     *
     * @var string
     */
    public $workerName;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'endDate'         => 'EndDate',
        'scheduleDutyId'  => 'ScheduleDutyId',
        'scheduleTypeIds' => 'ScheduleTypeIds',
        'startDate'       => 'StartDate',
        'typeWorkerList'  => 'TypeWorkerList',
        'updateTime'      => 'UpdateTime',
        'workDate'        => 'WorkDate',
        'workType'        => 'WorkType',
        'workerId'        => 'WorkerId',
        'workerName'      => 'WorkerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->scheduleDutyId) {
            $res['ScheduleDutyId'] = $this->scheduleDutyId;
        }
        if (null !== $this->scheduleTypeIds) {
            $res['ScheduleTypeIds'] = $this->scheduleTypeIds;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->typeWorkerList) {
            $res['TypeWorkerList'] = [];
            if (null !== $this->typeWorkerList && \is_array($this->typeWorkerList)) {
                $n = 0;
                foreach ($this->typeWorkerList as $item) {
                    $res['TypeWorkerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->workDate) {
            $res['WorkDate'] = $this->workDate;
        }
        if (null !== $this->workType) {
            $res['WorkType'] = $this->workType;
        }
        if (null !== $this->workerId) {
            $res['WorkerId'] = $this->workerId;
        }
        if (null !== $this->workerName) {
            $res['WorkerName'] = $this->workerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduleDuty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ScheduleDutyId'])) {
            $model->scheduleDutyId = $map['ScheduleDutyId'];
        }
        if (isset($map['ScheduleTypeIds'])) {
            if (!empty($map['ScheduleTypeIds'])) {
                $model->scheduleTypeIds = $map['ScheduleTypeIds'];
            }
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TypeWorkerList'])) {
            if (!empty($map['TypeWorkerList'])) {
                $model->typeWorkerList = [];
                $n                     = 0;
                foreach ($map['TypeWorkerList'] as $item) {
                    $model->typeWorkerList[$n++] = null !== $item ? typeWorkerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['WorkDate'])) {
            $model->workDate = $map['WorkDate'];
        }
        if (isset($map['WorkType'])) {
            $model->workType = $map['WorkType'];
        }
        if (isset($map['WorkerId'])) {
            $model->workerId = $map['WorkerId'];
        }
        if (isset($map['WorkerName'])) {
            $model->workerName = $map['WorkerName'];
        }

        return $model;
    }
}
