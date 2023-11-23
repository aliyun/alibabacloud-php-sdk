<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class QueryBindingDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $billId;

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
    public $phoneNoA;

    /**
     * @var string
     */
    public $phoneNoB;

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
     * @var string
     */
    public $secretNo;

    /**
     * @var string
     */
    public $subId;
    protected $_name = [
        'billId'               => 'BillId',
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'phoneNoA'             => 'PhoneNoA',
        'phoneNoB'             => 'PhoneNoB',
        'prodCode'             => 'ProdCode',
        'resType'              => 'ResType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secretNo'             => 'SecretNo',
        'subId'                => 'SubId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }
        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
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
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBindingDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
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
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }
        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
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
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }

        return $model;
    }
}
