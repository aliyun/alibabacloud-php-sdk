<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $taskErrorCode;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $progressInfo;

    /**
     * @var string
     */
    public $scaleOutToken;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'status'           => 'Status',
        'finishTime'       => 'FinishTime',
        'progress'         => 'Progress',
        'beginTime'        => 'BeginTime',
        'taskErrorCode'    => 'TaskErrorCode',
        'DBName'           => 'DBName',
        'progressInfo'     => 'ProgressInfo',
        'scaleOutToken'    => 'ScaleOutToken',
        'taskId'           => 'TaskId',
        'taskErrorMessage' => 'TaskErrorMessage',
        'taskAction'       => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->taskErrorCode) {
            $res['TaskErrorCode'] = $this->taskErrorCode;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->progressInfo) {
            $res['ProgressInfo'] = $this->progressInfo;
        }
        if (null !== $this->scaleOutToken) {
            $res['ScaleOutToken'] = $this->scaleOutToken;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['TaskErrorCode'])) {
            $model->taskErrorCode = $map['TaskErrorCode'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ProgressInfo'])) {
            $model->progressInfo = $map['ProgressInfo'];
        }
        if (isset($map['ScaleOutToken'])) {
            $model->scaleOutToken = $map['ScaleOutToken'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
