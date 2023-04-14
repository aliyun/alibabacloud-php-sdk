<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\btripHotelCancelPolicyDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\cancelInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\hotelDetailInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\invoiceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\occupantInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\roomNightPriceInfoList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 2022-01-29
     *
     * @var string
     */
    public $actualCheckInTime;

    /**
     * @example 2022-01-29
     *
     * @var string
     */
    public $actualCheckOutTime;

    /**
     * @var btripHotelCancelPolicyDTO
     */
    public $btripHotelCancelPolicyDTO;

    /**
     * @example 123
     *
     * @var string
     */
    public $btripOrderId;

    /**
     * @example 100
     *
     * @var int
     */
    public $cancelFine;

    /**
     * @var cancelInfo
     */
    public $cancelInfo;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $checkIn;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $checkOut;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $confirmOrderTime;

    /**
     * @var string
     */
    public $contractName;

    /**
     * @example 12316261873
     *
     * @var string
     */
    public $contractTel;

    /**
     * @example 2020-01-21
     *
     * @var string
     */
    public $createOrderTime;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $earlyArrivalTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $earlyDeparture;

    /**
     * @example 2
     *
     * @var int
     */
    public $guestCount;

    /**
     * @var hotelDetailInfo
     */
    public $hotelDetailInfo;

    /**
     * @var invoiceInfo
     */
    public $invoiceInfo;

    /**
     * @example 1289918
     *
     * @var string
     */
    public $itemId;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $lastArrivalTime;

    /**
     * @var occupantInfoList[]
     */
    public $occupantInfoList;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $payTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $productType;

    /**
     * @example 100328718728171
     *
     * @var string
     */
    public $purchaseOrderId;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundPrice;

    /**
     * @example demo
     *
     * @var string
     */
    public $refundReason;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundServiceFee;

    /**
     * @var roomNightPriceInfoList[]
     */
    public $roomNightPriceInfoList;

    /**
     * @example 1
     *
     * @var int
     */
    public $roomNumber;

    /**
     * @var string
     */
    public $roomTypeName;

    /**
     * @example 2088441675613762
     *
     * @var string
     */
    public $sellerId;

    /**
     * @example taobao
     *
     * @var string
     */
    public $sellerName;

    /**
     * @example 1.02
     *
     * @var int
     */
    public $serviceFee;

    /**
     * @example 0
     *
     * @var string
     */
    public $settleType;

    /**
     * @example dis123
     *
     * @var string
     */
    public $supplierOrderId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'actualCheckInTime'         => 'actual_check_in_time',
        'actualCheckOutTime'        => 'actual_check_out_time',
        'btripHotelCancelPolicyDTO' => 'btrip_hotel_cancel_policy_d_t_o',
        'btripOrderId'              => 'btrip_order_id',
        'cancelFine'                => 'cancel_fine',
        'cancelInfo'                => 'cancel_info',
        'checkIn'                   => 'check_in',
        'checkOut'                  => 'check_out',
        'confirmOrderTime'          => 'confirm_order_time',
        'contractName'              => 'contract_name',
        'contractTel'               => 'contract_tel',
        'createOrderTime'           => 'create_order_time',
        'earlyArrivalTime'          => 'early_arrival_time',
        'earlyDeparture'            => 'early_departure',
        'guestCount'                => 'guest_count',
        'hotelDetailInfo'           => 'hotel_detail_info',
        'invoiceInfo'               => 'invoice_info',
        'itemId'                    => 'item_id',
        'lastArrivalTime'           => 'last_arrival_time',
        'occupantInfoList'          => 'occupant_info_list',
        'orderStatus'               => 'order_status',
        'orderStatusDesc'           => 'order_status_desc',
        'payTime'                   => 'pay_time',
        'productType'               => 'product_type',
        'purchaseOrderId'           => 'purchase_order_id',
        'refundPrice'               => 'refund_price',
        'refundReason'              => 'refund_reason',
        'refundServiceFee'          => 'refund_service_fee',
        'roomNightPriceInfoList'    => 'room_night_price_info_list',
        'roomNumber'                => 'room_number',
        'roomTypeName'              => 'room_type_name',
        'sellerId'                  => 'seller_id',
        'sellerName'                => 'seller_name',
        'serviceFee'                => 'service_fee',
        'settleType'                => 'settle_type',
        'supplierOrderId'           => 'supplier_order_id',
        'totalPrice'                => 'total_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualCheckInTime) {
            $res['actual_check_in_time'] = $this->actualCheckInTime;
        }
        if (null !== $this->actualCheckOutTime) {
            $res['actual_check_out_time'] = $this->actualCheckOutTime;
        }
        if (null !== $this->btripHotelCancelPolicyDTO) {
            $res['btrip_hotel_cancel_policy_d_t_o'] = null !== $this->btripHotelCancelPolicyDTO ? $this->btripHotelCancelPolicyDTO->toMap() : null;
        }
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->cancelFine) {
            $res['cancel_fine'] = $this->cancelFine;
        }
        if (null !== $this->cancelInfo) {
            $res['cancel_info'] = null !== $this->cancelInfo ? $this->cancelInfo->toMap() : null;
        }
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }
        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }
        if (null !== $this->confirmOrderTime) {
            $res['confirm_order_time'] = $this->confirmOrderTime;
        }
        if (null !== $this->contractName) {
            $res['contract_name'] = $this->contractName;
        }
        if (null !== $this->contractTel) {
            $res['contract_tel'] = $this->contractTel;
        }
        if (null !== $this->createOrderTime) {
            $res['create_order_time'] = $this->createOrderTime;
        }
        if (null !== $this->earlyArrivalTime) {
            $res['early_arrival_time'] = $this->earlyArrivalTime;
        }
        if (null !== $this->earlyDeparture) {
            $res['early_departure'] = $this->earlyDeparture;
        }
        if (null !== $this->guestCount) {
            $res['guest_count'] = $this->guestCount;
        }
        if (null !== $this->hotelDetailInfo) {
            $res['hotel_detail_info'] = null !== $this->hotelDetailInfo ? $this->hotelDetailInfo->toMap() : null;
        }
        if (null !== $this->invoiceInfo) {
            $res['invoice_info'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toMap() : null;
        }
        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }
        if (null !== $this->lastArrivalTime) {
            $res['last_arrival_time'] = $this->lastArrivalTime;
        }
        if (null !== $this->occupantInfoList) {
            $res['occupant_info_list'] = [];
            if (null !== $this->occupantInfoList && \is_array($this->occupantInfoList)) {
                $n = 0;
                foreach ($this->occupantInfoList as $item) {
                    $res['occupant_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->orderStatusDesc) {
            $res['order_status_desc'] = $this->orderStatusDesc;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->productType) {
            $res['product_type'] = $this->productType;
        }
        if (null !== $this->purchaseOrderId) {
            $res['purchase_order_id'] = $this->purchaseOrderId;
        }
        if (null !== $this->refundPrice) {
            $res['refund_price'] = $this->refundPrice;
        }
        if (null !== $this->refundReason) {
            $res['refund_reason'] = $this->refundReason;
        }
        if (null !== $this->refundServiceFee) {
            $res['refund_service_fee'] = $this->refundServiceFee;
        }
        if (null !== $this->roomNightPriceInfoList) {
            $res['room_night_price_info_list'] = [];
            if (null !== $this->roomNightPriceInfoList && \is_array($this->roomNightPriceInfoList)) {
                $n = 0;
                foreach ($this->roomNightPriceInfoList as $item) {
                    $res['room_night_price_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roomNumber) {
            $res['room_number'] = $this->roomNumber;
        }
        if (null !== $this->roomTypeName) {
            $res['room_type_name'] = $this->roomTypeName;
        }
        if (null !== $this->sellerId) {
            $res['seller_id'] = $this->sellerId;
        }
        if (null !== $this->sellerName) {
            $res['seller_name'] = $this->sellerName;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }
        if (null !== $this->settleType) {
            $res['settle_type'] = $this->settleType;
        }
        if (null !== $this->supplierOrderId) {
            $res['supplier_order_id'] = $this->supplierOrderId;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actual_check_in_time'])) {
            $model->actualCheckInTime = $map['actual_check_in_time'];
        }
        if (isset($map['actual_check_out_time'])) {
            $model->actualCheckOutTime = $map['actual_check_out_time'];
        }
        if (isset($map['btrip_hotel_cancel_policy_d_t_o'])) {
            $model->btripHotelCancelPolicyDTO = btripHotelCancelPolicyDTO::fromMap($map['btrip_hotel_cancel_policy_d_t_o']);
        }
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['cancel_fine'])) {
            $model->cancelFine = $map['cancel_fine'];
        }
        if (isset($map['cancel_info'])) {
            $model->cancelInfo = cancelInfo::fromMap($map['cancel_info']);
        }
        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }
        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }
        if (isset($map['confirm_order_time'])) {
            $model->confirmOrderTime = $map['confirm_order_time'];
        }
        if (isset($map['contract_name'])) {
            $model->contractName = $map['contract_name'];
        }
        if (isset($map['contract_tel'])) {
            $model->contractTel = $map['contract_tel'];
        }
        if (isset($map['create_order_time'])) {
            $model->createOrderTime = $map['create_order_time'];
        }
        if (isset($map['early_arrival_time'])) {
            $model->earlyArrivalTime = $map['early_arrival_time'];
        }
        if (isset($map['early_departure'])) {
            $model->earlyDeparture = $map['early_departure'];
        }
        if (isset($map['guest_count'])) {
            $model->guestCount = $map['guest_count'];
        }
        if (isset($map['hotel_detail_info'])) {
            $model->hotelDetailInfo = hotelDetailInfo::fromMap($map['hotel_detail_info']);
        }
        if (isset($map['invoice_info'])) {
            $model->invoiceInfo = invoiceInfo::fromMap($map['invoice_info']);
        }
        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }
        if (isset($map['last_arrival_time'])) {
            $model->lastArrivalTime = $map['last_arrival_time'];
        }
        if (isset($map['occupant_info_list'])) {
            if (!empty($map['occupant_info_list'])) {
                $model->occupantInfoList = [];
                $n                       = 0;
                foreach ($map['occupant_info_list'] as $item) {
                    $model->occupantInfoList[$n++] = null !== $item ? occupantInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }
        if (isset($map['order_status_desc'])) {
            $model->orderStatusDesc = $map['order_status_desc'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['product_type'])) {
            $model->productType = $map['product_type'];
        }
        if (isset($map['purchase_order_id'])) {
            $model->purchaseOrderId = $map['purchase_order_id'];
        }
        if (isset($map['refund_price'])) {
            $model->refundPrice = $map['refund_price'];
        }
        if (isset($map['refund_reason'])) {
            $model->refundReason = $map['refund_reason'];
        }
        if (isset($map['refund_service_fee'])) {
            $model->refundServiceFee = $map['refund_service_fee'];
        }
        if (isset($map['room_night_price_info_list'])) {
            if (!empty($map['room_night_price_info_list'])) {
                $model->roomNightPriceInfoList = [];
                $n                             = 0;
                foreach ($map['room_night_price_info_list'] as $item) {
                    $model->roomNightPriceInfoList[$n++] = null !== $item ? roomNightPriceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['room_number'])) {
            $model->roomNumber = $map['room_number'];
        }
        if (isset($map['room_type_name'])) {
            $model->roomTypeName = $map['room_type_name'];
        }
        if (isset($map['seller_id'])) {
            $model->sellerId = $map['seller_id'];
        }
        if (isset($map['seller_name'])) {
            $model->sellerName = $map['seller_name'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }
        if (isset($map['settle_type'])) {
            $model->settleType = $map['settle_type'];
        }
        if (isset($map['supplier_order_id'])) {
            $model->supplierOrderId = $map['supplier_order_id'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}
