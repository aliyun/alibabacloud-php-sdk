<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\btripCancelRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\btripHotelCancelDesc;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\discountDesc;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\hotelDetailRatePriceDTO;

class rates extends Model
{
    /**
     * @var string
     */
    public $bedDesc;

    /**
     * @var string
     */
    public $bedType;

    /**
     * @var string
     */
    public $breakfast;

    /**
     * @var btripCancelRule
     */
    public $btripCancelRule;

    /**
     * @var btripHotelCancelDesc[]
     */
    public $btripHotelCancelDesc;

    /**
     * @var bool
     */
    public $canSmoking;

    /**
     * @var string
     */
    public $cancelPolicyDesc;

    /**
     * @var int
     */
    public $cancelPolicyType;

    /**
     * @var string
     */
    public $companyAassist;

    /**
     * @var int
     */
    public $confirmType;

    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var string
     */
    public $dailyPriceFormatYuan;

    /**
     * @var string
     */
    public $dailyPriceView;

    /**
     * @var discountDesc
     */
    public $discountDesc;

    /**
     * @var string
     */
    public $endTimeDaily;

    /**
     * @var hotelDetailRatePriceDTO[]
     */
    public $hotelDetailRatePriceDTO;

    /**
     * @var bool
     */
    public $instantConfirm;

    /**
     * @var string
     */
    public $inventoryDesc;

    /**
     * @var string
     */
    public $inventoryPrice;

    /**
     * @var bool
     */
    public $isBusinessPay4Goods;

    /**
     * @var int
     */
    public $isGuarantee;

    /**
     * @var bool
     */
    public $isNeedEmail;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $lastCancelTime;

    /**
     * @var int
     */
    public $maxOccupancy;

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
    public $orderShipTime;

    /**
     * @var int
     */
    public $paymentType;

    /**
     * @var int
     */
    public $priceType;

    /**
     * @var string
     */
    public $promotionInfo;

    /**
     * @var int
     */
    public $rateId;

    /**
     * @var string
     */
    public $ratePlanName;

    /**
     * @var int
     */
    public $rpId;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $startTimeDaily;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplierCode;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var bool
     */
    public $supportSpecialInvoice;

    /**
     * @var string
     */
    public $unroundingDailyPriceFormatYuan;
    protected $_name = [
        'bedDesc' => 'bed_desc',
        'bedType' => 'bed_type',
        'breakfast' => 'breakfast',
        'btripCancelRule' => 'btrip_cancel_rule',
        'btripHotelCancelDesc' => 'btrip_hotel_cancel_desc',
        'canSmoking' => 'can_smoking',
        'cancelPolicyDesc' => 'cancel_policy_desc',
        'cancelPolicyType' => 'cancel_policy_type',
        'companyAassist' => 'company_aassist',
        'confirmType' => 'confirm_type',
        'currencyCode' => 'currency_code',
        'dailyPriceFormatYuan' => 'daily_price_format_yuan',
        'dailyPriceView' => 'daily_price_view',
        'discountDesc' => 'discount_desc',
        'endTimeDaily' => 'end_time_daily',
        'hotelDetailRatePriceDTO' => 'hotel_detail_rate_price_d_t_o',
        'instantConfirm' => 'instant_confirm',
        'inventoryDesc' => 'inventory_desc',
        'inventoryPrice' => 'inventory_price',
        'isBusinessPay4Goods' => 'is_business_pay4_goods',
        'isGuarantee' => 'is_guarantee',
        'isNeedEmail' => 'is_need_email',
        'itemId' => 'item_id',
        'lastCancelTime' => 'last_cancel_time',
        'maxOccupancy' => 'max_occupancy',
        'minAdvHours' => 'min_adv_hours',
        'minDays' => 'min_days',
        'nod' => 'nod',
        'nop' => 'nop',
        'orderShipTime' => 'order_ship_time',
        'paymentType' => 'payment_type',
        'priceType' => 'price_type',
        'promotionInfo' => 'promotion_info',
        'rateId' => 'rate_id',
        'ratePlanName' => 'rate_plan_name',
        'rpId' => 'rp_id',
        'sellerId' => 'seller_id',
        'startTimeDaily' => 'start_time_daily',
        'status' => 'status',
        'supplierCode' => 'supplier_code',
        'supplierName' => 'supplier_name',
        'supportSpecialInvoice' => 'support_special_invoice',
        'unroundingDailyPriceFormatYuan' => 'unrounding_daily_price_format_yuan',
    ];

    public function validate()
    {
        if (null !== $this->btripCancelRule) {
            $this->btripCancelRule->validate();
        }
        if (\is_array($this->btripHotelCancelDesc)) {
            Model::validateArray($this->btripHotelCancelDesc);
        }
        if (null !== $this->discountDesc) {
            $this->discountDesc->validate();
        }
        if (\is_array($this->hotelDetailRatePriceDTO)) {
            Model::validateArray($this->hotelDetailRatePriceDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bedDesc) {
            $res['bed_desc'] = $this->bedDesc;
        }

        if (null !== $this->bedType) {
            $res['bed_type'] = $this->bedType;
        }

        if (null !== $this->breakfast) {
            $res['breakfast'] = $this->breakfast;
        }

        if (null !== $this->btripCancelRule) {
            $res['btrip_cancel_rule'] = null !== $this->btripCancelRule ? $this->btripCancelRule->toArray($noStream) : $this->btripCancelRule;
        }

        if (null !== $this->btripHotelCancelDesc) {
            if (\is_array($this->btripHotelCancelDesc)) {
                $res['btrip_hotel_cancel_desc'] = [];
                $n1 = 0;
                foreach ($this->btripHotelCancelDesc as $item1) {
                    $res['btrip_hotel_cancel_desc'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->canSmoking) {
            $res['can_smoking'] = $this->canSmoking;
        }

        if (null !== $this->cancelPolicyDesc) {
            $res['cancel_policy_desc'] = $this->cancelPolicyDesc;
        }

        if (null !== $this->cancelPolicyType) {
            $res['cancel_policy_type'] = $this->cancelPolicyType;
        }

        if (null !== $this->companyAassist) {
            $res['company_aassist'] = $this->companyAassist;
        }

        if (null !== $this->confirmType) {
            $res['confirm_type'] = $this->confirmType;
        }

        if (null !== $this->currencyCode) {
            $res['currency_code'] = $this->currencyCode;
        }

        if (null !== $this->dailyPriceFormatYuan) {
            $res['daily_price_format_yuan'] = $this->dailyPriceFormatYuan;
        }

        if (null !== $this->dailyPriceView) {
            $res['daily_price_view'] = $this->dailyPriceView;
        }

        if (null !== $this->discountDesc) {
            $res['discount_desc'] = null !== $this->discountDesc ? $this->discountDesc->toArray($noStream) : $this->discountDesc;
        }

        if (null !== $this->endTimeDaily) {
            $res['end_time_daily'] = $this->endTimeDaily;
        }

        if (null !== $this->hotelDetailRatePriceDTO) {
            if (\is_array($this->hotelDetailRatePriceDTO)) {
                $res['hotel_detail_rate_price_d_t_o'] = [];
                $n1 = 0;
                foreach ($this->hotelDetailRatePriceDTO as $item1) {
                    $res['hotel_detail_rate_price_d_t_o'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instantConfirm) {
            $res['instant_confirm'] = $this->instantConfirm;
        }

        if (null !== $this->inventoryDesc) {
            $res['inventory_desc'] = $this->inventoryDesc;
        }

        if (null !== $this->inventoryPrice) {
            $res['inventory_price'] = $this->inventoryPrice;
        }

        if (null !== $this->isBusinessPay4Goods) {
            $res['is_business_pay4_goods'] = $this->isBusinessPay4Goods;
        }

        if (null !== $this->isGuarantee) {
            $res['is_guarantee'] = $this->isGuarantee;
        }

        if (null !== $this->isNeedEmail) {
            $res['is_need_email'] = $this->isNeedEmail;
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->lastCancelTime) {
            $res['last_cancel_time'] = $this->lastCancelTime;
        }

        if (null !== $this->maxOccupancy) {
            $res['max_occupancy'] = $this->maxOccupancy;
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

        if (null !== $this->orderShipTime) {
            $res['order_ship_time'] = $this->orderShipTime;
        }

        if (null !== $this->paymentType) {
            $res['payment_type'] = $this->paymentType;
        }

        if (null !== $this->priceType) {
            $res['price_type'] = $this->priceType;
        }

        if (null !== $this->promotionInfo) {
            $res['promotion_info'] = $this->promotionInfo;
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

        if (null !== $this->startTimeDaily) {
            $res['start_time_daily'] = $this->startTimeDaily;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->supplierCode) {
            $res['supplier_code'] = $this->supplierCode;
        }

        if (null !== $this->supplierName) {
            $res['supplier_name'] = $this->supplierName;
        }

        if (null !== $this->supportSpecialInvoice) {
            $res['support_special_invoice'] = $this->supportSpecialInvoice;
        }

        if (null !== $this->unroundingDailyPriceFormatYuan) {
            $res['unrounding_daily_price_format_yuan'] = $this->unroundingDailyPriceFormatYuan;
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
        if (isset($map['bed_desc'])) {
            $model->bedDesc = $map['bed_desc'];
        }

        if (isset($map['bed_type'])) {
            $model->bedType = $map['bed_type'];
        }

        if (isset($map['breakfast'])) {
            $model->breakfast = $map['breakfast'];
        }

        if (isset($map['btrip_cancel_rule'])) {
            $model->btripCancelRule = btripCancelRule::fromMap($map['btrip_cancel_rule']);
        }

        if (isset($map['btrip_hotel_cancel_desc'])) {
            if (!empty($map['btrip_hotel_cancel_desc'])) {
                $model->btripHotelCancelDesc = [];
                $n1 = 0;
                foreach ($map['btrip_hotel_cancel_desc'] as $item1) {
                    $model->btripHotelCancelDesc[$n1++] = btripHotelCancelDesc::fromMap($item1);
                }
            }
        }

        if (isset($map['can_smoking'])) {
            $model->canSmoking = $map['can_smoking'];
        }

        if (isset($map['cancel_policy_desc'])) {
            $model->cancelPolicyDesc = $map['cancel_policy_desc'];
        }

        if (isset($map['cancel_policy_type'])) {
            $model->cancelPolicyType = $map['cancel_policy_type'];
        }

        if (isset($map['company_aassist'])) {
            $model->companyAassist = $map['company_aassist'];
        }

        if (isset($map['confirm_type'])) {
            $model->confirmType = $map['confirm_type'];
        }

        if (isset($map['currency_code'])) {
            $model->currencyCode = $map['currency_code'];
        }

        if (isset($map['daily_price_format_yuan'])) {
            $model->dailyPriceFormatYuan = $map['daily_price_format_yuan'];
        }

        if (isset($map['daily_price_view'])) {
            $model->dailyPriceView = $map['daily_price_view'];
        }

        if (isset($map['discount_desc'])) {
            $model->discountDesc = discountDesc::fromMap($map['discount_desc']);
        }

        if (isset($map['end_time_daily'])) {
            $model->endTimeDaily = $map['end_time_daily'];
        }

        if (isset($map['hotel_detail_rate_price_d_t_o'])) {
            if (!empty($map['hotel_detail_rate_price_d_t_o'])) {
                $model->hotelDetailRatePriceDTO = [];
                $n1 = 0;
                foreach ($map['hotel_detail_rate_price_d_t_o'] as $item1) {
                    $model->hotelDetailRatePriceDTO[$n1++] = hotelDetailRatePriceDTO::fromMap($item1);
                }
            }
        }

        if (isset($map['instant_confirm'])) {
            $model->instantConfirm = $map['instant_confirm'];
        }

        if (isset($map['inventory_desc'])) {
            $model->inventoryDesc = $map['inventory_desc'];
        }

        if (isset($map['inventory_price'])) {
            $model->inventoryPrice = $map['inventory_price'];
        }

        if (isset($map['is_business_pay4_goods'])) {
            $model->isBusinessPay4Goods = $map['is_business_pay4_goods'];
        }

        if (isset($map['is_guarantee'])) {
            $model->isGuarantee = $map['is_guarantee'];
        }

        if (isset($map['is_need_email'])) {
            $model->isNeedEmail = $map['is_need_email'];
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['last_cancel_time'])) {
            $model->lastCancelTime = $map['last_cancel_time'];
        }

        if (isset($map['max_occupancy'])) {
            $model->maxOccupancy = $map['max_occupancy'];
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

        if (isset($map['order_ship_time'])) {
            $model->orderShipTime = $map['order_ship_time'];
        }

        if (isset($map['payment_type'])) {
            $model->paymentType = $map['payment_type'];
        }

        if (isset($map['price_type'])) {
            $model->priceType = $map['price_type'];
        }

        if (isset($map['promotion_info'])) {
            $model->promotionInfo = $map['promotion_info'];
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

        if (isset($map['start_time_daily'])) {
            $model->startTimeDaily = $map['start_time_daily'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['supplier_code'])) {
            $model->supplierCode = $map['supplier_code'];
        }

        if (isset($map['supplier_name'])) {
            $model->supplierName = $map['supplier_name'];
        }

        if (isset($map['support_special_invoice'])) {
            $model->supportSpecialInvoice = $map['support_special_invoice'];
        }

        if (isset($map['unrounding_daily_price_format_yuan'])) {
            $model->unroundingDailyPriceFormatYuan = $map['unrounding_daily_price_format_yuan'];
        }

        return $model;
    }
}
