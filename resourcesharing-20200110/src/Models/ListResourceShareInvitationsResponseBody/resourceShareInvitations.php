<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponseBody\resourceShareInvitations\invitationFailedDetails;

class resourceShareInvitations extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var invitationFailedDetails[]
     */
    public $invitationFailedDetails;

    /**
     * @var string
     */
    public $receiverAccountId;

    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var string
     */
    public $resourceShareInvitationId;

    /**
     * @var string
     */
    public $resourceShareName;

    /**
     * @var string
     */
    public $senderAccountId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'invitationFailedDetails' => 'InvitationFailedDetails',
        'receiverAccountId' => 'ReceiverAccountId',
        'resourceShareId' => 'ResourceShareId',
        'resourceShareInvitationId' => 'ResourceShareInvitationId',
        'resourceShareName' => 'ResourceShareName',
        'senderAccountId' => 'SenderAccountId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->invitationFailedDetails)) {
            Model::validateArray($this->invitationFailedDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->invitationFailedDetails) {
            if (\is_array($this->invitationFailedDetails)) {
                $res['InvitationFailedDetails'] = [];
                $n1 = 0;
                foreach ($this->invitationFailedDetails as $item1) {
                    $res['InvitationFailedDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InvitationFailedDetails'])) {
            if (!empty($map['InvitationFailedDetails'])) {
                $model->invitationFailedDetails = [];
                $n1 = 0;
                foreach ($map['InvitationFailedDetails'] as $item1) {
                    $model->invitationFailedDetails[$n1] = invitationFailedDetails::fromMap($item1);
                    ++$n1;
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
