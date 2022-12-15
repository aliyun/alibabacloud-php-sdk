<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderQueryResponseBody\module;

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
     * @example 1669274251000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 4
     *
     * @var int
     */
    public $payType;

    /**
     * @example 1000
     *
     * @var int
     */
    public $personPrice;

    /**
     * @example 2000
     *
     * @var int
     */
    public $price;

    /**
     * @example 1012000000001
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
        'categoryCode' => 'category_code',
        'gmtCreate'    => 'gmt_create',
        'payType'      => 'pay_type',
        'personPrice'  => 'person_price',
        'price'        => 'price',
        'tradeId'      => 'trade_id',
        'type'         => 'type',
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
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->personPrice) {
            $res['person_price'] = $this->personPrice;
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
        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }
        if (isset($map['person_price'])) {
            $model->personPrice = $map['person_price'];
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
