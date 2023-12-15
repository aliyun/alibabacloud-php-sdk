<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionFor2CBrowserResponseBody\result;

use AlibabaCloud\Tea\Model;

class transactionV10 extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string[]
     */
    public $extentions;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $gas;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string[]
     */
    public $signatureList;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $txType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'data'          => 'Data',
        'extentions'    => 'Extentions',
        'from'          => 'From',
        'gas'           => 'Gas',
        'hash'          => 'Hash',
        'nonce'         => 'Nonce',
        'period'        => 'Period',
        'signatureList' => 'SignatureList',
        'timestamp'     => 'Timestamp',
        'to'            => 'To',
        'txType'        => 'TxType',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->extentions) {
            $res['Extentions'] = $this->extentions;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->gas) {
            $res['Gas'] = $this->gas;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->signatureList) {
            $res['SignatureList'] = $this->signatureList;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->txType) {
            $res['TxType'] = $this->txType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transactionV10
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Extentions'])) {
            if (!empty($map['Extentions'])) {
                $model->extentions = $map['Extentions'];
            }
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Gas'])) {
            $model->gas = $map['Gas'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['SignatureList'])) {
            if (!empty($map['SignatureList'])) {
                $model->signatureList = $map['SignatureList'];
            }
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['TxType'])) {
            $model->txType = $map['TxType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
