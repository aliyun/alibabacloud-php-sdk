<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionResponseBody\result;

use AlibabaCloud\Tea\Model;

class transaction extends Model
{
    /**
     * @example “”
     *
     * @var string
     */
    public $data;

    /**
     * @var string[]
     */
    public $extentions;

    /**
     * @example e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b
     *
     * @var string
     */
    public $from;

    /**
     * @example 4000000
     *
     * @var string
     */
    public $gas;

    /**
     * @example b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca
     *
     * @var string
     */
    public $hash;

    /**
     * @example 5675407026657953619
     *
     * @var string
     */
    public $nonce;

    /**
     * @description Period
     *
     * @example 1563954336850
     *
     * @var int
     */
    public $period;

    /**
     * @var string[]
     */
    public $signatures;

    /**
     * @example 1563954336850
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example 961085f3c7ef705ad587d0cbe11d7863a5a11af7451f4e9b1edadd74402addf5
     *
     * @var string
     */
    public $to;

    /**
     * @example UNFREEZE_ACCOUNT_CONTRACT
     *
     * @var string
     */
    public $txType;

    /**
     * @example 0
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'data'       => 'Data',
        'extentions' => 'Extentions',
        'from'       => 'From',
        'gas'        => 'Gas',
        'hash'       => 'Hash',
        'nonce'      => 'Nonce',
        'period'     => 'Period',
        'signatures' => 'Signatures',
        'timestamp'  => 'Timestamp',
        'to'         => 'To',
        'txType'     => 'TxType',
        'value'      => 'Value',
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
        if (null !== $this->signatures) {
            $res['Signatures'] = $this->signatures;
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
     * @return transaction
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
        if (isset($map['Signatures'])) {
            if (!empty($map['Signatures'])) {
                $model->signatures = $map['Signatures'];
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
