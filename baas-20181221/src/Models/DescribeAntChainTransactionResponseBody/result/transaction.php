<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionResponseBody\result;

use AlibabaCloud\Tea\Model;

class transaction extends Model
{
    /**
     * @var string
     */
    public $hash;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string
     */
    public $to;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $gas;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string[]
     */
    public $extentions;

    /**
     * @var string
     */
    public $txType;

    /**
     * @var string[]
     */
    public $signatures;
    protected $_name = [
        'hash'       => 'Hash',
        'from'       => 'From',
        'data'       => 'Data',
        'nonce'      => 'Nonce',
        'to'         => 'To',
        'timestamp'  => 'Timestamp',
        'gas'        => 'Gas',
        'period'     => 'Period',
        'value'      => 'Value',
        'extentions' => 'Extentions',
        'txType'     => 'TxType',
        'signatures' => 'Signatures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->gas) {
            $res['Gas'] = $this->gas;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->extentions) {
            $res['Extentions'] = $this->extentions;
        }
        if (null !== $this->txType) {
            $res['TxType'] = $this->txType;
        }
        if (null !== $this->signatures) {
            $res['Signatures'] = $this->signatures;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transaction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Gas'])) {
            $model->gas = $map['Gas'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Extentions'])) {
            if (!empty($map['Extentions'])) {
                $model->extentions = $map['Extentions'];
            }
        }
        if (isset($map['TxType'])) {
            $model->txType = $map['TxType'];
        }
        if (isset($map['Signatures'])) {
            if (!empty($map['Signatures'])) {
                $model->signatures = $map['Signatures'];
            }
        }

        return $model;
    }
}
