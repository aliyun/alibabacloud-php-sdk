<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetScheduleWorkerResponseBody;

use AlibabaCloud\Tea\Model;

class scheduleWorker extends Model
{
    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @var string
     */
    public $scheduleWorkerId;

    /**
     * @description 更新时间
     *
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workerContact;

    /**
     * @description 值班人员工号
     *
     * @example 1234567
     *
     * @var string
     */
    public $workerId;

    /**
     * @description 值班人员姓名
     *
     * @example 张三
     *
     * @var string
     */
    public $workerName;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'scheduleWorkerId' => 'ScheduleWorkerId',
        'updateTime'       => 'UpdateTime',
        'workerContact'    => 'WorkerContact',
        'workerId'         => 'WorkerId',
        'workerName'       => 'WorkerName',
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
        if (null !== $this->scheduleWorkerId) {
            $res['ScheduleWorkerId'] = $this->scheduleWorkerId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->workerContact) {
            $res['WorkerContact'] = $this->workerContact;
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
     * @return scheduleWorker
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ScheduleWorkerId'])) {
            $model->scheduleWorkerId = $map['ScheduleWorkerId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['WorkerContact'])) {
            $model->workerContact = $map['WorkerContact'];
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
