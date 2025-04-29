<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class priceInfoList extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $categoryCode;

    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $tradeId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'category' => 'category',
        'categoryCode' => 'category_code',
        'categoryType' => 'category_type',
        'gmtCreate' => 'gmt_create',
        'passengerName' => 'passenger_name',
        'payType' => 'pay_type',
        'price' => 'price',
        'tradeId' => 'trade_id',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->categoryCode) {
            $res['category_code'] = $this->categoryCode;
        }

        if (null !== $this->categoryType) {
            $res['category_type'] = $this->categoryType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['category_code'])) {
            $model->categoryCode = $map['category_code'];
        }

        if (isset($map['category_type'])) {
            $model->categoryType = $map['category_type'];
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
