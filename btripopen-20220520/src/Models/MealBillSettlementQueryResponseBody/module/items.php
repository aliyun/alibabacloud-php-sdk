<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealBillSettlementQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $applyExtendField;

    /**
     * @example 1004430880
     *
     * @var string
     */
    public $applyId;

    /**
     * @example 2023-01-01 00:00:00
     *
     * @var string
     */
    public $billRecordTime;

    /**
     * @example 2023-01-01 00:00:00
     *
     * @var string
     */
    public $bookTime;

    /**
     * @example 1234
     *
     * @var string
     */
    public $bookerId;

    /**
     * @example A1234
     *
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
     * @var string
     */
    public $consumerScene;

    /**
     * @example 100.0
     *
     * @var float
     */
    public $corpSettleFee;

    /**
     * @var string
     */
    public $costCenter;

    /**
     * @example cs1
     *
     * @var string
     */
    public $costCenterNumber;

    /**
     * @var string
     */
    public $department;

    /**
     * @example 1112
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example 70101
     *
     * @var string
     */
    public $feeType;

    /**
     * @example 1
     *
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @example 123
     *
     * @var string
     */
    public $mainApplyId;

    /**
     * @example XXXX
     *
     * @var string
     */
    public $mealAddress;

    /**
     * @var string
     */
    public $mealCity;

    /**
     * @example XXX
     *
     * @var string
     */
    public $mealCityCode;

    /**
     * @var string
     */
    public $mealRule;

    /**
     * @var string
     */
    public $mealScene;

    /**
     * @example MEAL
     *
     * @var string
     */
    public $merchantCategory;

    /**
     * @example XXXX
     *
     * @var string
     */
    public $merchantName;

    /**
     * @example 1002039196909288346
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 100.0
     *
     * @var float
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $personSettlePrice;

    /**
     * @example 60698599
     *
     * @var int
     */
    public $primaryId;

    /**
     * @example acs
     *
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
    public $remark;

    /**
     * @example 5.0
     *
     * @var float
     */
    public $serviceFee;

    /**
     * @example 110.0
     *
     * @var float
     */
    public $settlementFee;

    /**
     * @example 2023-01-01 00:00:00
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
     * @var string
     */
    public $shareDinner;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example XXXX
     *
     * @var string
     */
    public $storeAddress;

    /**
     * @example 6%
     *
     * @var string
     */
    public $taxRate;

    /**
     * @example cs2
     *
     * @var string
     */
    public $thirdInvoiceId;

    /**
     * @example 123
     *
     * @var string
     */
    public $thirdPartBusinessId;

    /**
     * @example 7244-1968
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @example 1234
     *
     * @var string
     */
    public $travelerId;

    /**
     * @example A1234
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
     * @example 1
     *
     * @var int
     */
    public $voucherType;
    protected $_name = [
        'applyExtendField'       => 'apply_extend_field',
        'applyId'                => 'apply_id',
        'billRecordTime'         => 'bill_record_time',
        'bookTime'               => 'book_time',
        'bookerId'               => 'booker_id',
        'bookerJobNo'            => 'booker_job_no',
        'bookerName'             => 'booker_name',
        'capitalDirection'       => 'capital_direction',
        'cascadeDepartment'      => 'cascade_department',
        'consumerScene'          => 'consumer_scene',
        'corpSettleFee'          => 'corp_settle_fee',
        'costCenter'             => 'cost_center',
        'costCenterNumber'       => 'cost_center_number',
        'department'             => 'department',
        'departmentId'           => 'department_id',
        'feeType'                => 'fee_type',
        'index'                  => 'index',
        'invoiceTitle'           => 'invoice_title',
        'mainApplyId'            => 'main_apply_id',
        'mealAddress'            => 'meal_address',
        'mealCity'               => 'meal_city',
        'mealCityCode'           => 'meal_city_code',
        'mealRule'               => 'meal_rule',
        'mealScene'              => 'meal_scene',
        'merchantCategory'       => 'merchant_category',
        'merchantName'           => 'merchant_name',
        'orderId'                => 'order_id',
        'orderPrice'             => 'order_price',
        'orderStatusDesc'        => 'order_status_desc',
        'personSettlePrice'      => 'person_settle_price',
        'primaryId'              => 'primary_id',
        'projectCode'            => 'project_code',
        'projectName'            => 'project_name',
        'remark'                 => 'remark',
        'serviceFee'             => 'service_fee',
        'settlementFee'          => 'settlement_fee',
        'settlementTime'         => 'settlement_time',
        'settlementType'         => 'settlement_type',
        'shareDinner'            => 'share_dinner',
        'status'                 => 'status',
        'storeAddress'           => 'store_address',
        'taxRate'                => 'tax_rate',
        'thirdInvoiceId'         => 'third_invoice_id',
        'thirdPartBusinessId'    => 'third_part_business_id',
        'thirdpartApplyId'       => 'thirdpart_apply_id',
        'travelerId'             => 'traveler_id',
        'travelerJobNo'          => 'traveler_job_no',
        'travelerMemberTypeName' => 'traveler_member_type_name',
        'travelerName'           => 'traveler_name',
        'voucherType'            => 'voucher_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->consumerScene) {
            $res['consumer_scene'] = $this->consumerScene;
        }
        if (null !== $this->corpSettleFee) {
            $res['corp_settle_fee'] = $this->corpSettleFee;
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
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->mainApplyId) {
            $res['main_apply_id'] = $this->mainApplyId;
        }
        if (null !== $this->mealAddress) {
            $res['meal_address'] = $this->mealAddress;
        }
        if (null !== $this->mealCity) {
            $res['meal_city'] = $this->mealCity;
        }
        if (null !== $this->mealCityCode) {
            $res['meal_city_code'] = $this->mealCityCode;
        }
        if (null !== $this->mealRule) {
            $res['meal_rule'] = $this->mealRule;
        }
        if (null !== $this->mealScene) {
            $res['meal_scene'] = $this->mealScene;
        }
        if (null !== $this->merchantCategory) {
            $res['merchant_category'] = $this->merchantCategory;
        }
        if (null !== $this->merchantName) {
            $res['merchant_name'] = $this->merchantName;
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
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }
        if (null !== $this->settlementFee) {
            $res['settlement_fee'] = $this->settlementFee;
        }
        if (null !== $this->settlementTime) {
            $res['settlement_time'] = $this->settlementTime;
        }
        if (null !== $this->settlementType) {
            $res['settlement_type'] = $this->settlementType;
        }
        if (null !== $this->shareDinner) {
            $res['share_dinner'] = $this->shareDinner;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->storeAddress) {
            $res['store_address'] = $this->storeAddress;
        }
        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
        }
        if (null !== $this->thirdInvoiceId) {
            $res['third_invoice_id'] = $this->thirdInvoiceId;
        }
        if (null !== $this->thirdPartBusinessId) {
            $res['third_part_business_id'] = $this->thirdPartBusinessId;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
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
        if (null !== $this->voucherType) {
            $res['voucher_type'] = $this->voucherType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['consumer_scene'])) {
            $model->consumerScene = $map['consumer_scene'];
        }
        if (isset($map['corp_settle_fee'])) {
            $model->corpSettleFee = $map['corp_settle_fee'];
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['main_apply_id'])) {
            $model->mainApplyId = $map['main_apply_id'];
        }
        if (isset($map['meal_address'])) {
            $model->mealAddress = $map['meal_address'];
        }
        if (isset($map['meal_city'])) {
            $model->mealCity = $map['meal_city'];
        }
        if (isset($map['meal_city_code'])) {
            $model->mealCityCode = $map['meal_city_code'];
        }
        if (isset($map['meal_rule'])) {
            $model->mealRule = $map['meal_rule'];
        }
        if (isset($map['meal_scene'])) {
            $model->mealScene = $map['meal_scene'];
        }
        if (isset($map['merchant_category'])) {
            $model->merchantCategory = $map['merchant_category'];
        }
        if (isset($map['merchant_name'])) {
            $model->merchantName = $map['merchant_name'];
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
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }
        if (isset($map['settlement_fee'])) {
            $model->settlementFee = $map['settlement_fee'];
        }
        if (isset($map['settlement_time'])) {
            $model->settlementTime = $map['settlement_time'];
        }
        if (isset($map['settlement_type'])) {
            $model->settlementType = $map['settlement_type'];
        }
        if (isset($map['share_dinner'])) {
            $model->shareDinner = $map['share_dinner'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['store_address'])) {
            $model->storeAddress = $map['store_address'];
        }
        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }
        if (isset($map['third_invoice_id'])) {
            $model->thirdInvoiceId = $map['third_invoice_id'];
        }
        if (isset($map['third_part_business_id'])) {
            $model->thirdPartBusinessId = $map['third_part_business_id'];
        }
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
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
        if (isset($map['voucher_type'])) {
            $model->voucherType = $map['voucher_type'];
        }

        return $model;
    }
}
