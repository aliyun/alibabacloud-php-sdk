<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class OccupySecretResRequest extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var bool
     */
    public $isDisplayPool;

    /**
     * @var string
     */
    public $noLike;

    /**
     * @var int
     */
    public $orderDetailId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $partnerKey;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $resType;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $secretNoType;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $secretNo;
    protected $_name = [
        'city'                 => 'City',
        'isDisplayPool'        => 'IsDisplayPool',
        'noLike'               => 'NoLike',
        'orderDetailId'        => 'OrderDetailId',
        'orderId'              => 'OrderId',
        'ownerId'              => 'OwnerId',
        'partnerKey'           => 'PartnerKey',
        'prodCode'             => 'ProdCode',
        'resType'              => 'ResType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secretNoType'         => 'SecretNoType',
        'totalCount'           => 'TotalCount',
        'secretNo'             => 'secretNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->isDisplayPool) {
            $res['IsDisplayPool'] = $this->isDisplayPool;
        }
        if (null !== $this->noLike) {
            $res['NoLike'] = $this->noLike;
        }
        if (null !== $this->orderDetailId) {
            $res['OrderDetailId'] = $this->orderDetailId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->partnerKey) {
            $res['PartnerKey'] = $this->partnerKey;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->resType) {
            $res['ResType'] = $this->resType;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->secretNoType) {
            $res['SecretNoType'] = $this->secretNoType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->secretNo) {
            $res['secretNo'] = $this->secretNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OccupySecretResRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['IsDisplayPool'])) {
            $model->isDisplayPool = $map['IsDisplayPool'];
        }
        if (isset($map['NoLike'])) {
            $model->noLike = $map['NoLike'];
        }
        if (isset($map['OrderDetailId'])) {
            $model->orderDetailId = $map['OrderDetailId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PartnerKey'])) {
            $model->partnerKey = $map['PartnerKey'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['ResType'])) {
            $model->resType = $map['ResType'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecretNoType'])) {
            $model->secretNoType = $map['SecretNoType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['secretNo'])) {
            $model->secretNo = $map['secretNo'];
        }

        return $model;
    }
}
