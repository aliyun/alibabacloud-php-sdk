<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationResponseBody\resourceShareInvitation;

use AlibabaCloud\Dara\Model;

class acceptInvitationFailedDetails extends Model
{
    /**
     * @var string
     */
    public $associateType;

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
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

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
        'failureDescription' => 'FailureDescription',
        'failureReason' => 'FailureReason',
        'operationType' => 'OperationType',
        'resourceArn' => 'ResourceArn',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
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

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
