<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateSmsSignRequest extends Model
{
    /**
     * @description 收信人号码
     *
     * This parameter is required.
     * @example 178****3614
     *
     * @var string
     */
    public $calledNo;

    /**
     * @description 客户uid
     *
     * @example -
     *
     * @var int
     */
    public $callerParentId;

    /**
     * @description 发信人号码
     *
     * This parameter is required.
     * @example 150****6539
     *
     * @var string
     */
    public $callingNo;

    /**
     * @description 号码池key
     *
     * This parameter is required.
     * @example FC5**********************a1a
     *
     * @var string
     */
    public $customerPoolKey;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description 请求去重ID, reqId最大长度为20位,接入方需要保持原子性
     *
     * This parameter is required.
     * @example 564**********879
     *
     * @var string
     */
    public $reqId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'calledNo'             => 'CalledNo',
        'callerParentId'       => 'CallerParentId',
        'callingNo'            => 'CallingNo',
        'customerPoolKey'      => 'CustomerPoolKey',
        'ownerId'              => 'OwnerId',
        'reqId'                => 'ReqId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNo) {
            $res['CalledNo'] = $this->calledNo;
        }
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->callingNo) {
            $res['CallingNo'] = $this->callingNo;
        }
        if (null !== $this->customerPoolKey) {
            $res['CustomerPoolKey'] = $this->customerPoolKey;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSmsSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNo'])) {
            $model->calledNo = $map['CalledNo'];
        }
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['CallingNo'])) {
            $model->callingNo = $map['CallingNo'];
        }
        if (isset($map['CustomerPoolKey'])) {
            $model->customerPoolKey = $map['CustomerPoolKey'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
