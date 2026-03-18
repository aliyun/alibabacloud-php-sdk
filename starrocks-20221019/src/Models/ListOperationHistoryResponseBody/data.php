<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\ListOperationHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $afterValue;

    /**
     * @var string
     */
    public $beforeValue;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtEnd;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operationDetail;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $operationStatus;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var int
     */
    public $progress;
    protected $_name = [
        'afterValue' => 'AfterValue',
        'beforeValue' => 'BeforeValue',
        'gmtCreate' => 'GmtCreate',
        'gmtEnd' => 'GmtEnd',
        'instanceId' => 'InstanceId',
        'operationDetail' => 'OperationDetail',
        'operationId' => 'OperationId',
        'operationStatus' => 'OperationStatus',
        'operationType' => 'OperationType',
        'progress' => 'Progress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterValue) {
            $res['AfterValue'] = $this->afterValue;
        }

        if (null !== $this->beforeValue) {
            $res['BeforeValue'] = $this->beforeValue;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtEnd) {
            $res['GmtEnd'] = $this->gmtEnd;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->operationDetail) {
            $res['OperationDetail'] = $this->operationDetail;
        }

        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }

        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (isset($map['AfterValue'])) {
            $model->afterValue = $map['AfterValue'];
        }

        if (isset($map['BeforeValue'])) {
            $model->beforeValue = $map['BeforeValue'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtEnd'])) {
            $model->gmtEnd = $map['GmtEnd'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OperationDetail'])) {
            $model->operationDetail = $map['OperationDetail'];
        }

        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
