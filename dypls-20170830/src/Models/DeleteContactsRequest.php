<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactsRequest extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var int
     */
    public $id;

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
    protected $_name = [
        'billId'               => 'BillId',
        'id'                   => 'Id',
        'ownerId'              => 'OwnerId',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}
