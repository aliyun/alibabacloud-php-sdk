<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationResponseBody\resourceShareInvitation;

use AlibabaCloud\Tea\Model;

class acceptInvitationFailedDetails extends Model
{
    /**
     * @description The type of the sharing operation. Valid values:
     *
     *   Associate
     *
     * @example Associate
     *
     * @var string
     */
    public $associateType;

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
     * For more information about the types of resources that can be shared, see [Services that work with Resource Sharing](~~450526~~).
     * @example Snapshot
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The failure status. Valid values:
     *
     *   Unavailable: The resource cannot be shared.
     *   LimitExceeded: The number of shared resources within the Alibaba Cloud account exceeds the upper limit.
     *   ZonalResourceInaccessible: The resource is unavailable in this region.
     *   InternalError: An internal error occurred during the check.
     *
     * @example Unavailable
     *
     * @var string
     */
    public $status;

    /**
     * @description The failure cause.
     *
     * @example You cannot access the specified resource at this time.
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'associateType' => 'AssociateType',
        'resourceId'    => 'ResourceId',
        'resourceType'  => 'ResourceType',
        'status'        => 'Status',
        'statusMessage' => 'StatusMessage',
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
     * @return acceptInvitationFailedDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateType'])) {
            $model->associateType = $map['AssociateType'];
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
