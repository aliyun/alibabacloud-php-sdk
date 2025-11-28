<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListBizChainDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $blockHash;

    /**
     * @var string
     */
    public $blockNum;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotDataDID;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $txHash;
    protected $_name = [
        'blockHash' => 'BlockHash',
        'blockNum' => 'BlockNum',
        'deviceName' => 'DeviceName',
        'iotDataDID' => 'IotDataDID',
        'memberName' => 'MemberName',
        'productKey' => 'ProductKey',
        'timestamp' => 'Timestamp',
        'txHash' => 'TxHash',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockHash) {
            $res['BlockHash'] = $this->blockHash;
        }

        if (null !== $this->blockNum) {
            $res['BlockNum'] = $this->blockNum;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->iotDataDID) {
            $res['IotDataDID'] = $this->iotDataDID;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->txHash) {
            $res['TxHash'] = $this->txHash;
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
        if (isset($map['BlockHash'])) {
            $model->blockHash = $map['BlockHash'];
        }

        if (isset($map['BlockNum'])) {
            $model->blockNum = $map['BlockNum'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['IotDataDID'])) {
            $model->iotDataDID = $map['IotDataDID'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['TxHash'])) {
            $model->txHash = $map['TxHash'];
        }

        return $model;
    }
}
