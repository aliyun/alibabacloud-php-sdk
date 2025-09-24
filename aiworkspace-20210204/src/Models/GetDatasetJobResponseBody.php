<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class GetDatasetJobResponseBody extends Model
{
    /**
     * @var int
     */
    public $completedFileCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $failedFileCount;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $jobAction;

    /**
     * @var string
     */
    public $jobMode;

    /**
     * @var string
     */
    public $jobSpec;

    /**
     * @var string[]
     */
    public $logs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalFileCount;
    protected $_name = [
        'completedFileCount' => 'CompletedFileCount',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'failedFileCount' => 'FailedFileCount',
        'finishTime' => 'FinishTime',
        'jobAction' => 'JobAction',
        'jobMode' => 'JobMode',
        'jobSpec' => 'JobSpec',
        'logs' => 'Logs',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'totalFileCount' => 'TotalFileCount',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedFileCount) {
            $res['CompletedFileCount'] = $this->completedFileCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->failedFileCount) {
            $res['FailedFileCount'] = $this->failedFileCount;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->jobAction) {
            $res['JobAction'] = $this->jobAction;
        }

        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }

        if (null !== $this->jobSpec) {
            $res['JobSpec'] = $this->jobSpec;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalFileCount) {
            $res['TotalFileCount'] = $this->totalFileCount;
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
        if (isset($map['CompletedFileCount'])) {
            $model->completedFileCount = $map['CompletedFileCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FailedFileCount'])) {
            $model->failedFileCount = $map['FailedFileCount'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['JobAction'])) {
            $model->jobAction = $map['JobAction'];
        }

        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }

        if (isset($map['JobSpec'])) {
            $model->jobSpec = $map['JobSpec'];
        }

        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalFileCount'])) {
            $model->totalFileCount = $map['TotalFileCount'];
        }

        return $model;
    }
}
