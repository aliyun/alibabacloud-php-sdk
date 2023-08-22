<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfo\priceInfoDTO;

use AlibabaCloud\Tea\Model;

class reShopPriceInfoDTO extends Model
{
    /**
     * @example -1
     *
     * @var int
     */
    public $reShopAdultChangeFee;

    /**
     * @example -1
     *
     * @var int
     */
    public $reShopAdultPrice;

    /**
     * @example -1
     *
     * @var int
     */
    public $reShopAdultPriceGap;

    /**
     * @example -1
     *
     * @var int
     */
    public $reShopChildChangeFee;

    /**
     * @example -1
     *
     * @var int
     */
    public $reShopChildPrice;

    /**
     * @example -1
     *
     * @var int
     */
    public $reShopChildPriceGap;

    /**
     * @example -1
     *
     * @var int
     */
    public $reShopInfChangeFee;

    /**
     * @example -1
     *
     * @var int
     */
    public $reShopInfPrice;

    /**
     * @example -1
     *
     * @var int
     */
    public $reShopInfPriceGap;
    protected $_name = [
        'reShopAdultChangeFee' => 're_shop_adult_change_fee',
        'reShopAdultPrice'     => 're_shop_adult_price',
        'reShopAdultPriceGap'  => 're_shop_adult_price_gap',
        'reShopChildChangeFee' => 're_shop_child_change_fee',
        'reShopChildPrice'     => 're_shop_child_price',
        'reShopChildPriceGap'  => 're_shop_child_price_gap',
        'reShopInfChangeFee'   => 're_shop_inf_change_fee',
        'reShopInfPrice'       => 're_shop_inf_price',
        'reShopInfPriceGap'    => 're_shop_inf_price_gap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reShopAdultChangeFee) {
            $res['re_shop_adult_change_fee'] = $this->reShopAdultChangeFee;
        }
        if (null !== $this->reShopAdultPrice) {
            $res['re_shop_adult_price'] = $this->reShopAdultPrice;
        }
        if (null !== $this->reShopAdultPriceGap) {
            $res['re_shop_adult_price_gap'] = $this->reShopAdultPriceGap;
        }
        if (null !== $this->reShopChildChangeFee) {
            $res['re_shop_child_change_fee'] = $this->reShopChildChangeFee;
        }
        if (null !== $this->reShopChildPrice) {
            $res['re_shop_child_price'] = $this->reShopChildPrice;
        }
        if (null !== $this->reShopChildPriceGap) {
            $res['re_shop_child_price_gap'] = $this->reShopChildPriceGap;
        }
        if (null !== $this->reShopInfChangeFee) {
            $res['re_shop_inf_change_fee'] = $this->reShopInfChangeFee;
        }
        if (null !== $this->reShopInfPrice) {
            $res['re_shop_inf_price'] = $this->reShopInfPrice;
        }
        if (null !== $this->reShopInfPriceGap) {
            $res['re_shop_inf_price_gap'] = $this->reShopInfPriceGap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reShopPriceInfoDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['re_shop_adult_change_fee'])) {
            $model->reShopAdultChangeFee = $map['re_shop_adult_change_fee'];
        }
        if (isset($map['re_shop_adult_price'])) {
            $model->reShopAdultPrice = $map['re_shop_adult_price'];
        }
        if (isset($map['re_shop_adult_price_gap'])) {
            $model->reShopAdultPriceGap = $map['re_shop_adult_price_gap'];
        }
        if (isset($map['re_shop_child_change_fee'])) {
            $model->reShopChildChangeFee = $map['re_shop_child_change_fee'];
        }
        if (isset($map['re_shop_child_price'])) {
            $model->reShopChildPrice = $map['re_shop_child_price'];
        }
        if (isset($map['re_shop_child_price_gap'])) {
            $model->reShopChildPriceGap = $map['re_shop_child_price_gap'];
        }
        if (isset($map['re_shop_inf_change_fee'])) {
            $model->reShopInfChangeFee = $map['re_shop_inf_change_fee'];
        }
        if (isset($map['re_shop_inf_price'])) {
            $model->reShopInfPrice = $map['re_shop_inf_price'];
        }
        if (isset($map['re_shop_inf_price_gap'])) {
            $model->reShopInfPriceGap = $map['re_shop_inf_price_gap'];
        }

        return $model;
    }
}
