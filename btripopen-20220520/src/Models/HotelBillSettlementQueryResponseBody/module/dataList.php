<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelBillSettlementQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 234432432
     *
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @description 审批扩展自定义字段
     *
     * @var string
     */
    public $applyExtendField;

    /**
     * @example 103208648
     *
     * @var string
     */
    public $applyId;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $billRecordTime;

    /**
     * @example 2021-10-12 23:58:48
     *
     * @var string
     */
    public $bookTime;

    /**
     * @var string
     */
    public $bookerId;

    /**
     * @var string
     */
    public $bookerJobNo;

    /**
     * @var string
     */
    public $bookerName;

    /**
     * @example 1
     *
     * @var string
     */
    public $capitalDirection;

    /**
     * @var string
     */
    public $cascadeDepartment;

    /**
     * @example 2021-10-14 00:00:00
     *
     * @var string
     */
    public $checkInDate;

    /**
     * @example 2021-10-16 00:00:00
     *
     * @var string
     */
    public $checkoutDate;

    /**
     * @var string
     */
    public $city;

    /**
     * @example 110100
     *
     * @var string
     */
    public $cityCode;

    /**
     * @example 12
     *
     * @var float
     */
    public $corpRefundFee;

    /**
     * @example 1000
     *
     * @var float
     */
    public $corpTotalFee;

    /**
     * @var string
     */
    public $costCenter;

    /**
     * @example 8b7f3cd-24324-097
     *
     * @var string
     */
    public $costCenterNumber;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $departmentId;

    /**
     * @example 20101
     *
     * @var string
     */
    public $feeType;

    /**
     * @example 0
     *
     * @var float
     */
    public $fees;

    /**
     * @example 12
     *
     * @var float
     */
    public $fuPointFee;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @example 5038018
     *
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $isNegotiation;

    /**
     * @var string
     */
    public $isShareStr;

    /**
     * @example 2
     *
     * @var int
     */
    public $nights;

    /**
     * @example 223423423432422
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 1088.96
     *
     * @var float
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @example 4234324
     *
     * @var string
     */
    public $overApplyId;

    /**
     * @example 34
     *
     * @var float
     */
    public $personRefundFee;

    /**
     * @example 88.96
     *
     * @var float
     */
    public $personSettlePrice;

    /**
     * @example 5038018
     *
     * @var int
     */
    public $primaryId;

    /**
     * @example 223423432
     *
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example 113.02
     *
     * @var float
     */
    public $promotionFee;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 1
     *
     * @var int
     */
    public $roomNumber;

    /**
     * @example 1201.98
     *
     * @var float
     */
    public $roomPrice;

    /**
     * @var string
     */
    public $roomType;

    /**
     * @example 0
     *
     * @var float
     */
    public $serviceFee;

    /**
     * @example 1000
     *
     * @var float
     */
    public $settlementFee;

    /**
     * @example 5.68
     *
     * @var float
     */
    public $settlementGrantFee;

    /**
     * @example 2021-10-12 23:58:56
     *
     * @var string
     */
    public $settlementTime;

    /**
     * @example 4
     *
     * @var string
     */
    public $settlementType;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description 税率
     *
     * @example 6%
     *
     * @var string
     */
    public $taxRate;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalNights;

    /**
     * @var string
     */
    public $travelerId;

    /**
     * @example 326246
     *
     * @var string
     */
    public $travelerJobNo;

    /**
     * @var string
     */
    public $travelerName;

    /**
     * @example 11
     *
     * @var int
     */
    public $voucherType;
    protected $_name = [
        'alipayTradeNo'      => 'alipay_trade_no',
        'applyExtendField'   => 'apply_extend_field',
        'applyId'            => 'apply_id',
        'billRecordTime'     => 'bill_record_time',
        'bookTime'           => 'book_time',
        'bookerId'           => 'booker_id',
        'bookerJobNo'        => 'booker_job_no',
        'bookerName'         => 'booker_name',
        'capitalDirection'   => 'capital_direction',
        'cascadeDepartment'  => 'cascade_department',
        'checkInDate'        => 'check_in_date',
        'checkoutDate'       => 'checkout_date',
        'city'               => 'city',
        'cityCode'           => 'city_code',
        'corpRefundFee'      => 'corp_refund_fee',
        'corpTotalFee'       => 'corp_total_fee',
        'costCenter'         => 'cost_center',
        'costCenterNumber'   => 'cost_center_number',
        'department'         => 'department',
        'departmentId'       => 'department_id',
        'feeType'            => 'fee_type',
        'fees'               => 'fees',
        'fuPointFee'         => 'fu_point_fee',
        'hotelName'          => 'hotel_name',
        'index'              => 'index',
        'invoiceTitle'       => 'invoice_title',
        'isNegotiation'      => 'is_negotiation',
        'isShareStr'         => 'is_share_str',
        'nights'             => 'nights',
        'orderId'            => 'order_id',
        'orderPrice'         => 'order_price',
        'orderType'          => 'order_type',
        'overApplyId'        => 'over_apply_id',
        'personRefundFee'    => 'person_refund_fee',
        'personSettlePrice'  => 'person_settle_price',
        'primaryId'          => 'primary_id',
        'projectCode'        => 'project_code',
        'projectName'        => 'project_name',
        'promotionFee'       => 'promotion_fee',
        'remark'             => 'remark',
        'roomNumber'         => 'room_number',
        'roomPrice'          => 'room_price',
        'roomType'           => 'room_type',
        'serviceFee'         => 'service_fee',
        'settlementFee'      => 'settlement_fee',
        'settlementGrantFee' => 'settlement_grant_fee',
        'settlementTime'     => 'settlement_time',
        'settlementType'     => 'settlement_type',
        'status'             => 'status',
        'taxRate'            => 'tax_rate',
        'totalNights'        => 'total_nights',
        'travelerId'         => 'traveler_id',
        'travelerJobNo'      => 'traveler_job_no',
        'travelerName'       => 'traveler_name',
        'voucherType'        => 'voucher_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alipayTradeNo) {
            $res['alipay_trade_no'] = $this->alipayTradeNo;
        }
        if (null !== $this->applyExtendField) {
            $res['apply_extend_field'] = $this->applyExtendField;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->billRecordTime) {
            $res['bill_record_time'] = $this->billRecordTime;
        }
        if (null !== $this->bookTime) {
            $res['book_time'] = $this->bookTime;
        }
        if (null !== $this->bookerId) {
            $res['booker_id'] = $this->bookerId;
        }
        if (null !== $this->bookerJobNo) {
            $res['booker_job_no'] = $this->bookerJobNo;
        }
        if (null !== $this->bookerName) {
            $res['booker_name'] = $this->bookerName;
        }
        if (null !== $this->capitalDirection) {
            $res['capital_direction'] = $this->capitalDirection;
        }
        if (null !== $this->cascadeDepartment) {
            $res['cascade_department'] = $this->cascadeDepartment;
        }
        if (null !== $this->checkInDate) {
            $res['check_in_date'] = $this->checkInDate;
        }
        if (null !== $this->checkoutDate) {
            $res['checkout_date'] = $this->checkoutDate;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->corpRefundFee) {
            $res['corp_refund_fee'] = $this->corpRefundFee;
        }
        if (null !== $this->corpTotalFee) {
            $res['corp_total_fee'] = $this->corpTotalFee;
        }
        if (null !== $this->costCenter) {
            $res['cost_center'] = $this->costCenter;
        }
        if (null !== $this->costCenterNumber) {
            $res['cost_center_number'] = $this->costCenterNumber;
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->departmentId) {
            $res['department_id'] = $this->departmentId;
        }
        if (null !== $this->feeType) {
            $res['fee_type'] = $this->feeType;
        }
        if (null !== $this->fees) {
            $res['fees'] = $this->fees;
        }
        if (null !== $this->fuPointFee) {
            $res['fu_point_fee'] = $this->fuPointFee;
        }
        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->isNegotiation) {
            $res['is_negotiation'] = $this->isNegotiation;
        }
        if (null !== $this->isShareStr) {
            $res['is_share_str'] = $this->isShareStr;
        }
        if (null !== $this->nights) {
            $res['nights'] = $this->nights;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->orderPrice) {
            $res['order_price'] = $this->orderPrice;
        }
        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }
        if (null !== $this->overApplyId) {
            $res['over_apply_id'] = $this->overApplyId;
        }
        if (null !== $this->personRefundFee) {
            $res['person_refund_fee'] = $this->personRefundFee;
        }
        if (null !== $this->personSettlePrice) {
            $res['person_settle_price'] = $this->personSettlePrice;
        }
        if (null !== $this->primaryId) {
            $res['primary_id'] = $this->primaryId;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectName) {
            $res['project_name'] = $this->projectName;
        }
        if (null !== $this->promotionFee) {
            $res['promotion_fee'] = $this->promotionFee;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->roomNumber) {
            $res['room_number'] = $this->roomNumber;
        }
        if (null !== $this->roomPrice) {
            $res['room_price'] = $this->roomPrice;
        }
        if (null !== $this->roomType) {
            $res['room_type'] = $this->roomType;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }
        if (null !== $this->settlementFee) {
            $res['settlement_fee'] = $this->settlementFee;
        }
        if (null !== $this->settlementGrantFee) {
            $res['settlement_grant_fee'] = $this->settlementGrantFee;
        }
        if (null !== $this->settlementTime) {
            $res['settlement_time'] = $this->settlementTime;
        }
        if (null !== $this->settlementType) {
            $res['settlement_type'] = $this->settlementType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
        }
        if (null !== $this->totalNights) {
            $res['total_nights'] = $this->totalNights;
        }
        if (null !== $this->travelerId) {
            $res['traveler_id'] = $this->travelerId;
        }
        if (null !== $this->travelerJobNo) {
            $res['traveler_job_no'] = $this->travelerJobNo;
        }
        if (null !== $this->travelerName) {
            $res['traveler_name'] = $this->travelerName;
        }
        if (null !== $this->voucherType) {
            $res['voucher_type'] = $this->voucherType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alipay_trade_no'])) {
            $model->alipayTradeNo = $map['alipay_trade_no'];
        }
        if (isset($map['apply_extend_field'])) {
            $model->applyExtendField = $map['apply_extend_field'];
        }
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['bill_record_time'])) {
            $model->billRecordTime = $map['bill_record_time'];
        }
        if (isset($map['book_time'])) {
            $model->bookTime = $map['book_time'];
        }
        if (isset($map['booker_id'])) {
            $model->bookerId = $map['booker_id'];
        }
        if (isset($map['booker_job_no'])) {
            $model->bookerJobNo = $map['booker_job_no'];
        }
        if (isset($map['booker_name'])) {
            $model->bookerName = $map['booker_name'];
        }
        if (isset($map['capital_direction'])) {
            $model->capitalDirection = $map['capital_direction'];
        }
        if (isset($map['cascade_department'])) {
            $model->cascadeDepartment = $map['cascade_department'];
        }
        if (isset($map['check_in_date'])) {
            $model->checkInDate = $map['check_in_date'];
        }
        if (isset($map['checkout_date'])) {
            $model->checkoutDate = $map['checkout_date'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['corp_refund_fee'])) {
            $model->corpRefundFee = $map['corp_refund_fee'];
        }
        if (isset($map['corp_total_fee'])) {
            $model->corpTotalFee = $map['corp_total_fee'];
        }
        if (isset($map['cost_center'])) {
            $model->costCenter = $map['cost_center'];
        }
        if (isset($map['cost_center_number'])) {
            $model->costCenterNumber = $map['cost_center_number'];
        }
        if (isset($map['department'])) {
            $model->department = $map['department'];
        }
        if (isset($map['department_id'])) {
            $model->departmentId = $map['department_id'];
        }
        if (isset($map['fee_type'])) {
            $model->feeType = $map['fee_type'];
        }
        if (isset($map['fees'])) {
            $model->fees = $map['fees'];
        }
        if (isset($map['fu_point_fee'])) {
            $model->fuPointFee = $map['fu_point_fee'];
        }
        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['is_negotiation'])) {
            $model->isNegotiation = $map['is_negotiation'];
        }
        if (isset($map['is_share_str'])) {
            $model->isShareStr = $map['is_share_str'];
        }
        if (isset($map['nights'])) {
            $model->nights = $map['nights'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['order_price'])) {
            $model->orderPrice = $map['order_price'];
        }
        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }
        if (isset($map['over_apply_id'])) {
            $model->overApplyId = $map['over_apply_id'];
        }
        if (isset($map['person_refund_fee'])) {
            $model->personRefundFee = $map['person_refund_fee'];
        }
        if (isset($map['person_settle_price'])) {
            $model->personSettlePrice = $map['person_settle_price'];
        }
        if (isset($map['primary_id'])) {
            $model->primaryId = $map['primary_id'];
        }
        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }
        if (isset($map['project_name'])) {
            $model->projectName = $map['project_name'];
        }
        if (isset($map['promotion_fee'])) {
            $model->promotionFee = $map['promotion_fee'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['room_number'])) {
            $model->roomNumber = $map['room_number'];
        }
        if (isset($map['room_price'])) {
            $model->roomPrice = $map['room_price'];
        }
        if (isset($map['room_type'])) {
            $model->roomType = $map['room_type'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }
        if (isset($map['settlement_fee'])) {
            $model->settlementFee = $map['settlement_fee'];
        }
        if (isset($map['settlement_grant_fee'])) {
            $model->settlementGrantFee = $map['settlement_grant_fee'];
        }
        if (isset($map['settlement_time'])) {
            $model->settlementTime = $map['settlement_time'];
        }
        if (isset($map['settlement_type'])) {
            $model->settlementType = $map['settlement_type'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }
        if (isset($map['total_nights'])) {
            $model->totalNights = $map['total_nights'];
        }
        if (isset($map['traveler_id'])) {
            $model->travelerId = $map['traveler_id'];
        }
        if (isset($map['traveler_job_no'])) {
            $model->travelerJobNo = $map['traveler_job_no'];
        }
        if (isset($map['traveler_name'])) {
            $model->travelerName = $map['traveler_name'];
        }
        if (isset($map['voucher_type'])) {
            $model->voucherType = $map['voucher_type'];
        }

        return $model;
    }
}
