<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DescribeTransactionsListRequest extends Model
{
    /**
     * @example 0xabds***djskjds
     *
     * @var string
     */
    public $address;

    /**
     * @example ETH
     *
     * @var string
     */
    public $coin;

    /**
     * @example 1682235649
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @example e0c34a***353888
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 1682232649
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @example in
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'address'        => 'Address',
        'coin'           => 'Coin',
        'endTimestamp'   => 'EndTimestamp',
        'merchantBizId'  => 'MerchantBizId',
        'page'           => 'Page',
        'startTimestamp' => 'StartTimestamp',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->coin) {
            $res['Coin'] = $this->coin;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTransactionsListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Coin'])) {
            $model->coin = $map['Coin'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
