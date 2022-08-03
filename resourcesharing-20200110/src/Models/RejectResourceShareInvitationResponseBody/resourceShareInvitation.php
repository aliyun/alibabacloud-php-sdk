<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\RejectResourceShareInvitationResponseBody;

use AlibabaCloud\Tea\Model;

class resourceShareInvitation extends Model
{
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
        'createTime'                => 'CreateTime',
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
