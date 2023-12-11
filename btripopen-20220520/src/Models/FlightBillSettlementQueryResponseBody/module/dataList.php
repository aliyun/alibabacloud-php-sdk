<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightBillSettlementQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $advanceDay;

    /**
     * @example MU
     *
     * @var string
     */
    public $airlineCorpCode;

    /**
     * @var string
     */
    public $airlineCorpName;

    /**
     * @var string
     */
    public $alipayId;

    /**
     * @example 2021100122001138061456080520
     *
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
     * @description 审批扩展自定义字段
     *
     * @var string
     */
    public $applyExtendField;

    /**
     * @example 103177854
     *
     * @var string
     */
    public $applyId;

    /**
     * @example CAN
     *
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @example 2021-10-02
     *
     * @var string
     */
    public $arrDate;

    /**
     * @var string
     */
    public $arrStation;

    /**
     * @example 13:30:00
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example 2020-12-23T20:18Z
     *
     * @var string
     */
    public $billRecordTime;

    /**
     * @example 2021-10-01 00:17:05
     *
     * @var string
     */
    public $bookTime;

    /**
     * @var string
     */
    public $bookerId;

    /**
     * @example 2342432
     *
     * @var string
     */
    public $bookerJobNo;

    /**
     * @var string
     */
    public $bookerName;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $btripCouponFee;

    /**
     * @example 50
     *
     * @var float
     */
    public $buildFee;

    /**
     * @var string
     */
    public $businessTripResult;

    /**
     * @example R
     *
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinClass;

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
     * @example 23.9
     *
     * @var float
     */
    public $changeFee;

    /**
     * @var string
     */
    public $changeResult;

    /**
     * @example 460
     *
     * @var float
     */
    public $corpPayOrderFee;

    /**
     * @var float
     */
    public $corpSettlePrice;

    /**
     * @var string
     */
    public $costCenter;

    /**
     * @example 48b7f3cd-8a4f-4df9-ae2c-883e008cf097
     *
     * @var string
     */
    public $costCenterNumber;

    /**
     * @example 1
     *
     * @var float
     */
    public $coupon;

    /**
     * @example KHN
     *
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depCityCode;

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
    public $deptCity;

    /**
     * @example 2021-10-02
     *
     * @var string
     */
    public $deptDate;

    /**
     * @var string
     */
    public $deptStation;

    /**
     * @example 12:00:00
     *
     * @var string
     */
    public $deptTime;

    /**
     * @example 51%
     *
     * @var string
     */
    public $discount;

    /**
     * @var string
     */
    public $exceedReason;

    /**
     * @example 10101
     *
     * @var string
     */
    public $feeType;

    /**
     * @example MU9684
     *
     * @var string
     */
    public $flightNo;

    /**
     * @example 4564547
     *
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $insOrderId;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $insuranceFee;

    /**
     * @var string
     */
    public $insuranceNumber;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @example 5334916421
     *
     * @var string
     */
    public $itineraryNum;

    /**
     * @example 460
     *
     * @var float
     */
    public $itineraryPrice;

    /**
     * @var string
     */
    public $mileage;

    /**
     * @example 2021-10-01 00:17:13
     *
     * @var string
     */
    public $mostDifferenceDeptTime;

    /**
     * @example 23%
     *
     * @var string
     */
    public $mostDifferenceDiscount;

    /**
     * @example MU9684
     *
     * @var string
     */
    public $mostDifferenceFlightNo;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $mostDifferencePrice;

    /**
     * @var string
     */
    public $mostDifferenceReason;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $mostPrice;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $negotiationCouponFee;

    /**
     * @example 0
     *
     * @var float
     */
    public $oilFee;

    /**
     * @example 234223423423
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 234324324423
     *
     * @var string
     */
    public $overApplyId;

    /**
     * @var float
     */
    public $personSettlePrice;

    /**
     * @var string
     */
    public $preBookTip;

    /**
     * @example 4564547
     *
     * @var int
     */
    public $primaryId;

    /**
     * @example 45623234
     *
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $refundFee;

    /**
     * @var string
     */
    public $refundResult;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $refundUpgradeCost;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $repeatRefund;

    /**
     * @example 410
     *
     * @var float
     */
    public $sealPrice;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $serviceFee;

    /**
     * @example 460
     *
     * @var float
     */
    public $settlementFee;

    /**
     * @example 5.67
     *
     * @var float
     */
    public $settlementGrantFee;

    /**
     * @example 2021-10-01 00:17:13
     *
     * @var string
     */
    public $settlementTime;

    /**
     * @example 2
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
     * @var string
     */
    public $thirdItineraryId;

    /**
     * @example 781-6586234234324
     *
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $trade;

    /**
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
    public $travelerMemberTypeName;

    /**
     * @var string
     */
    public $travelerName;

    /**
     * @example 23.9
     *
     * @var float
     */
    public $upgradeCost;

    /**
     * @example 11
     *
     * @var int
     */
    public $voucherType;

    /**
     * @var string
     */
    public $voyageName;
    protected $_name = [
        'advanceDay'             => 'advance_day',
        'airlineCorpCode'        => 'airline_corp_code',
        'airlineCorpName'        => 'airline_corp_name',
        'alipayId'               => 'alipay_id',
        'alipayTradeNo'          => 'alipay_trade_no',
        'applyArrCityCode'       => 'apply_arr_city_code',
        'applyArrCityName'       => 'apply_arr_city_name',
        'applyDepCityCode'       => 'apply_dep_city_code',
        'applyDepCityName'       => 'apply_dep_city_name',
        'applyExtendField'       => 'apply_extend_field',
        'applyId'                => 'apply_id',
        'arrAirportCode'         => 'arr_airport_code',
        'arrCity'                => 'arr_city',
        'arrCityCode'            => 'arr_city_code',
        'arrDate'                => 'arr_date',
        'arrStation'             => 'arr_station',
        'arrTime'                => 'arr_time',
        'billRecordTime'         => 'bill_record_time',
        'bookTime'               => 'book_time',
        'bookerId'               => 'booker_id',
        'bookerJobNo'            => 'booker_job_no',
        'bookerName'             => 'booker_name',
        'btripCouponFee'         => 'btrip_coupon_fee',
        'buildFee'               => 'build_fee',
        'businessTripResult'     => 'business_trip_result',
        'cabin'                  => 'cabin',
        'cabinClass'             => 'cabin_class',
        'capitalDirection'       => 'capital_direction',
        'cascadeDepartment'      => 'cascade_department',
        'changeFee'              => 'change_fee',
        'changeResult'           => 'change_result',
        'corpPayOrderFee'        => 'corp_pay_order_fee',
        'corpSettlePrice'        => 'corp_settle_price',
        'costCenter'             => 'cost_center',
        'costCenterNumber'       => 'cost_center_number',
        'coupon'                 => 'coupon',
        'depAirportCode'         => 'dep_airport_code',
        'depCityCode'            => 'dep_city_code',
        'department'             => 'department',
        'departmentId'           => 'department_id',
        'deptCity'               => 'dept_city',
        'deptDate'               => 'dept_date',
        'deptStation'            => 'dept_station',
        'deptTime'               => 'dept_time',
        'discount'               => 'discount',
        'exceedReason'           => 'exceed_reason',
        'feeType'                => 'fee_type',
        'flightNo'               => 'flight_no',
        'index'                  => 'index',
        'insOrderId'             => 'ins_order_id',
        'insuranceFee'           => 'insurance_fee',
        'insuranceNumber'        => 'insurance_number',
        'invoiceTitle'           => 'invoice_title',
        'itemType'               => 'item_type',
        'itineraryNum'           => 'itinerary_num',
        'itineraryPrice'         => 'itinerary_price',
        'mileage'                => 'mileage',
        'mostDifferenceDeptTime' => 'most_difference_dept_time',
        'mostDifferenceDiscount' => 'most_difference_discount',
        'mostDifferenceFlightNo' => 'most_difference_flight_no',
        'mostDifferencePrice'    => 'most_difference_price',
        'mostDifferenceReason'   => 'most_difference_reason',
        'mostPrice'              => 'most_price',
        'negotiationCouponFee'   => 'negotiation_coupon_fee',
        'oilFee'                 => 'oil_fee',
        'orderId'                => 'order_id',
        'overApplyId'            => 'over_apply_id',
        'personSettlePrice'      => 'person_settle_price',
        'preBookTip'             => 'pre_book_tip',
        'primaryId'              => 'primary_id',
        'projectCode'            => 'project_code',
        'projectName'            => 'project_name',
        'refundFee'              => 'refund_fee',
        'refundResult'           => 'refund_result',
        'refundUpgradeCost'      => 'refund_upgrade_cost',
        'remark'                 => 'remark',
        'repeatRefund'           => 'repeat_refund',
        'sealPrice'              => 'seal_price',
        'serviceFee'             => 'service_fee',
        'settlementFee'          => 'settlement_fee',
        'settlementGrantFee'     => 'settlement_grant_fee',
        'settlementTime'         => 'settlement_time',
        'settlementType'         => 'settlement_type',
        'status'                 => 'status',
        'taxRate'                => 'tax_rate',
        'thirdItineraryId'       => 'third_itinerary_id',
        'ticketId'               => 'ticket_id',
        'trade'                  => 'trade',
        'travelerId'             => 'traveler_id',
        'travelerJobNo'          => 'traveler_job_no',
        'travelerMemberTypeName' => 'traveler_member_type_name',
        'travelerName'           => 'traveler_name',
        'upgradeCost'            => 'upgrade_cost',
        'voucherType'            => 'voucher_type',
        'voyageName'             => 'voyage_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanceDay) {
            $res['advance_day'] = $this->advanceDay;
        }
        if (null !== $this->airlineCorpCode) {
            $res['airline_corp_code'] = $this->airlineCorpCode;
        }
        if (null !== $this->airlineCorpName) {
            $res['airline_corp_name'] = $this->airlineCorpName;
        }
        if (null !== $this->alipayId) {
            $res['alipay_id'] = $this->alipayId;
        }
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
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->arrStation) {
            $res['arr_station'] = $this->arrStation;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
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
        if (null !== $this->btripCouponFee) {
            $res['btrip_coupon_fee'] = $this->btripCouponFee;
        }
        if (null !== $this->buildFee) {
            $res['build_fee'] = $this->buildFee;
        }
        if (null !== $this->businessTripResult) {
            $res['business_trip_result'] = $this->businessTripResult;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->capitalDirection) {
            $res['capital_direction'] = $this->capitalDirection;
        }
        if (null !== $this->cascadeDepartment) {
            $res['cascade_department'] = $this->cascadeDepartment;
        }
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
        }
        if (null !== $this->changeResult) {
            $res['change_result'] = $this->changeResult;
        }
        if (null !== $this->corpPayOrderFee) {
            $res['corp_pay_order_fee'] = $this->corpPayOrderFee;
        }
        if (null !== $this->corpSettlePrice) {
            $res['corp_settle_price'] = $this->corpSettlePrice;
        }
        if (null !== $this->costCenter) {
            $res['cost_center'] = $this->costCenter;
        }
        if (null !== $this->costCenterNumber) {
            $res['cost_center_number'] = $this->costCenterNumber;
        }
        if (null !== $this->coupon) {
            $res['coupon'] = $this->coupon;
        }
        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->departmentId) {
            $res['department_id'] = $this->departmentId;
        }
        if (null !== $this->deptCity) {
            $res['dept_city'] = $this->deptCity;
        }
        if (null !== $this->deptDate) {
            $res['dept_date'] = $this->deptDate;
        }
        if (null !== $this->deptStation) {
            $res['dept_station'] = $this->deptStation;
        }
        if (null !== $this->deptTime) {
            $res['dept_time'] = $this->deptTime;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->exceedReason) {
            $res['exceed_reason'] = $this->exceedReason;
        }
        if (null !== $this->feeType) {
            $res['fee_type'] = $this->feeType;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }
        if (null !== $this->insuranceFee) {
            $res['insurance_fee'] = $this->insuranceFee;
        }
        if (null !== $this->insuranceNumber) {
            $res['insurance_number'] = $this->insuranceNumber;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->itemType) {
            $res['item_type'] = $this->itemType;
        }
        if (null !== $this->itineraryNum) {
            $res['itinerary_num'] = $this->itineraryNum;
        }
        if (null !== $this->itineraryPrice) {
            $res['itinerary_price'] = $this->itineraryPrice;
        }
        if (null !== $this->mileage) {
            $res['mileage'] = $this->mileage;
        }
        if (null !== $this->mostDifferenceDeptTime) {
            $res['most_difference_dept_time'] = $this->mostDifferenceDeptTime;
        }
        if (null !== $this->mostDifferenceDiscount) {
            $res['most_difference_discount'] = $this->mostDifferenceDiscount;
        }
        if (null !== $this->mostDifferenceFlightNo) {
            $res['most_difference_flight_no'] = $this->mostDifferenceFlightNo;
        }
        if (null !== $this->mostDifferencePrice) {
            $res['most_difference_price'] = $this->mostDifferencePrice;
        }
        if (null !== $this->mostDifferenceReason) {
            $res['most_difference_reason'] = $this->mostDifferenceReason;
        }
        if (null !== $this->mostPrice) {
            $res['most_price'] = $this->mostPrice;
        }
        if (null !== $this->negotiationCouponFee) {
            $res['negotiation_coupon_fee'] = $this->negotiationCouponFee;
        }
        if (null !== $this->oilFee) {
            $res['oil_fee'] = $this->oilFee;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->overApplyId) {
            $res['over_apply_id'] = $this->overApplyId;
        }
        if (null !== $this->personSettlePrice) {
            $res['person_settle_price'] = $this->personSettlePrice;
        }
        if (null !== $this->preBookTip) {
            $res['pre_book_tip'] = $this->preBookTip;
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
        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }
        if (null !== $this->refundResult) {
            $res['refund_result'] = $this->refundResult;
        }
        if (null !== $this->refundUpgradeCost) {
            $res['refund_upgrade_cost'] = $this->refundUpgradeCost;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->repeatRefund) {
            $res['repeat_refund'] = $this->repeatRefund;
        }
        if (null !== $this->sealPrice) {
            $res['seal_price'] = $this->sealPrice;
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
        if (null !== $this->thirdItineraryId) {
            $res['third_itinerary_id'] = $this->thirdItineraryId;
        }
        if (null !== $this->ticketId) {
            $res['ticket_id'] = $this->ticketId;
        }
        if (null !== $this->trade) {
            $res['trade'] = $this->trade;
        }
        if (null !== $this->travelerId) {
            $res['traveler_id'] = $this->travelerId;
        }
        if (null !== $this->travelerJobNo) {
            $res['traveler_job_no'] = $this->travelerJobNo;
        }
        if (null !== $this->travelerMemberTypeName) {
            $res['traveler_member_type_name'] = $this->travelerMemberTypeName;
        }
        if (null !== $this->travelerName) {
            $res['traveler_name'] = $this->travelerName;
        }
        if (null !== $this->upgradeCost) {
            $res['upgrade_cost'] = $this->upgradeCost;
        }
        if (null !== $this->voucherType) {
            $res['voucher_type'] = $this->voucherType;
        }
        if (null !== $this->voyageName) {
            $res['voyage_name'] = $this->voyageName;
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
        if (isset($map['advance_day'])) {
            $model->advanceDay = $map['advance_day'];
        }
        if (isset($map['airline_corp_code'])) {
            $model->airlineCorpCode = $map['airline_corp_code'];
        }
        if (isset($map['airline_corp_name'])) {
            $model->airlineCorpName = $map['airline_corp_name'];
        }
        if (isset($map['alipay_id'])) {
            $model->alipayId = $map['alipay_id'];
        }
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
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }
        if (isset($map['arr_station'])) {
            $model->arrStation = $map['arr_station'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
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
        if (isset($map['btrip_coupon_fee'])) {
            $model->btripCouponFee = $map['btrip_coupon_fee'];
        }
        if (isset($map['build_fee'])) {
            $model->buildFee = $map['build_fee'];
        }
        if (isset($map['business_trip_result'])) {
            $model->businessTripResult = $map['business_trip_result'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['capital_direction'])) {
            $model->capitalDirection = $map['capital_direction'];
        }
        if (isset($map['cascade_department'])) {
            $model->cascadeDepartment = $map['cascade_department'];
        }
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
        }
        if (isset($map['change_result'])) {
            $model->changeResult = $map['change_result'];
        }
        if (isset($map['corp_pay_order_fee'])) {
            $model->corpPayOrderFee = $map['corp_pay_order_fee'];
        }
        if (isset($map['corp_settle_price'])) {
            $model->corpSettlePrice = $map['corp_settle_price'];
        }
        if (isset($map['cost_center'])) {
            $model->costCenter = $map['cost_center'];
        }
        if (isset($map['cost_center_number'])) {
            $model->costCenterNumber = $map['cost_center_number'];
        }
        if (isset($map['coupon'])) {
            $model->coupon = $map['coupon'];
        }
        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['department'])) {
            $model->department = $map['department'];
        }
        if (isset($map['department_id'])) {
            $model->departmentId = $map['department_id'];
        }
        if (isset($map['dept_city'])) {
            $model->deptCity = $map['dept_city'];
        }
        if (isset($map['dept_date'])) {
            $model->deptDate = $map['dept_date'];
        }
        if (isset($map['dept_station'])) {
            $model->deptStation = $map['dept_station'];
        }
        if (isset($map['dept_time'])) {
            $model->deptTime = $map['dept_time'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['exceed_reason'])) {
            $model->exceedReason = $map['exceed_reason'];
        }
        if (isset($map['fee_type'])) {
            $model->feeType = $map['fee_type'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }
        if (isset($map['insurance_fee'])) {
            $model->insuranceFee = $map['insurance_fee'];
        }
        if (isset($map['insurance_number'])) {
            $model->insuranceNumber = $map['insurance_number'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['item_type'])) {
            $model->itemType = $map['item_type'];
        }
        if (isset($map['itinerary_num'])) {
            $model->itineraryNum = $map['itinerary_num'];
        }
        if (isset($map['itinerary_price'])) {
            $model->itineraryPrice = $map['itinerary_price'];
        }
        if (isset($map['mileage'])) {
            $model->mileage = $map['mileage'];
        }
        if (isset($map['most_difference_dept_time'])) {
            $model->mostDifferenceDeptTime = $map['most_difference_dept_time'];
        }
        if (isset($map['most_difference_discount'])) {
            $model->mostDifferenceDiscount = $map['most_difference_discount'];
        }
        if (isset($map['most_difference_flight_no'])) {
            $model->mostDifferenceFlightNo = $map['most_difference_flight_no'];
        }
        if (isset($map['most_difference_price'])) {
            $model->mostDifferencePrice = $map['most_difference_price'];
        }
        if (isset($map['most_difference_reason'])) {
            $model->mostDifferenceReason = $map['most_difference_reason'];
        }
        if (isset($map['most_price'])) {
            $model->mostPrice = $map['most_price'];
        }
        if (isset($map['negotiation_coupon_fee'])) {
            $model->negotiationCouponFee = $map['negotiation_coupon_fee'];
        }
        if (isset($map['oil_fee'])) {
            $model->oilFee = $map['oil_fee'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['over_apply_id'])) {
            $model->overApplyId = $map['over_apply_id'];
        }
        if (isset($map['person_settle_price'])) {
            $model->personSettlePrice = $map['person_settle_price'];
        }
        if (isset($map['pre_book_tip'])) {
            $model->preBookTip = $map['pre_book_tip'];
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
        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }
        if (isset($map['refund_result'])) {
            $model->refundResult = $map['refund_result'];
        }
        if (isset($map['refund_upgrade_cost'])) {
            $model->refundUpgradeCost = $map['refund_upgrade_cost'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['repeat_refund'])) {
            $model->repeatRefund = $map['repeat_refund'];
        }
        if (isset($map['seal_price'])) {
            $model->sealPrice = $map['seal_price'];
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
        if (isset($map['third_itinerary_id'])) {
            $model->thirdItineraryId = $map['third_itinerary_id'];
        }
        if (isset($map['ticket_id'])) {
            $model->ticketId = $map['ticket_id'];
        }
        if (isset($map['trade'])) {
            $model->trade = $map['trade'];
        }
        if (isset($map['traveler_id'])) {
            $model->travelerId = $map['traveler_id'];
        }
        if (isset($map['traveler_job_no'])) {
            $model->travelerJobNo = $map['traveler_job_no'];
        }
        if (isset($map['traveler_member_type_name'])) {
            $model->travelerMemberTypeName = $map['traveler_member_type_name'];
        }
        if (isset($map['traveler_name'])) {
            $model->travelerName = $map['traveler_name'];
        }
        if (isset($map['upgrade_cost'])) {
            $model->upgradeCost = $map['upgrade_cost'];
        }
        if (isset($map['voucher_type'])) {
            $model->voucherType = $map['voucher_type'];
        }
        if (isset($map['voyage_name'])) {
            $model->voyageName = $map['voyage_name'];
        }

        return $model;
    }
}
