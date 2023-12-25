<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponseBody;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponseBody\resourceShareInvitations\invitationFailedDetails;
use AlibabaCloud\Tea\Model;

class resourceShareInvitations extends Model
{
    /**
     * @description The time when the invitation was created. The time is displayed in UTC.
     *
     * @example 2022-08-18T05:36:45.024Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var invitationFailedDetails[]
     */
    public $invitationFailedDetails;

    /**
     * @description The Alibaba Cloud account ID of the invitee.
     *
     * @example 134254031178****
     *
     * @var string
     */
    public $receiverAccountId;

    /**
     * @description The ID of the resource share.
     *
     * @example rs-ysGRci9z****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @description The ID of the invitation.
     *
     * @example i-p6eRytrkjVvM****
     *
     * @var string
     */
    public $resourceShareInvitationId;

    /**
     * @description The name of the resource share.
     *
     * @example example
     *
     * @var string
     */
    public $resourceShareName;

    /**
     * @description The Alibaba Cloud account ID of the inviter.
     *
     * @example 151266687691****
     *
     * @var string
     */
    public $senderAccountId;

    /**
     * @description The status of the invitation. Valid values:
     *
     *   Pending: The invitation is waiting for confirmation.
     *   Accepted: The invitation is accepted.
     *   Cancelled: The invitation is canceled.
     *   Rejected: The invitation is rejected.
     *   Expired: The invitation has expired.
     *
     * @example Pending
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'                => 'CreateTime',
        'invitationFailedDetails'   => 'InvitationFailedDetails',
        'receiverAccountId'         => 'ReceiverAccountId',
        'resourceShareId'           => 'ResourceShareId',
        'resourceShareInvitationId' => 'ResourceShareInvitationId',
        'resourceShareName'         => 'ResourceShareName',
        'senderAccountId'           => 'SenderAccountId',
        'status'                    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->invitationFailedDetails) {
            $res['InvitationFailedDetails'] = [];
            if (null !== $this->invitationFailedDetails && \is_array($this->invitationFailedDetails)) {
                $n = 0;
                foreach ($this->invitationFailedDetails as $item) {
                    $res['InvitationFailedDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->receiverAccountId) {
            $res['ReceiverAccountId'] = $this->receiverAccountId;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceShareInvitationId) {
            $res['ResourceShareInvitationId'] = $this->resourceShareInvitationId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->senderAccountId) {
            $res['SenderAccountId'] = $this->senderAccountId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceShareInvitations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InvitationFailedDetails'])) {
            if (!empty($map['InvitationFailedDetails'])) {
                $model->invitationFailedDetails = [];
                $n                              = 0;
                foreach ($map['InvitationFailedDetails'] as $item) {
                    $model->invitationFailedDetails[$n++] = null !== $item ? invitationFailedDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReceiverAccountId'])) {
            $model->receiverAccountId = $map['ReceiverAccountId'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceShareInvitationId'])) {
            $model->resourceShareInvitationId = $map['ResourceShareInvitationId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['SenderAccountId'])) {
            $model->senderAccountId = $map['SenderAccountId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
