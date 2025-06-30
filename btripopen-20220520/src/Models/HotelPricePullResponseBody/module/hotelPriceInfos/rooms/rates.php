<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms\rates\btripHotelCancelPolicy;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms\rates\rateDailys;

class rates extends Model
{
    /**
     * @var string
     */
    public $breakfast;

    /**
     * @var int
     */
    public $breakfastCount;

    /**
     * @var btripHotelCancelPolicy
     */
    public $btripHotelCancelPolicy;

    /**
     * @var string
     */
    public $cancelPolicyDesc;

    /**
     * @var string
     */
    public $companyAassist;

    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var bool
     */
    public $instantConfirm;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $maxAdvHours;

    /**
     * @var int
     */
    public $maxDays;

    /**
     * @var int
     */
    public $minAdvHours;

    /**
     * @var int
     */
    public $minDays;

    /**
     * @var int
     */
    public $nod;

    /**
     * @var int
     */
    public $nop;

    /**
     * @var int
     */
    public $paymentType;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $promotionInfo;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var rateDailys[]
     */
    public $rateDailys;

    /**
     * @var string
     */
    public $rateId;

    /**
     * @var string
     */
    public $ratePlanName;

    /**
     * @var string
     */
    public $rpId;

    /**
     * @var string
     */
    public $sellerId;

    /**
     * @var bool
     */
    public $supportSpecialInvoice;
    protected $_name = [
        'breakfast' => 'breakfast',
        'breakfastCount' => 'breakfast_count',
        'btripHotelCancelPolicy' => 'btrip_hotel_cancel_policy',
        'cancelPolicyDesc' => 'cancel_policy_desc',
        'companyAassist' => 'company_aassist',
        'currencyCode' => 'currency_code',
        'instantConfirm' => 'instant_confirm',
        'itemId' => 'item_id',
        'maxAdvHours' => 'max_adv_hours',
        'maxDays' => 'max_days',
        'minAdvHours' => 'min_adv_hours',
        'minDays' => 'min_days',
        'nod' => 'nod',
        'nop' => 'nop',
        'paymentType' => 'payment_type',
        'price' => 'price',
        'promotionInfo' => 'promotion_info',
        'quota' => 'quota',
        'rateDailys' => 'rate_dailys',
        'rateId' => 'rate_id',
        'ratePlanName' => 'rate_plan_name',
        'rpId' => 'rp_id',
        'sellerId' => 'seller_id',
        'supportSpecialInvoice' => 'support_special_invoice',
    ];

    public function validate()
    {
        if (null !== $this->btripHotelCancelPolicy) {
            $this->btripHotelCancelPolicy->validate();
        }
        if (\is_array($this->rateDailys)) {
            Model::validateArray($this->rateDailys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->breakfast) {
            $res['breakfast'] = $this->breakfast;
        }

        if (null !== $this->breakfastCount) {
            $res['breakfast_count'] = $this->breakfastCount;
        }

        if (null !== $this->btripHotelCancelPolicy) {
            $res['btrip_hotel_cancel_policy'] = null !== $this->btripHotelCancelPolicy ? $this->btripHotelCancelPolicy->toArray($noStream) : $this->btripHotelCancelPolicy;
        }

        if (null !== $this->cancelPolicyDesc) {
            $res['cancel_policy_desc'] = $this->cancelPolicyDesc;
        }

        if (null !== $this->companyAassist) {
            $res['company_aassist'] = $this->companyAassist;
        }

        if (null !== $this->currencyCode) {
            $res['currency_code'] = $this->currencyCode;
        }

        if (null !== $this->instantConfirm) {
            $res['instant_confirm'] = $this->instantConfirm;
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->maxAdvHours) {
            $res['max_adv_hours'] = $this->maxAdvHours;
        }

        if (null !== $this->maxDays) {
            $res['max_days'] = $this->maxDays;
        }

        if (null !== $this->minAdvHours) {
            $res['min_adv_hours'] = $this->minAdvHours;
        }

        if (null !== $this->minDays) {
            $res['min_days'] = $this->minDays;
        }

        if (null !== $this->nod) {
            $res['nod'] = $this->nod;
        }

        if (null !== $this->nop) {
            $res['nop'] = $this->nop;
        }

        if (null !== $this->paymentType) {
            $res['payment_type'] = $this->paymentType;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->promotionInfo) {
            $res['promotion_info'] = $this->promotionInfo;
        }

        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }

        if (null !== $this->rateDailys) {
            if (\is_array($this->rateDailys)) {
                $res['rate_dailys'] = [];
                $n1 = 0;
                foreach ($this->rateDailys as $item1) {
                    $res['rate_dailys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rateId) {
            $res['rate_id'] = $this->rateId;
        }

        if (null !== $this->ratePlanName) {
            $res['rate_plan_name'] = $this->ratePlanName;
        }

        if (null !== $this->rpId) {
            $res['rp_id'] = $this->rpId;
        }

        if (null !== $this->sellerId) {
            $res['seller_id'] = $this->sellerId;
        }

        if (null !== $this->supportSpecialInvoice) {
            $res['support_special_invoice'] = $this->supportSpecialInvoice;
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
        if (isset($map['breakfast'])) {
            $model->breakfast = $map['breakfast'];
        }

        if (isset($map['breakfast_count'])) {
            $model->breakfastCount = $map['breakfast_count'];
        }

        if (isset($map['btrip_hotel_cancel_policy'])) {
            $model->btripHotelCancelPolicy = btripHotelCancelPolicy::fromMap($map['btrip_hotel_cancel_policy']);
        }

        if (isset($map['cancel_policy_desc'])) {
            $model->cancelPolicyDesc = $map['cancel_policy_desc'];
        }

        if (isset($map['company_aassist'])) {
            $model->companyAassist = $map['company_aassist'];
        }

        if (isset($map['currency_code'])) {
            $model->currencyCode = $map['currency_code'];
        }

        if (isset($map['instant_confirm'])) {
            $model->instantConfirm = $map['instant_confirm'];
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['max_adv_hours'])) {
            $model->maxAdvHours = $map['max_adv_hours'];
        }

        if (isset($map['max_days'])) {
            $model->maxDays = $map['max_days'];
        }

        if (isset($map['min_adv_hours'])) {
            $model->minAdvHours = $map['min_adv_hours'];
        }

        if (isset($map['min_days'])) {
            $model->minDays = $map['min_days'];
        }

        if (isset($map['nod'])) {
            $model->nod = $map['nod'];
        }

        if (isset($map['nop'])) {
            $model->nop = $map['nop'];
        }

        if (isset($map['payment_type'])) {
            $model->paymentType = $map['payment_type'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['promotion_info'])) {
            $model->promotionInfo = $map['promotion_info'];
        }

        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }

        if (isset($map['rate_dailys'])) {
            if (!empty($map['rate_dailys'])) {
                $model->rateDailys = [];
                $n1 = 0;
                foreach ($map['rate_dailys'] as $item1) {
                    $model->rateDailys[$n1] = rateDailys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['rate_id'])) {
            $model->rateId = $map['rate_id'];
        }

        if (isset($map['rate_plan_name'])) {
            $model->ratePlanName = $map['rate_plan_name'];
        }

        if (isset($map['rp_id'])) {
            $model->rpId = $map['rp_id'];
        }

        if (isset($map['seller_id'])) {
            $model->sellerId = $map['seller_id'];
        }

        if (isset($map['support_special_invoice'])) {
            $model->supportSpecialInvoice = $map['support_special_invoice'];
        }

        return $model;
    }
}
