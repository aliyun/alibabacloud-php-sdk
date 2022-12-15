<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class priceInfoList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $categoryCode;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @example 1
     *
     * @var int
     */
    public $payType;

    /**
     * @example 0
     *
     * @var float
     */
    public $price;

    /**
     * @example 12312312001
     *
     * @var string
     */
    public $tradeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'categoryCode'  => 'category_code',
        'gmtCreate'     => 'gmt_create',
        'passengerName' => 'passenger_name',
        'payType'       => 'pay_type',
        'price'         => 'price',
        'tradeId'       => 'trade_id',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['category_code'] = $this->categoryCode;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->tradeId) {
            $res['trade_id'] = $this->tradeId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category_code'])) {
            $model->categoryCode = $map['category_code'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }
        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['trade_id'])) {
            $model->tradeId = $map['trade_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
