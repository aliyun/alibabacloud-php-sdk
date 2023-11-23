<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class QueryMonthlyBillInfoRequest extends Model
{
    /**
     * @var string
     */
    public $billCycle;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

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
    public $subjectItemId;
    protected $_name = [
        'billCycle'            => 'BillCycle',
        'itemId'               => 'ItemId',
        'itemName'             => 'ItemName',
        'ownerId'              => 'OwnerId',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'subjectItemId'        => 'SubjectItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billCycle) {
            $res['BillCycle'] = $this->billCycle;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
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
        if (null !== $this->subjectItemId) {
            $res['SubjectItemId'] = $this->subjectItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMonthlyBillInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillCycle'])) {
            $model->billCycle = $map['BillCycle'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
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
        if (isset($map['SubjectItemId'])) {
            $model->subjectItemId = $map['SubjectItemId'];
        }

        return $model;
    }
}
