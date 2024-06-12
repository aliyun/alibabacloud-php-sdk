<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Tea\Model;

class UAIDCollectionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 示例值
     *
     * @var string
     */
    public $authCode;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $carrier;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $ip;

    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $token;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $userGrantId;
    protected $_name = [
        'authCode'             => 'AuthCode',
        'carrier'              => 'Carrier',
        'ip'                   => 'Ip',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'province'             => 'Province',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'token'                => 'Token',
        'userGrantId'          => 'UserGrantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->userGrantId) {
            $res['UserGrantId'] = $this->userGrantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UAIDCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['UserGrantId'])) {
            $model->userGrantId = $map['UserGrantId'];
        }

        return $model;
    }
}
