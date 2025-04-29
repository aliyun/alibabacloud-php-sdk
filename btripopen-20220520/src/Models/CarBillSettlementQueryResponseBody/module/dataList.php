<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarBillSettlementQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class dataList extends Model
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
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrDate;

    /**
     * @var string
     */
    public $arrLocation;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $billRecordTime;

    /**
     * @var string
     */
    public $billingEntity;

    /**
     * @var string
     */
    public $bookModel;

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
    public $businessCategory;

    /**
     * @var string
     */
    public $capitalDirection;

    /**
     * @var string
     */
    public $carLevel;

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
    public $costCenter;

    /**
     * @var string
     */
    public $costCenterNumber;

    /**
     * @var float
     */
    public $coupon;

    /**
     * @var float
     */
    public $couponPrice;

    /**
     * @var float
     */
    public $deductibleTax;

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
     * @var string
     */
    public $deptDate;

    /**
     * @var string
     */
    public $deptLocation;

    /**
     * @var string
     */
    public $deptTime;

    /**
     * @var string
     */
    public $driverAddDetail;

    /**
     * @var float
     */
    public $driverAddFee;

    /**
     * @var string
     */
    public $estimateDriveDistance;

    /**
     * @var float
     */
    public $estimatePrice;

    /**
     * @var string
     */
    public $feeType;

    /**
     * @var string
     */
    public $feeTypeDesc;

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
    public $levelName;

    /**
     * @var string
     */
    public $memo;

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
    public $personSettleFee;

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
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $realDriveDistance;

    /**
     * @var string
     */
    public $realFromAddr;

    /**
     * @var string
     */
    public $realToAddr;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

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
    public $specialOrder;

    /**
     * @var string
     */
    public $specialReason;

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
    public $supplementApplyId;

    /**
     * @var string
     */
    public $taxRate;

    /**
     * @var string
     */
    public $thirdItineraryId;

    /**
     * @var string
     */
    public $timeType;

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
     * @var string
     */
    public $userConfirmDesc;

    /**
     * @var string
     */
    public $vehicleSceneId;

    /**
     * @var string
     */
    public $vehicleSceneName;

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
        'arrCity' => 'arr_city',
        'arrCityCode' => 'arr_city_code',
        'arrDate' => 'arr_date',
        'arrLocation' => 'arr_location',
        'arrTime' => 'arr_time',
        'billRecordTime' => 'bill_record_time',
        'billingEntity' => 'billing_entity',
        'bookModel' => 'book_model',
        'bookTime' => 'book_time',
        'bookerId' => 'booker_id',
        'bookerJobNo' => 'booker_job_no',
        'bookerName' => 'booker_name',
        'businessCategory' => 'business_category',
        'capitalDirection' => 'capital_direction',
        'carLevel' => 'car_level',
        'cascadeDepartment' => 'cascade_department',
        'categoryDesc' => 'category_desc',
        'costCenter' => 'cost_center',
        'costCenterNumber' => 'cost_center_number',
        'coupon' => 'coupon',
        'couponPrice' => 'coupon_price',
        'deductibleTax' => 'deductible_tax',
        'depCityCode' => 'dep_city_code',
        'department' => 'department',
        'departmentId' => 'department_id',
        'deptCity' => 'dept_city',
        'deptDate' => 'dept_date',
        'deptLocation' => 'dept_location',
        'deptTime' => 'dept_time',
        'driverAddDetail' => 'driver_add_detail',
        'driverAddFee' => 'driver_add_fee',
        'estimateDriveDistance' => 'estimate_drive_distance',
        'estimatePrice' => 'estimate_price',
        'feeType' => 'fee_type',
        'feeTypeDesc' => 'fee_type_desc',
        'index' => 'index',
        'invoiceTitle' => 'invoice_title',
        'levelName' => 'level_name',
        'memo' => 'memo',
        'orderId' => 'order_id',
        'orderPrice' => 'order_price',
        'overApplyId' => 'over_apply_id',
        'paymentDepartmentId' => 'payment_department_id',
        'paymentDepartmentName' => 'payment_department_name',
        'personSettleFee' => 'person_settle_fee',
        'primaryId' => 'primary_id',
        'projectCode' => 'project_code',
        'projectName' => 'project_name',
        'providerName' => 'provider_name',
        'realDriveDistance' => 'real_drive_distance',
        'realFromAddr' => 'real_from_addr',
        'realToAddr' => 'real_to_addr',
        'remark' => 'remark',
        'sceneId' => 'scene_id',
        'sceneName' => 'scene_name',
        'serviceFee' => 'service_fee',
        'settleTypeDesc' => 'settle_type_desc',
        'settlementFee' => 'settlement_fee',
        'settlementGrantFee' => 'settlement_grant_fee',
        'settlementTime' => 'settlement_time',
        'settlementType' => 'settlement_type',
        'specialOrder' => 'special_order',
        'specialReason' => 'special_reason',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'subOrderId' => 'sub_order_id',
        'supplementApplyId' => 'supplement_apply_id',
        'taxRate' => 'tax_rate',
        'thirdItineraryId' => 'third_itinerary_id',
        'timeType' => 'time_type',
        'tradeActionDesc' => 'trade_action_desc',
        'travelerId' => 'traveler_id',
        'travelerJobNo' => 'traveler_job_no',
        'travelerMemberType' => 'traveler_member_type',
        'travelerMemberTypeName' => 'traveler_member_type_name',
        'travelerName' => 'traveler_name',
        'userConfirmDesc' => 'user_confirm_desc',
        'vehicleSceneId' => 'vehicle_scene_id',
        'vehicleSceneName' => 'vehicle_scene_name',
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

        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }

        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }

        if (null !== $this->arrLocation) {
            $res['arr_location'] = $this->arrLocation;
        }

        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }

        if (null !== $this->billRecordTime) {
            $res['bill_record_time'] = $this->billRecordTime;
        }

        if (null !== $this->billingEntity) {
            $res['billing_entity'] = $this->billingEntity;
        }

        if (null !== $this->bookModel) {
            $res['book_model'] = $this->bookModel;
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

        if (null !== $this->businessCategory) {
            $res['business_category'] = $this->businessCategory;
        }

        if (null !== $this->capitalDirection) {
            $res['capital_direction'] = $this->capitalDirection;
        }

        if (null !== $this->carLevel) {
            $res['car_level'] = $this->carLevel;
        }

        if (null !== $this->cascadeDepartment) {
            $res['cascade_department'] = $this->cascadeDepartment;
        }

        if (null !== $this->categoryDesc) {
            $res['category_desc'] = $this->categoryDesc;
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

        if (null !== $this->couponPrice) {
            $res['coupon_price'] = $this->couponPrice;
        }

        if (null !== $this->deductibleTax) {
            $res['deductible_tax'] = $this->deductibleTax;
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

        if (null !== $this->deptLocation) {
            $res['dept_location'] = $this->deptLocation;
        }

        if (null !== $this->deptTime) {
            $res['dept_time'] = $this->deptTime;
        }

        if (null !== $this->driverAddDetail) {
            $res['driver_add_detail'] = $this->driverAddDetail;
        }

        if (null !== $this->driverAddFee) {
            $res['driver_add_fee'] = $this->driverAddFee;
        }

        if (null !== $this->estimateDriveDistance) {
            $res['estimate_drive_distance'] = $this->estimateDriveDistance;
        }

        if (null !== $this->estimatePrice) {
            $res['estimate_price'] = $this->estimatePrice;
        }

        if (null !== $this->feeType) {
            $res['fee_type'] = $this->feeType;
        }

        if (null !== $this->feeTypeDesc) {
            $res['fee_type_desc'] = $this->feeTypeDesc;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }

        if (null !== $this->levelName) {
            $res['level_name'] = $this->levelName;
        }

        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->orderPrice) {
            $res['order_price'] = $this->orderPrice;
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

        if (null !== $this->personSettleFee) {
            $res['person_settle_fee'] = $this->personSettleFee;
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

        if (null !== $this->providerName) {
            $res['provider_name'] = $this->providerName;
        }

        if (null !== $this->realDriveDistance) {
            $res['real_drive_distance'] = $this->realDriveDistance;
        }

        if (null !== $this->realFromAddr) {
            $res['real_from_addr'] = $this->realFromAddr;
        }

        if (null !== $this->realToAddr) {
            $res['real_to_addr'] = $this->realToAddr;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->sceneId) {
            $res['scene_id'] = $this->sceneId;
        }

        if (null !== $this->sceneName) {
            $res['scene_name'] = $this->sceneName;
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

        if (null !== $this->specialOrder) {
            $res['special_order'] = $this->specialOrder;
        }

        if (null !== $this->specialReason) {
            $res['special_reason'] = $this->specialReason;
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

        if (null !== $this->supplementApplyId) {
            $res['supplement_apply_id'] = $this->supplementApplyId;
        }

        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
        }

        if (null !== $this->thirdItineraryId) {
            $res['third_itinerary_id'] = $this->thirdItineraryId;
        }

        if (null !== $this->timeType) {
            $res['time_type'] = $this->timeType;
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

        if (null !== $this->userConfirmDesc) {
            $res['user_confirm_desc'] = $this->userConfirmDesc;
        }

        if (null !== $this->vehicleSceneId) {
            $res['vehicle_scene_id'] = $this->vehicleSceneId;
        }

        if (null !== $this->vehicleSceneName) {
            $res['vehicle_scene_name'] = $this->vehicleSceneName;
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

        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }

        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }

        if (isset($map['arr_location'])) {
            $model->arrLocation = $map['arr_location'];
        }

        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }

        if (isset($map['bill_record_time'])) {
            $model->billRecordTime = $map['bill_record_time'];
        }

        if (isset($map['billing_entity'])) {
            $model->billingEntity = $map['billing_entity'];
        }

        if (isset($map['book_model'])) {
            $model->bookModel = $map['book_model'];
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

        if (isset($map['business_category'])) {
            $model->businessCategory = $map['business_category'];
        }

        if (isset($map['capital_direction'])) {
            $model->capitalDirection = $map['capital_direction'];
        }

        if (isset($map['car_level'])) {
            $model->carLevel = $map['car_level'];
        }

        if (isset($map['cascade_department'])) {
            $model->cascadeDepartment = $map['cascade_department'];
        }

        if (isset($map['category_desc'])) {
            $model->categoryDesc = $map['category_desc'];
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

        if (isset($map['coupon_price'])) {
            $model->couponPrice = $map['coupon_price'];
        }

        if (isset($map['deductible_tax'])) {
            $model->deductibleTax = $map['deductible_tax'];
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

        if (isset($map['dept_location'])) {
            $model->deptLocation = $map['dept_location'];
        }

        if (isset($map['dept_time'])) {
            $model->deptTime = $map['dept_time'];
        }

        if (isset($map['driver_add_detail'])) {
            $model->driverAddDetail = $map['driver_add_detail'];
        }

        if (isset($map['driver_add_fee'])) {
            $model->driverAddFee = $map['driver_add_fee'];
        }

        if (isset($map['estimate_drive_distance'])) {
            $model->estimateDriveDistance = $map['estimate_drive_distance'];
        }

        if (isset($map['estimate_price'])) {
            $model->estimatePrice = $map['estimate_price'];
        }

        if (isset($map['fee_type'])) {
            $model->feeType = $map['fee_type'];
        }

        if (isset($map['fee_type_desc'])) {
            $model->feeTypeDesc = $map['fee_type_desc'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }

        if (isset($map['level_name'])) {
            $model->levelName = $map['level_name'];
        }

        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['order_price'])) {
            $model->orderPrice = $map['order_price'];
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

        if (isset($map['person_settle_fee'])) {
            $model->personSettleFee = $map['person_settle_fee'];
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

        if (isset($map['provider_name'])) {
            $model->providerName = $map['provider_name'];
        }

        if (isset($map['real_drive_distance'])) {
            $model->realDriveDistance = $map['real_drive_distance'];
        }

        if (isset($map['real_from_addr'])) {
            $model->realFromAddr = $map['real_from_addr'];
        }

        if (isset($map['real_to_addr'])) {
            $model->realToAddr = $map['real_to_addr'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['scene_id'])) {
            $model->sceneId = $map['scene_id'];
        }

        if (isset($map['scene_name'])) {
            $model->sceneName = $map['scene_name'];
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

        if (isset($map['special_order'])) {
            $model->specialOrder = $map['special_order'];
        }

        if (isset($map['special_reason'])) {
            $model->specialReason = $map['special_reason'];
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

        if (isset($map['supplement_apply_id'])) {
            $model->supplementApplyId = $map['supplement_apply_id'];
        }

        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }

        if (isset($map['third_itinerary_id'])) {
            $model->thirdItineraryId = $map['third_itinerary_id'];
        }

        if (isset($map['time_type'])) {
            $model->timeType = $map['time_type'];
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

        if (isset($map['user_confirm_desc'])) {
            $model->userConfirmDesc = $map['user_confirm_desc'];
        }

        if (isset($map['vehicle_scene_id'])) {
            $model->vehicleSceneId = $map['vehicle_scene_id'];
        }

        if (isset($map['vehicle_scene_name'])) {
            $model->vehicleSceneName = $map['vehicle_scene_name'];
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
