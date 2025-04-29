<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CooperatorHotelBillSettlementQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @var string
     */
    public $applyArrCityCode;

    /**
     * @var string
     */
    public $applyArrCityName;

    /**
     * @var string
     */
    public $applyDepCityCode;

    /**
     * @var string
     */
    public $applyDepCityName;

    /**
     * @var string
     */
    public $applyExtendField;

    /**
     * @var string
     */
    public $applyId;

    /**
     * @var float
     */
    public $averageNights;

    /**
     * @var string
     */
    public $billRecordTime;

    /**
     * @var string
     */
    public $bookChannel;

    /**
     * @var string
     */
    public $bookMode;

    /**
     * @var string
     */
    public $bookReason;

    /**
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
     * @var string
     */
    public $brandGroup;

    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $businessTripResult;

    /**
     * @var string
     */
    public $capitalDirection;

    /**
     * @var string
     */
    public $cascadeDepartment;

    /**
     * @var string
     */
    public $categoryDesc;

    /**
     * @var string
     */
    public $checkInDate;

    /**
     * @var string
     */
    public $checkoutDate;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityCounty;

    /**
     * @var int
     */
    public $cityCountyCode;

    /**
     * @var string
     */
    public $cooperatorBillCode;

    /**
     * @var string
     */
    public $cooperatorName;

    /**
     * @var string
     */
    public $cooperatorOrderId;

    /**
     * @var float
     */
    public $corpRefundFee;

    /**
     * @var float
     */
    public $corpTotalFee;

    /**
     * @var string
     */
    public $costCenter;

    /**
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
     * @var string
     */
    public $exceedReason;

    /**
     * @var string
     */
    public $feeType;

    /**
     * @var string
     */
    public $feeTypeDesc;

    /**
     * @var float
     */
    public $fees;

    /**
     * @var float
     */
    public $fines;

    /**
     * @var float
     */
    public $fuPointFee;

    /**
     * @var string
     */
    public $hotelName;

    /**
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
    public $isEarlyDeparture;

    /**
     * @var string
     */
    public $isNegotiation;

    /**
     * @var string
     */
    public $isShareStr;

    /**
     * @var int
     */
    public $nights;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $overApplyId;

    /**
     * @var string
     */
    public $paymentDepartmentId;

    /**
     * @var string
     */
    public $paymentDepartmentName;

    /**
     * @var float
     */
    public $personRefundFee;

    /**
     * @var float
     */
    public $personSettlePrice;

    /**
     * @var int
     */
    public $primaryId;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var float
     */
    public $promotionFee;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $reserveRule;

    /**
     * @var string
     */
    public $roomNo;

    /**
     * @var int
     */
    public $roomNumber;

    /**
     * @var float
     */
    public $roomPrice;

    /**
     * @var string
     */
    public $roomType;

    /**
     * @var float
     */
    public $serviceFee;

    /**
     * @var string
     */
    public $settleTypeDesc;

    /**
     * @var float
     */
    public $settlementFee;

    /**
     * @var float
     */
    public $settlementGrantFee;

    /**
     * @var string
     */
    public $settlementTime;

    /**
     * @var string
     */
    public $settlementType;

    /**
     * @var string
     */
    public $star;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $subOrderId;

    /**
     * @var string
     */
    public $taxRate;

    /**
     * @var string
     */
    public $thirdInvoiceId;

    /**
     * @var string
     */
    public $thirdItineraryId;

    /**
     * @var int
     */
    public $totalNights;

    /**
     * @var string
     */
    public $tradeActionDesc;

    /**
     * @var string
     */
    public $travelerId;

    /**
     * @var string
     */
    public $travelerJobNo;

    /**
     * @var string
     */
    public $travelerMemberType;

    /**
     * @var string
     */
    public $travelerMemberTypeName;

    /**
     * @var string
     */
    public $travelerName;

    /**
     * @var int
     */
    public $voucherType;

    /**
     * @var string
     */
    public $voucherTypeDesc;
    protected $_name = [
        'alipayTradeNo' => 'alipay_trade_no',
        'applyArrCityCode' => 'apply_arr_city_code',
        'applyArrCityName' => 'apply_arr_city_name',
        'applyDepCityCode' => 'apply_dep_city_code',
        'applyDepCityName' => 'apply_dep_city_name',
        'applyExtendField' => 'apply_extend_field',
        'applyId' => 'apply_id',
        'averageNights' => 'average_nights',
        'billRecordTime' => 'bill_record_time',
        'bookChannel' => 'book_channel',
        'bookMode' => 'book_mode',
        'bookReason' => 'book_reason',
        'bookTime' => 'book_time',
        'bookerId' => 'booker_id',
        'bookerJobNo' => 'booker_job_no',
        'bookerName' => 'booker_name',
        'brandGroup' => 'brand_group',
        'brandName' => 'brand_name',
        'businessTripResult' => 'business_trip_result',
        'capitalDirection' => 'capital_direction',
        'cascadeDepartment' => 'cascade_department',
        'categoryDesc' => 'category_desc',
        'checkInDate' => 'check_in_date',
        'checkoutDate' => 'checkout_date',
        'city' => 'city',
        'cityCode' => 'city_code',
        'cityCounty' => 'city_county',
        'cityCountyCode' => 'city_county_code',
        'cooperatorBillCode' => 'cooperator_bill_code',
        'cooperatorName' => 'cooperator_name',
        'cooperatorOrderId' => 'cooperator_order_id',
        'corpRefundFee' => 'corp_refund_fee',
        'corpTotalFee' => 'corp_total_fee',
        'costCenter' => 'cost_center',
        'costCenterNumber' => 'cost_center_number',
        'department' => 'department',
        'departmentId' => 'department_id',
        'exceedReason' => 'exceed_reason',
        'feeType' => 'fee_type',
        'feeTypeDesc' => 'fee_type_desc',
        'fees' => 'fees',
        'fines' => 'fines',
        'fuPointFee' => 'fu_point_fee',
        'hotelName' => 'hotel_name',
        'index' => 'index',
        'invoiceTitle' => 'invoice_title',
        'isEarlyDeparture' => 'is_early_departure',
        'isNegotiation' => 'is_negotiation',
        'isShareStr' => 'is_share_str',
        'nights' => 'nights',
        'orderId' => 'order_id',
        'orderPrice' => 'order_price',
        'orderStatusDesc' => 'order_status_desc',
        'orderType' => 'order_type',
        'overApplyId' => 'over_apply_id',
        'paymentDepartmentId' => 'payment_department_id',
        'paymentDepartmentName' => 'payment_department_name',
        'personRefundFee' => 'person_refund_fee',
        'personSettlePrice' => 'person_settle_price',
        'primaryId' => 'primary_id',
        'projectCode' => 'project_code',
        'projectName' => 'project_name',
        'promotionFee' => 'promotion_fee',
        'remark' => 'remark',
        'reserveRule' => 'reserve_rule',
        'roomNo' => 'room_no',
        'roomNumber' => 'room_number',
        'roomPrice' => 'room_price',
        'roomType' => 'room_type',
        'serviceFee' => 'service_fee',
        'settleTypeDesc' => 'settle_type_desc',
        'settlementFee' => 'settlement_fee',
        'settlementGrantFee' => 'settlement_grant_fee',
        'settlementTime' => 'settlement_time',
        'settlementType' => 'settlement_type',
        'star' => 'star',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'subOrderId' => 'sub_order_id',
        'taxRate' => 'tax_rate',
        'thirdInvoiceId' => 'third_invoice_id',
        'thirdItineraryId' => 'third_itinerary_id',
        'totalNights' => 'total_nights',
        'tradeActionDesc' => 'trade_action_desc',
        'travelerId' => 'traveler_id',
        'travelerJobNo' => 'traveler_job_no',
        'travelerMemberType' => 'traveler_member_type',
        'travelerMemberTypeName' => 'traveler_member_type_name',
        'travelerName' => 'traveler_name',
        'voucherType' => 'voucher_type',
        'voucherTypeDesc' => 'voucher_type_desc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alipayTradeNo) {
            $res['alipay_trade_no'] = $this->alipayTradeNo;
        }

        if (null !== $this->applyArrCityCode) {
            $res['apply_arr_city_code'] = $this->applyArrCityCode;
        }

        if (null !== $this->applyArrCityName) {
            $res['apply_arr_city_name'] = $this->applyArrCityName;
        }

        if (null !== $this->applyDepCityCode) {
            $res['apply_dep_city_code'] = $this->applyDepCityCode;
        }

        if (null !== $this->applyDepCityName) {
            $res['apply_dep_city_name'] = $this->applyDepCityName;
        }

        if (null !== $this->applyExtendField) {
            $res['apply_extend_field'] = $this->applyExtendField;
        }

        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->averageNights) {
            $res['average_nights'] = $this->averageNights;
        }

        if (null !== $this->billRecordTime) {
            $res['bill_record_time'] = $this->billRecordTime;
        }

        if (null !== $this->bookChannel) {
            $res['book_channel'] = $this->bookChannel;
        }

        if (null !== $this->bookMode) {
            $res['book_mode'] = $this->bookMode;
        }

        if (null !== $this->bookReason) {
            $res['book_reason'] = $this->bookReason;
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

        if (null !== $this->brandGroup) {
            $res['brand_group'] = $this->brandGroup;
        }

        if (null !== $this->brandName) {
            $res['brand_name'] = $this->brandName;
        }

        if (null !== $this->businessTripResult) {
            $res['business_trip_result'] = $this->businessTripResult;
        }

        if (null !== $this->capitalDirection) {
            $res['capital_direction'] = $this->capitalDirection;
        }

        if (null !== $this->cascadeDepartment) {
            $res['cascade_department'] = $this->cascadeDepartment;
        }

        if (null !== $this->categoryDesc) {
            $res['category_desc'] = $this->categoryDesc;
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

        if (null !== $this->cityCounty) {
            $res['city_county'] = $this->cityCounty;
        }

        if (null !== $this->cityCountyCode) {
            $res['city_county_code'] = $this->cityCountyCode;
        }

        if (null !== $this->cooperatorBillCode) {
            $res['cooperator_bill_code'] = $this->cooperatorBillCode;
        }

        if (null !== $this->cooperatorName) {
            $res['cooperator_name'] = $this->cooperatorName;
        }

        if (null !== $this->cooperatorOrderId) {
            $res['cooperator_order_id'] = $this->cooperatorOrderId;
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

        if (null !== $this->exceedReason) {
            $res['exceed_reason'] = $this->exceedReason;
        }

        if (null !== $this->feeType) {
            $res['fee_type'] = $this->feeType;
        }

        if (null !== $this->feeTypeDesc) {
            $res['fee_type_desc'] = $this->feeTypeDesc;
        }

        if (null !== $this->fees) {
            $res['fees'] = $this->fees;
        }

        if (null !== $this->fines) {
            $res['fines'] = $this->fines;
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

        if (null !== $this->isEarlyDeparture) {
            $res['is_early_departure'] = $this->isEarlyDeparture;
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

        if (null !== $this->orderStatusDesc) {
            $res['order_status_desc'] = $this->orderStatusDesc;
        }

        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }

        if (null !== $this->overApplyId) {
            $res['over_apply_id'] = $this->overApplyId;
        }

        if (null !== $this->paymentDepartmentId) {
            $res['payment_department_id'] = $this->paymentDepartmentId;
        }

        if (null !== $this->paymentDepartmentName) {
            $res['payment_department_name'] = $this->paymentDepartmentName;
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

        if (null !== $this->reserveRule) {
            $res['reserve_rule'] = $this->reserveRule;
        }

        if (null !== $this->roomNo) {
            $res['room_no'] = $this->roomNo;
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

        if (null !== $this->settleTypeDesc) {
            $res['settle_type_desc'] = $this->settleTypeDesc;
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

        if (null !== $this->star) {
            $res['star'] = $this->star;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusDesc) {
            $res['status_desc'] = $this->statusDesc;
        }

        if (null !== $this->subOrderId) {
            $res['sub_order_id'] = $this->subOrderId;
        }

        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
        }

        if (null !== $this->thirdInvoiceId) {
            $res['third_invoice_id'] = $this->thirdInvoiceId;
        }

        if (null !== $this->thirdItineraryId) {
            $res['third_itinerary_id'] = $this->thirdItineraryId;
        }

        if (null !== $this->totalNights) {
            $res['total_nights'] = $this->totalNights;
        }

        if (null !== $this->tradeActionDesc) {
            $res['trade_action_desc'] = $this->tradeActionDesc;
        }

        if (null !== $this->travelerId) {
            $res['traveler_id'] = $this->travelerId;
        }

        if (null !== $this->travelerJobNo) {
            $res['traveler_job_no'] = $this->travelerJobNo;
        }

        if (null !== $this->travelerMemberType) {
            $res['traveler_member_type'] = $this->travelerMemberType;
        }

        if (null !== $this->travelerMemberTypeName) {
            $res['traveler_member_type_name'] = $this->travelerMemberTypeName;
        }

        if (null !== $this->travelerName) {
            $res['traveler_name'] = $this->travelerName;
        }

        if (null !== $this->voucherType) {
            $res['voucher_type'] = $this->voucherType;
        }

        if (null !== $this->voucherTypeDesc) {
            $res['voucher_type_desc'] = $this->voucherTypeDesc;
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
        if (isset($map['alipay_trade_no'])) {
            $model->alipayTradeNo = $map['alipay_trade_no'];
        }

        if (isset($map['apply_arr_city_code'])) {
            $model->applyArrCityCode = $map['apply_arr_city_code'];
        }

        if (isset($map['apply_arr_city_name'])) {
            $model->applyArrCityName = $map['apply_arr_city_name'];
        }

        if (isset($map['apply_dep_city_code'])) {
            $model->applyDepCityCode = $map['apply_dep_city_code'];
        }

        if (isset($map['apply_dep_city_name'])) {
            $model->applyDepCityName = $map['apply_dep_city_name'];
        }

        if (isset($map['apply_extend_field'])) {
            $model->applyExtendField = $map['apply_extend_field'];
        }

        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['average_nights'])) {
            $model->averageNights = $map['average_nights'];
        }

        if (isset($map['bill_record_time'])) {
            $model->billRecordTime = $map['bill_record_time'];
        }

        if (isset($map['book_channel'])) {
            $model->bookChannel = $map['book_channel'];
        }

        if (isset($map['book_mode'])) {
            $model->bookMode = $map['book_mode'];
        }

        if (isset($map['book_reason'])) {
            $model->bookReason = $map['book_reason'];
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

        if (isset($map['brand_group'])) {
            $model->brandGroup = $map['brand_group'];
        }

        if (isset($map['brand_name'])) {
            $model->brandName = $map['brand_name'];
        }

        if (isset($map['business_trip_result'])) {
            $model->businessTripResult = $map['business_trip_result'];
        }

        if (isset($map['capital_direction'])) {
            $model->capitalDirection = $map['capital_direction'];
        }

        if (isset($map['cascade_department'])) {
            $model->cascadeDepartment = $map['cascade_department'];
        }

        if (isset($map['category_desc'])) {
            $model->categoryDesc = $map['category_desc'];
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

        if (isset($map['city_county'])) {
            $model->cityCounty = $map['city_county'];
        }

        if (isset($map['city_county_code'])) {
            $model->cityCountyCode = $map['city_county_code'];
        }

        if (isset($map['cooperator_bill_code'])) {
            $model->cooperatorBillCode = $map['cooperator_bill_code'];
        }

        if (isset($map['cooperator_name'])) {
            $model->cooperatorName = $map['cooperator_name'];
        }

        if (isset($map['cooperator_order_id'])) {
            $model->cooperatorOrderId = $map['cooperator_order_id'];
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

        if (isset($map['exceed_reason'])) {
            $model->exceedReason = $map['exceed_reason'];
        }

        if (isset($map['fee_type'])) {
            $model->feeType = $map['fee_type'];
        }

        if (isset($map['fee_type_desc'])) {
            $model->feeTypeDesc = $map['fee_type_desc'];
        }

        if (isset($map['fees'])) {
            $model->fees = $map['fees'];
        }

        if (isset($map['fines'])) {
            $model->fines = $map['fines'];
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

        if (isset($map['is_early_departure'])) {
            $model->isEarlyDeparture = $map['is_early_departure'];
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

        if (isset($map['order_status_desc'])) {
            $model->orderStatusDesc = $map['order_status_desc'];
        }

        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }

        if (isset($map['over_apply_id'])) {
            $model->overApplyId = $map['over_apply_id'];
        }

        if (isset($map['payment_department_id'])) {
            $model->paymentDepartmentId = $map['payment_department_id'];
        }

        if (isset($map['payment_department_name'])) {
            $model->paymentDepartmentName = $map['payment_department_name'];
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

        if (isset($map['reserve_rule'])) {
            $model->reserveRule = $map['reserve_rule'];
        }

        if (isset($map['room_no'])) {
            $model->roomNo = $map['room_no'];
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

        if (isset($map['settle_type_desc'])) {
            $model->settleTypeDesc = $map['settle_type_desc'];
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

        if (isset($map['star'])) {
            $model->star = $map['star'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['status_desc'])) {
            $model->statusDesc = $map['status_desc'];
        }

        if (isset($map['sub_order_id'])) {
            $model->subOrderId = $map['sub_order_id'];
        }

        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }

        if (isset($map['third_invoice_id'])) {
            $model->thirdInvoiceId = $map['third_invoice_id'];
        }

        if (isset($map['third_itinerary_id'])) {
            $model->thirdItineraryId = $map['third_itinerary_id'];
        }

        if (isset($map['total_nights'])) {
            $model->totalNights = $map['total_nights'];
        }

        if (isset($map['trade_action_desc'])) {
            $model->tradeActionDesc = $map['trade_action_desc'];
        }

        if (isset($map['traveler_id'])) {
            $model->travelerId = $map['traveler_id'];
        }

        if (isset($map['traveler_job_no'])) {
            $model->travelerJobNo = $map['traveler_job_no'];
        }

        if (isset($map['traveler_member_type'])) {
            $model->travelerMemberType = $map['traveler_member_type'];
        }

        if (isset($map['traveler_member_type_name'])) {
            $model->travelerMemberTypeName = $map['traveler_member_type_name'];
        }

        if (isset($map['traveler_name'])) {
            $model->travelerName = $map['traveler_name'];
        }

        if (isset($map['voucher_type'])) {
            $model->voucherType = $map['voucher_type'];
        }

        if (isset($map['voucher_type_desc'])) {
            $model->voucherTypeDesc = $map['voucher_type_desc'];
        }

        return $model;
    }
}
