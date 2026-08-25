<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListOperationAuditLogsResponseBody;

use AlibabaCloud\Dara\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $afterAction;

    /**
     * @var string
     */
    public $beforeAction;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $operationFunc;

    /**
     * @var string
     */
    public $operationPage;

    /**
     * @var string
     */
    public $operationTime;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'afterAction' => 'AfterAction',
        'beforeAction' => 'BeforeAction',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'eventType' => 'EventType',
        'operationFunc' => 'OperationFunc',
        'operationPage' => 'OperationPage',
        'operationTime' => 'OperationTime',
        'operationType' => 'OperationType',
        'operatorId' => 'OperatorId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterAction) {
            $res['AfterAction'] = $this->afterAction;
        }

        if (null !== $this->beforeAction) {
            $res['BeforeAction'] = $this->beforeAction;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->operationFunc) {
            $res['OperationFunc'] = $this->operationFunc;
        }

        if (null !== $this->operationPage) {
            $res['OperationPage'] = $this->operationPage;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AfterAction'])) {
            $model->afterAction = $map['AfterAction'];
        }

        if (isset($map['BeforeAction'])) {
            $model->beforeAction = $map['BeforeAction'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['OperationFunc'])) {
            $model->operationFunc = $map['OperationFunc'];
        }

        if (isset($map['OperationPage'])) {
            $model->operationPage = $map['OperationPage'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
