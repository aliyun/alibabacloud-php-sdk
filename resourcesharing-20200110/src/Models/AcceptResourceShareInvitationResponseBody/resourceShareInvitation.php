<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationResponseBody\resourceShareInvitation\acceptInvitationFailedDetails;

class resourceShareInvitation extends Model
{
    /**
     * @var acceptInvitationFailedDetails[]
     */
    public $acceptInvitationFailedDetails;

    /**
     * @var string
     */
    public $createTime;

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
        'acceptInvitationFailedDetails' => 'AcceptInvitationFailedDetails',
        'createTime' => 'CreateTime',
        'receiverAccountId' => 'ReceiverAccountId',
        'resourceShareId' => 'ResourceShareId',
        'resourceShareInvitationId' => 'ResourceShareInvitationId',
        'resourceShareName' => 'ResourceShareName',
        'senderAccountId' => 'SenderAccountId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->acceptInvitationFailedDetails)) {
            Model::validateArray($this->acceptInvitationFailedDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptInvitationFailedDetails) {
            if (\is_array($this->acceptInvitationFailedDetails)) {
                $res['AcceptInvitationFailedDetails'] = [];
                $n1 = 0;
                foreach ($this->acceptInvitationFailedDetails as $item1) {
                    $res['AcceptInvitationFailedDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptInvitationFailedDetails'])) {
            if (!empty($map['AcceptInvitationFailedDetails'])) {
                $model->acceptInvitationFailedDetails = [];
                $n1 = 0;
                foreach ($map['AcceptInvitationFailedDetails'] as $item1) {
                    $model->acceptInvitationFailedDetails[$n1] = acceptInvitationFailedDetails::fromMap($item1);
                    ++$n1;
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
