<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class Operation extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $operationState;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var OperationStateChangeReason
     */
    public $stateChangeReason;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'endTime'           => 'EndTime',
        'operationId'       => 'OperationId',
        'operationState'    => 'OperationState',
        'operationType'     => 'OperationType',
        'startTime'         => 'StartTime',
        'stateChangeReason' => 'StateChangeReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->operationState) {
            $res['OperationState'] = $this->operationState;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stateChangeReason) {
            $res['StateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Operation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['OperationState'])) {
            $model->operationState = $map['OperationState'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StateChangeReason'])) {
            $model->stateChangeReason = OperationStateChangeReason::fromMap($map['StateChangeReason']);
        }

        return $model;
    }
}
