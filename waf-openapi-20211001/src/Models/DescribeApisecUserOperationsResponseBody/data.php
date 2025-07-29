<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecUserOperationsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The state before the operation.
     *
     * Valid values of the risk state:
     *
     *   **toBeConfirmed**
     *   **confirmed**
     *   **toBeFixed**
     *   **fixed**
     *   **ignored**
     *
     * Valid values of the event state:
     *
     *   **toBeConfirmed**
     *   **confirmed**
     *   **ignored**
     *
     * @example ignored
     *
     * @var string
     */
    public $fromStatus;

    /**
     * @description The remarks.
     *
     * @example Handled
     *
     * @var string
     */
    public $note;

    /**
     * @description The object ID of the operation record.
     *
     * @example 24d997acc48a67a01e09b9c5ad861287
     *
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $operationSource;

    /**
     * @description The time at which the operation was performed. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1685072214
     *
     * @var int
     */
    public $time;

    /**
     * @description The state after the operation.
     *
     * Valid values of the risk state:
     *
     *   **toBeConfirmed**
     *   **confirmed**
     *   **toBeFixed**
     *   **fixed**
     *   **ignored**
     *
     * Valid values of the event state:
     *
     *   **toBeConfirmed**
     *   **confirmed**
     *   **ignored**
     *
     * @example Confirmed
     *
     * @var string
     */
    public $toStatus;

    /**
     * @description The type of the operation record. Valid values:
     *
     *   **abnormal**: risk detection
     *   **event**: security event
     *
     * @example abnormal
     *
     * @var string
     */
    public $type;

    /**
     * @description The user ID.
     *
     * @example 1610954****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'fromStatus' => 'FromStatus',
        'note' => 'Note',
        'objectId' => 'ObjectId',
        'operationSource' => 'OperationSource',
        'time' => 'Time',
        'toStatus' => 'ToStatus',
        'type' => 'Type',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromStatus) {
            $res['FromStatus'] = $this->fromStatus;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->operationSource) {
            $res['OperationSource'] = $this->operationSource;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->toStatus) {
            $res['ToStatus'] = $this->toStatus;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromStatus'])) {
            $model->fromStatus = $map['FromStatus'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['OperationSource'])) {
            $model->operationSource = $map['OperationSource'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['ToStatus'])) {
            $model->toStatus = $map['ToStatus'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
