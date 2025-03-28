<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponseBody\resourceShareInvitations;

use AlibabaCloud\Tea\Model;

class invitationFailedDetails extends Model
{
    /**
     * @description This parameter is deprecated. The OperationType parameter is used instead.
     *
     * @example Associate
     *
     * @var string
     */
    public $associateType;

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
     *   Unavailable: The resource cannot be shared.
     *   LimitExceeded: The number of shared resources within the Alibaba Cloud account exceeds the upper limit.
     *   ZonalResourceInaccessible: The resource is unavailable in this region.
     *   InternalError: An internal error occurred during the check.
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
     * @description The ID of the shared resource.
     *
     * @example s-7xvh46nx5oqlre0wv***
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the shared resource.
     *
     * For more information about the types of resources that can be shared, see [Services that work with Resource Sharing](https://help.aliyun.com/document_detail/450526.html).
     * @example Snapshot
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description This parameter is deprecated. The FailureReason parameter is used instead.
     *
     * @example Unavailable
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is deprecated. The FailureDescription parameter is used instead.
     *
     * @example You cannot access the specified resource at this time.
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'associateType'      => 'AssociateType',
        'failureDescription' => 'FailureDescription',
        'failureReason'      => 'FailureReason',
        'operationType'      => 'OperationType',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
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
        if (null !== $this->failureDescription) {
            $res['FailureDescription'] = $this->failureDescription;
        }
        if (null !== $this->failureReason) {
            $res['FailureReason'] = $this->failureReason;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
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

    /**
     * @param array $map
     *
     * @return invitationFailedDetails
     */
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
