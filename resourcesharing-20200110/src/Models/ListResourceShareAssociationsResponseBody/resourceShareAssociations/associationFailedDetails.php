<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponseBody\resourceShareAssociations;

use AlibabaCloud\Tea\Model;

class associationFailedDetails extends Model
{
    /**
     * @description This parameter is deprecated. The OperationType parameter is used instead.
     *
     * @example None
     *
     * @var string
     */
    public $associateType;

    /**
     * @description The ID of the entity. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of AssociationType is Resource, the value of this parameter is the ID of the principal.
     *   If the value of AssociationType is Target, the value of this parameter is the ID of the resource.
     *
     * @example 172050525300****
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The type of the entity. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of AssociationType is Resource, the value of this parameter is the type of the resource. For information about the types of resources that can be shared, see Services that work with Resource Sharing.
     *   If the value of AssociationType is Target, the value of this parameter is `ResourceDirectory`, `Folder`, `Account`, or `Service`.
     *
     * @example Account
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The failure description.
     *
     * @example You cannot access the specified resource at this time.
     *
     * @var string
     */
    public $failureDescription;

    /**
     * @description The failure cause. Valid values:
     *
     *   Unavailable: The resource does not exist.
     *   LimitExceeded: The number of principals for the resource exceeds the upper limit.
     *   ZonalResourceInaccessible: The resource is unavailable in this region.
     *   InternalError: An internal error occurred.
     *   UnsupportedOperation: You cannot perform this operation.
     *
     * @example Unavailable
     *
     * @var string
     */
    public $failureReason;

    /**
     * @description The operation type. Valid values:
     *
     *   Associate
     *   Disassociate
     *
     * @example Associate
     *
     * @var string
     */
    public $operationType;

    /**
     * @description This parameter is deprecated. The FailureReason parameter is used instead.
     *
     * @example None
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is deprecated. The FailureDescription parameter is used instead.
     *
     * @example None
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'associateType'      => 'AssociateType',
        'entityId'           => 'EntityId',
        'entityType'         => 'EntityType',
        'failureDescription' => 'FailureDescription',
        'failureReason'      => 'FailureReason',
        'operationType'      => 'OperationType',
        'status'             => 'Status',
        'statusMessage'      => 'StatusMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associationFailedDetails
     */
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
