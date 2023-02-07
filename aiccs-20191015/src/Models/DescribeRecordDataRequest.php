<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordDataRequest extends Model
{
    /**
     * @example 2235****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example BUC_TYPE
     *
     * @var string
     */
    public $accountType;

    /**
     * @example 1004849****
     *
     * @var string
     */
    public $acid;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example aiccs
     *
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
     * @example 2
     *
     * @var int
     */
    public $secLevel;
    protected $_name = [
        'accountId'            => 'AccountId',
        'accountType'          => 'AccountType',
        'acid'                 => 'Acid',
        'ownerId'              => 'OwnerId',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secLevel'             => 'SecLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
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
        if (null !== $this->secLevel) {
            $res['SecLevel'] = $this->secLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
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
        if (isset($map['SecLevel'])) {
            $model->secLevel = $map['SecLevel'];
        }

        return $model;
    }
}
