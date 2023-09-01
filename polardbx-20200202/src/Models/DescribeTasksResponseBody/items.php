<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2021-10-20T19:40:00Z
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example DBName
     *
     * @var string
     */
    public $DBName;

    /**
     * @example 2021-10-20T20:00:00Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example 80
     *
     * @var string
     */
    public $progress;

    /**
     * @example ProgressInfo
     *
     * @var string
     */
    public $progressInfo;

    /**
     * @example FEA5DC20-6D8A-5979-97AA-FC57546ADC20
     *
     * @var string
     */
    public $scaleOutToken;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example multi_scale_out
     *
     * @var string
     */
    public $taskAction;

    /**
     * @example TaskErrorCode
     *
     * @var string
     */
    public $taskErrorCode;

    /**
     * @example TaskErrorMessage
     *
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @example 20089398
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'beginTime'        => 'BeginTime',
        'DBName'           => 'DBName',
        'finishTime'       => 'FinishTime',
        'progress'         => 'Progress',
        'progressInfo'     => 'ProgressInfo',
        'scaleOutToken'    => 'ScaleOutToken',
        'status'           => 'Status',
        'taskAction'       => 'TaskAction',
        'taskErrorCode'    => 'TaskErrorCode',
        'taskErrorMessage' => 'TaskErrorMessage',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressInfo) {
            $res['ProgressInfo'] = $this->progressInfo;
        }
        if (null !== $this->scaleOutToken) {
            $res['ScaleOutToken'] = $this->scaleOutToken;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskErrorCode) {
            $res['TaskErrorCode'] = $this->taskErrorCode;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressInfo'])) {
            $model->progressInfo = $map['ProgressInfo'];
        }
        if (isset($map['ScaleOutToken'])) {
            $model->scaleOutToken = $map['ScaleOutToken'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskErrorCode'])) {
            $model->taskErrorCode = $map['TaskErrorCode'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
