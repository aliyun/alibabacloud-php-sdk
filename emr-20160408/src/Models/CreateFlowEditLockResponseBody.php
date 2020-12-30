<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowEditLockResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $bizId;
    protected $_name = [
        'status'    => 'Status',
        'entityId'  => 'EntityId',
        'requestId' => 'RequestId',
        'ownerId'   => 'OwnerId',
        'userId'    => 'UserId',
        'bizId'     => 'BizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowEditLockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}
