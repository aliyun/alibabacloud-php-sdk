<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class QueryBlockchainMetadataRequest extends Model
{
    /**
     * @var string
     */
    public $bizChainId;

    /**
     * @var string
     */
    public $contractName;

    /**
     * @var string
     */
    public $invokeType;

    /**
     * @var string
     */
    public $iotDataDID;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'bizChainId' => 'BizChainId',
        'contractName' => 'ContractName',
        'invokeType' => 'InvokeType',
        'iotDataDID' => 'IotDataDID',
        'regionId' => 'RegionId',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }

        if (null !== $this->contractName) {
            $res['ContractName'] = $this->contractName;
        }

        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }

        if (null !== $this->iotDataDID) {
            $res['IotDataDID'] = $this->iotDataDID;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }

        if (isset($map['ContractName'])) {
            $model->contractName = $map['ContractName'];
        }

        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }

        if (isset($map['IotDataDID'])) {
            $model->iotDataDID = $map['IotDataDID'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
