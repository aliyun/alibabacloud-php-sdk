<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class QueryPurchasedResListRequest extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var string
     */
    public $city;

    /**
     * @var bool
     */
    public $isDisplayPool;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $resBindStatus;

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
     * @var string
     */
    public $secretNo;
    protected $_name = [
        'billId'               => 'BillId',
        'city'                 => 'City',
        'isDisplayPool'        => 'IsDisplayPool',
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'prodCode'             => 'ProdCode',
        'resBindStatus'        => 'ResBindStatus',
        'resType'              => 'ResType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secretNo'             => 'SecretNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->isDisplayPool) {
            $res['IsDisplayPool'] = $this->isDisplayPool;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->resBindStatus) {
            $res['ResBindStatus'] = $this->resBindStatus;
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
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPurchasedResListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['IsDisplayPool'])) {
            $model->isDisplayPool = $map['IsDisplayPool'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['ResBindStatus'])) {
            $model->resBindStatus = $map['ResBindStatus'];
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
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }

        return $model;
    }
}
