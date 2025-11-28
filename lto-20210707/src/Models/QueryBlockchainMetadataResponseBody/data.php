<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\QueryBlockchainMetadataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $blockHash;

    /**
     * @var string
     */
    public $blockNumber;

    /**
     * @var string
     */
    public $iotId;

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
        'blockNumber' => 'BlockNumber',
        'iotId' => 'IotId',
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

        if (null !== $this->blockNumber) {
            $res['BlockNumber'] = $this->blockNumber;
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
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

        if (isset($map['BlockNumber'])) {
            $model->blockNumber = $map['BlockNumber'];
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
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
