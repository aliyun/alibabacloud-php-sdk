<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSPhaseInfoResponseBody;

use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSPhaseInfoResponseBody\data\relatedDataList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****
     *
     * @var string
     */
    public $blockHash;

    /**
     * @example 1942
     *
     * @var int
     */
    public $blockNumber;

    /**
     * @example 9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****
     *
     * @var string
     */
    public $dataHash;

    /**
     * @var string
     */
    public $dataValue;

    /**
     * @example DFA7B98AD494FB98A491****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****
     *
     * @var string
     */
    public $previousHash;

    /**
     * @example hfoi7GQ****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var relatedDataList[]
     */
    public $relatedDataList;

    /**
     * @example 1605885676000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****
     *
     * @var string
     */
    public $transactionHash;
    protected $_name = [
        'blockHash'       => 'BlockHash',
        'blockNumber'     => 'BlockNumber',
        'dataHash'        => 'DataHash',
        'dataValue'       => 'DataValue',
        'iotId'           => 'IotId',
        'previousHash'    => 'PreviousHash',
        'productKey'      => 'ProductKey',
        'relatedDataList' => 'RelatedDataList',
        'timestamp'       => 'Timestamp',
        'transactionHash' => 'TransactionHash',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockHash) {
            $res['BlockHash'] = $this->blockHash;
        }
        if (null !== $this->blockNumber) {
            $res['BlockNumber'] = $this->blockNumber;
        }
        if (null !== $this->dataHash) {
            $res['DataHash'] = $this->dataHash;
        }
        if (null !== $this->dataValue) {
            $res['DataValue'] = $this->dataValue;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->previousHash) {
            $res['PreviousHash'] = $this->previousHash;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->relatedDataList) {
            $res['RelatedDataList'] = [];
            if (null !== $this->relatedDataList && \is_array($this->relatedDataList)) {
                $n = 0;
                foreach ($this->relatedDataList as $item) {
                    $res['RelatedDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->transactionHash) {
            $res['TransactionHash'] = $this->transactionHash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockHash'])) {
            $model->blockHash = $map['BlockHash'];
        }
        if (isset($map['BlockNumber'])) {
            $model->blockNumber = $map['BlockNumber'];
        }
        if (isset($map['DataHash'])) {
            $model->dataHash = $map['DataHash'];
        }
        if (isset($map['DataValue'])) {
            $model->dataValue = $map['DataValue'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['PreviousHash'])) {
            $model->previousHash = $map['PreviousHash'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['RelatedDataList'])) {
            if (!empty($map['RelatedDataList'])) {
                $model->relatedDataList = [];
                $n                      = 0;
                foreach ($map['RelatedDataList'] as $item) {
                    $model->relatedDataList[$n++] = null !== $item ? relatedDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TransactionHash'])) {
            $model->transactionHash = $map['TransactionHash'];
        }

        return $model;
    }
}
