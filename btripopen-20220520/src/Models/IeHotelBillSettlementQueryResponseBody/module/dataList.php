<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IeHotelBillSettlementQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 2021123432260
     *
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @example AUD
     *
     * @var string
     */
    public $amountCurrency;

    /**
     * @example MDG
     *
     * @var string
     */
    public $applyArrCityCode;

    /**
     * @var string
     */
    public $applyArrCityName;

    /**
     * @example HRB
     *
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
     * @example 103189557
     *
     * @var string
     */
    public $applyId;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $averageNights;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $billRecordTime;

    /**
     * @var string
     */
    public $bookReason;

    /**
     * @example 2021-10-08 23:38:55
     *
     * @var string
     */
    public $bookTime;

    /**
     * @example al_xinuan.zsy
     *
     * @var string
     */
    public $bookerId;

    /**
     * @example 70022164
     *
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
     * @example XXX
     *
     * @var string
     */
    public $brandName;

    /**
     * @example 1345
     *
     * @var int
     */
    public $businessExpense;

    /**
     * @var string
     */
    public $businessTripResult;

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
    public $country;

    /**
     * @example 1454567
     *
     * @var string
     */
    public $countryCode;

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
     * @example 20101
     *
     * @var string
     */
    public $feeType;

    /**
     * @example 10.1
     *
     * @var float
     */
    public $fines;

    /**
     * @example 345
     *
     * @var int
     */
    public $foreignBusinessExpense;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @example 5
     *
     * @var string
     */
    public $hotelStar;

    /**
     * @example 4564547
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
     * @example 132143534543
     *
     * @var string
     */
    public $mainApplyId;

    /**
     * @example 2
     *
     * @var int
     */
    public $nights;

    /**
     * @example 110285961234324
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
     * @example null
     *
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @example 534545345
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
     * @example 4564547
     *
     * @var int
     */
    public $primaryId;

    /**
     * @example 2345235435
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
     * @example 1.0d
     *
     * @var string
     */
    public $rate;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 1
     *
     * @var int
     */
    public $reserveRule;

    /**
     * @var string
     */
    public $roomNo;

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
     * @example 23.9
     *
     * @var float
     */
    public $serviceFee;

    /**
     * @example 350
     *
     * @var float
     */
    public $settlementFee;

    /**
     * @example 6.11
     *
     * @var float
     */
    public $settlementGrantFee;

    /**
     * @example 2022-05-15T22:27Z
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
     * @example 123123232
     *
     * @var string
     */
    public $subOrderId;

    /**
     * @example 6%
     *
     * @var string
     */
    public $taxRate;

    /**
     * @example 1321445511345
     *
     * @var string
     */
    public $thirdInvoiceId;

    /**
     * @example AB0-CDE-1-F-1234567891011
     *
     * @var string
     */
    public $thirdItineraryId;

    /**
     * @example 202311081011000348578
     *
     * @var string
     */
    public $thirdPartBusinessId;

    /**
     * @example MGI18000230221072483
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalNights;

    /**
     * @example al_xinuan.zsy
     *
     * @var string
     */
    public $travelerId;

    /**
     * @example 345345
     *
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
    public $travelerName;

    /**
     * @example 11
     *
     * @var int
     */
    public $voucherType;
    protected $_name = [
        'alipayTradeNo'          => 'alipay_trade_no',
        'amountCurrency'         => 'amount_currency',
        'applyArrCityCode'       => 'apply_arr_city_code',
        'applyArrCityName'       => 'apply_arr_city_name',
        'applyDepCityCode'       => 'apply_dep_city_code',
        'applyDepCityName'       => 'apply_dep_city_name',
        'applyExtendField'       => 'apply_extend_field',
        'applyId'                => 'apply_id',
        'averageNights'          => 'average_nights',
        'billRecordTime'         => 'bill_record_time',
        'bookReason'             => 'book_reason',
        'bookTime'               => 'book_time',
        'bookerId'               => 'booker_id',
        'bookerJobNo'            => 'booker_job_no',
        'bookerName'             => 'booker_name',
        'brandGroup'             => 'brand_group',
        'brandName'              => 'brand_name',
        'businessExpense'        => 'business_expense',
        'businessTripResult'     => 'business_trip_result',
        'capitalDirection'       => 'capital_direction',
        'cascadeDepartment'      => 'cascade_department',
        'checkInDate'            => 'check_in_date',
        'checkoutDate'           => 'checkout_date',
        'city'                   => 'city',
        'cityCode'               => 'city_code',
        'corpRefundFee'          => 'corp_refund_fee',
        'corpTotalFee'           => 'corp_total_fee',
        'costCenter'             => 'cost_center',
        'costCenterNumber'       => 'cost_center_number',
        'country'                => 'country',
        'countryCode'            => 'country_code',
        'department'             => 'department',
        'departmentId'           => 'department_id',
        'exceedReason'           => 'exceed_reason',
        'feeType'                => 'fee_type',
        'fines'                  => 'fines',
        'foreignBusinessExpense' => 'foreign_business_expense',
        'hotelName'              => 'hotel_name',
        'hotelStar'              => 'hotel_star',
        'index'                  => 'index',
        'invoiceTitle'           => 'invoice_title',
        'isEarlyDeparture'       => 'is_early_departure',
        'isNegotiation'          => 'is_negotiation',
        'isShareStr'             => 'is_share_str',
        'mainApplyId'            => 'main_apply_id',
        'nights'                 => 'nights',
        'orderId'                => 'order_id',
        'orderPrice'             => 'order_price',
        'orderStatusDesc'        => 'order_status_desc',
        'orderType'              => 'order_type',
        'overApplyId'            => 'over_apply_id',
        'personRefundFee'        => 'person_refund_fee',
        'personSettlePrice'      => 'person_settle_price',
        'primaryId'              => 'primary_id',
        'projectCode'            => 'project_code',
        'projectName'            => 'project_name',
        'promotionFee'           => 'promotion_fee',
        'rate'                   => 'rate',
        'remark'                 => 'remark',
        'reserveRule'            => 'reserve_rule',
        'roomNo'                 => 'room_no',
        'roomNumber'             => 'room_number',
        'roomPrice'              => 'room_price',
        'roomType'               => 'room_type',
        'serviceFee'             => 'service_fee',
        'settlementFee'          => 'settlement_fee',
        'settlementGrantFee'     => 'settlement_grant_fee',
        'settlementTime'         => 'settlement_time',
        'settlementType'         => 'settlement_type',
        'status'                 => 'status',
        'subOrderId'             => 'sub_order_id',
        'taxRate'                => 'tax_rate',
        'thirdInvoiceId'         => 'third_invoice_id',
        'thirdItineraryId'       => 'third_itinerary_id',
        'thirdPartBusinessId'    => 'third_part_business_id',
        'thirdpartApplyId'       => 'thirdpart_apply_id',
        'totalNights'            => 'total_nights',
        'travelerId'             => 'traveler_id',
        'travelerJobNo'          => 'traveler_job_no',
        'travelerMemberType'     => 'traveler_member_type',
        'travelerName'           => 'traveler_name',
        'voucherType'            => 'voucher_type',
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
        if (null !== $this->amountCurrency) {
            $res['amount_currency'] = $this->amountCurrency;
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
        if (null !== $this->businessExpense) {
            $res['business_expense'] = $this->businessExpense;
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
        if (null !== $this->country) {
            $res['country'] = $this->country;
        }
        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
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
        if (null !== $this->fines) {
            $res['fines'] = $this->fines;
        }
        if (null !== $this->foreignBusinessExpense) {
            $res['foreign_business_expense'] = $this->foreignBusinessExpense;
        }
        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }
        if (null !== $this->hotelStar) {
            $res['hotel_star'] = $this->hotelStar;
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
        if (null !== $this->mainApplyId) {
            $res['main_apply_id'] = $this->mainApplyId;
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
        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
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
        if (null !== $this->thirdPartBusinessId) {
            $res['third_part_business_id'] = $this->thirdPartBusinessId;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
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
        if (null !== $this->travelerMemberType) {
            $res['traveler_member_type'] = $this->travelerMemberType;
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
        if (isset($map['amount_currency'])) {
            $model->amountCurrency = $map['amount_currency'];
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
        if (isset($map['business_expense'])) {
            $model->businessExpense = $map['business_expense'];
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
        if (isset($map['country'])) {
            $model->country = $map['country'];
        }
        if (isset($map['country_code'])) {
            $model->countryCode = $map['country_code'];
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
        if (isset($map['fines'])) {
            $model->fines = $map['fines'];
        }
        if (isset($map['foreign_business_expense'])) {
            $model->foreignBusinessExpense = $map['foreign_business_expense'];
        }
        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }
        if (isset($map['hotel_star'])) {
            $model->hotelStar = $map['hotel_star'];
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
        if (isset($map['main_apply_id'])) {
            $model->mainApplyId = $map['main_apply_id'];
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
        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
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
        if (isset($map['third_part_business_id'])) {
            $model->thirdPartBusinessId = $map['third_part_business_id'];
        }
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
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
        if (isset($map['traveler_member_type'])) {
            $model->travelerMemberType = $map['traveler_member_type'];
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
