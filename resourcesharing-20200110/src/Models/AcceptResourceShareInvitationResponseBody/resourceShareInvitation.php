<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationResponseBody;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationResponseBody\resourceShareInvitation\acceptInvitationFailedDetails;
use AlibabaCloud\Tea\Model;

class resourceShareInvitation extends Model
{
    /**
     * @description The information about the failure.
     *
     * @var acceptInvitationFailedDetails[]
     */
    public $acceptInvitationFailedDetails;

    /**
     * @description The time when the invitation was created. The time is displayed in UTC.
     *
     * @example 2022-09-02T06:43:12.353Z
     *
     * @var string
     */
    public $createTime;

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
     * @description The ID of the resource sharing invitation.
     *
     * @example i-pMnItMX19fBJ****
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
     *   Pending
     *   Accepted
     *   Cancelled
     *   Rejected
     *   Expired
     *   AcceptFailed
     *
     * @example AcceptFailed
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'acceptInvitationFailedDetails' => 'AcceptInvitationFailedDetails',
        'createTime'                    => 'CreateTime',
        'receiverAccountId'             => 'ReceiverAccountId',
        'resourceShareId'               => 'ResourceShareId',
        'resourceShareInvitationId'     => 'ResourceShareInvitationId',
        'resourceShareName'             => 'ResourceShareName',
        'senderAccountId'               => 'SenderAccountId',
        'status'                        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptInvitationFailedDetails) {
            $res['AcceptInvitationFailedDetails'] = [];
            if (null !== $this->acceptInvitationFailedDetails && \is_array($this->acceptInvitationFailedDetails)) {
                $n = 0;
                foreach ($this->acceptInvitationFailedDetails as $item) {
                    $res['AcceptInvitationFailedDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
     * @return resourceShareInvitation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptInvitationFailedDetails'])) {
            if (!empty($map['AcceptInvitationFailedDetails'])) {
                $model->acceptInvitationFailedDetails = [];
                $n                                    = 0;
                foreach ($map['AcceptInvitationFailedDetails'] as $item) {
                    $model->acceptInvitationFailedDetails[$n++] = null !== $item ? acceptInvitationFailedDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
