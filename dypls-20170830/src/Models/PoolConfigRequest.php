<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class PoolConfigRequest extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var int
     */
    public $callbackType;

    /**
     * @var int
     */
    public $frozenDay;

    /**
     * @var bool
     */
    public $needAllCallRecords;

    /**
     * @var bool
     */
    public $openSmsWhite;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $poolWarningLimit;

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
    public $selectXMode;

    /**
     * @var string
     */
    public $smartSmsWhitelist;

    /**
     * @var string
     */
    public $smsChannel;
    protected $_name = [
        'billId'               => 'BillId',
        'callbackType'         => 'CallbackType',
        'frozenDay'            => 'FrozenDay',
        'needAllCallRecords'   => 'NeedAllCallRecords',
        'openSmsWhite'         => 'OpenSmsWhite',
        'ownerId'              => 'OwnerId',
        'poolWarningLimit'     => 'PoolWarningLimit',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'selectXMode'          => 'SelectXMode',
        'smartSmsWhitelist'    => 'SmartSmsWhitelist',
        'smsChannel'           => 'SmsChannel',
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
        if (null !== $this->callbackType) {
            $res['CallbackType'] = $this->callbackType;
        }
        if (null !== $this->frozenDay) {
            $res['FrozenDay'] = $this->frozenDay;
        }
        if (null !== $this->needAllCallRecords) {
            $res['NeedAllCallRecords'] = $this->needAllCallRecords;
        }
        if (null !== $this->openSmsWhite) {
            $res['OpenSmsWhite'] = $this->openSmsWhite;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolWarningLimit) {
            $res['PoolWarningLimit'] = $this->poolWarningLimit;
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
        if (null !== $this->selectXMode) {
            $res['SelectXMode'] = $this->selectXMode;
        }
        if (null !== $this->smartSmsWhitelist) {
            $res['SmartSmsWhitelist'] = $this->smartSmsWhitelist;
        }
        if (null !== $this->smsChannel) {
            $res['SmsChannel'] = $this->smsChannel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PoolConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['CallbackType'])) {
            $model->callbackType = $map['CallbackType'];
        }
        if (isset($map['FrozenDay'])) {
            $model->frozenDay = $map['FrozenDay'];
        }
        if (isset($map['NeedAllCallRecords'])) {
            $model->needAllCallRecords = $map['NeedAllCallRecords'];
        }
        if (isset($map['OpenSmsWhite'])) {
            $model->openSmsWhite = $map['OpenSmsWhite'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolWarningLimit'])) {
            $model->poolWarningLimit = $map['PoolWarningLimit'];
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
        if (isset($map['SelectXMode'])) {
            $model->selectXMode = $map['SelectXMode'];
        }
        if (isset($map['SmartSmsWhitelist'])) {
            $model->smartSmsWhitelist = $map['SmartSmsWhitelist'];
        }
        if (isset($map['SmsChannel'])) {
            $model->smsChannel = $map['SmsChannel'];
        }

        return $model;
    }
}
