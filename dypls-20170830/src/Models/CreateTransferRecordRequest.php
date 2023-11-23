<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class CreateTransferRecordRequest extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $numberList;

    /**
     * @var string
     */
    public $originBillId;

    /**
     * @var string
     */
    public $originName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $targetBillId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $transferType;
    protected $_name = [
        'city'                 => 'City',
        'numberList'           => 'NumberList',
        'originBillId'         => 'OriginBillId',
        'originName'           => 'OriginName',
        'ownerId'              => 'OwnerId',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'targetBillId'         => 'TargetBillId',
        'targetName'           => 'TargetName',
        'total'                => 'Total',
        'transferType'         => 'TransferType',
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
        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }
        if (null !== $this->originBillId) {
            $res['OriginBillId'] = $this->originBillId;
        }
        if (null !== $this->originName) {
            $res['OriginName'] = $this->originName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->targetBillId) {
            $res['TargetBillId'] = $this->targetBillId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->transferType) {
            $res['TransferType'] = $this->transferType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransferRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }
        if (isset($map['OriginBillId'])) {
            $model->originBillId = $map['OriginBillId'];
        }
        if (isset($map['OriginName'])) {
            $model->originName = $map['OriginName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TargetBillId'])) {
            $model->targetBillId = $map['TargetBillId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TransferType'])) {
            $model->transferType = $map['TransferType'];
        }

        return $model;
    }
}
