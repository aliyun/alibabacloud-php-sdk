<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListBatchExportTasksResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var int
     */
    public $processedCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'createTime' => 'createTime',
        'errorMessage' => 'errorMessage',
        'gatewayId' => 'gatewayId',
        'processedCount' => 'processedCount',
        'status' => 'status',
        'taskId' => 'taskId',
        'taskType' => 'taskType',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->processedCount) {
            $res['processedCount'] = $this->processedCount;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['processedCount'])) {
            $model->processedCount = $map['processedCount'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
