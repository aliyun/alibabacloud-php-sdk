<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponseBody\resourceShareAssociations;

use AlibabaCloud\Dara\Model;

class associationFailedDetails extends Model
{
    /**
     * @var string
     */
    public $associateType;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $failureDescription;

    /**
     * @var string
     */
    public $failureReason;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'associateType' => 'AssociateType',
        'entityId' => 'EntityId',
        'entityType' => 'EntityType',
        'failureDescription' => 'FailureDescription',
        'failureReason' => 'FailureReason',
        'operationType' => 'OperationType',
        'resourceArn' => 'ResourceArn',
        'status' => 'Status',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associateType) {
            $res['AssociateType'] = $this->associateType;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->failureDescription) {
            $res['FailureDescription'] = $this->failureDescription;
        }

        if (null !== $this->failureReason) {
            $res['FailureReason'] = $this->failureReason;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
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
        if (isset($map['AssociateType'])) {
            $model->associateType = $map['AssociateType'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['FailureDescription'])) {
            $model->failureDescription = $map['FailureDescription'];
        }

        if (isset($map['FailureReason'])) {
            $model->failureReason = $map['FailureReason'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
