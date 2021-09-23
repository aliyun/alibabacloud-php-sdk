<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class OfficeConversionTask extends Model
{
    /**
     * @description 任务 id
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $status;

    /**
     * @description Status 解释
     *
     * @var string
     */
    public $reason;

    /**
     * @description 用户自定义内容
     *
     * @var string
     */
    public $userData;

    /**
     * @description 任务创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 任务开始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 任务解释时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 转换页数
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'taskId'     => 'TaskId',
        'status'     => 'Status',
        'reason'     => 'Reason',
        'userData'   => 'UserData',
        'createTime' => 'CreateTime',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OfficeConversionTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
