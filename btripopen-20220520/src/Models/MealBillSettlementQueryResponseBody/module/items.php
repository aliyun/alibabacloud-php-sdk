<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealBillSettlementQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $adjustTime;

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
    public $billRecordTime;

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
    public $consumeReportAddress;

    /**
     * @var string
     */
    public $consumeReportCity;

    /**
     * @var string
     */
    public $consumeReportCityCode;

    /**
     * @var string
     */
    public $consumerScene;

    /**
     * @var float
     */
    public $corpSettleFee;

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
    public $costDepartment;

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
    public $mainApplyId;

    /**
     * @var string
     */
    public $mappingCompanyCode;

    /**
     * @var string
     */
    public $mealAddress;

    /**
     * @var string
     */
    public $mealCity;

    /**
     * @var string
     */
    public $mealCityCode;

    /**
     * @var string
     */
    public $mealReason;

    /**
     * @var string
     */
    public $mealRule;

    /**
     * @var string
     */
    public $mealScene;

    /**
     * @var string
     */
    public $merchantCategory;

    /**
     * @var string
     */
    public $merchantName;

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
    public $processorOaCode;

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
    public $remark;

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
    public $shareDinner;

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
    public $storeAddress;

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
    public $thirdPartBusinessId;

    /**
     * @var string
     */
    public $thirdpartApplyId;

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
        'adjustTime' => 'adjust_time',
        'applyExtendField' => 'apply_extend_field',
        'applyId' => 'apply_id',
        'billRecordTime' => 'bill_record_time',
        'bookTime' => 'book_time',
        'bookerId' => 'booker_id',
        'bookerJobNo' => 'booker_job_no',
        'bookerName' => 'booker_name',
        'capitalDirection' => 'capital_direction',
        'cascadeDepartment' => 'cascade_department',
        'categoryDesc' => 'category_desc',
        'consumeReportAddress' => 'consume_report_address',
        'consumeReportCity' => 'consume_report_city',
        'consumeReportCityCode' => 'consume_report_city_code',
        'consumerScene' => 'consumer_scene',
        'corpSettleFee' => 'corp_settle_fee',
        'costCenter' => 'cost_center',
        'costCenterNumber' => 'cost_center_number',
        'costDepartment' => 'cost_department',
        'department' => 'department',
        'departmentId' => 'department_id',
        'feeType' => 'fee_type',
        'feeTypeDesc' => 'fee_type_desc',
        'index' => 'index',
        'invoiceTitle' => 'invoice_title',
        'mainApplyId' => 'main_apply_id',
        'mappingCompanyCode' => 'mapping_company_code',
        'mealAddress' => 'meal_address',
        'mealCity' => 'meal_city',
        'mealCityCode' => 'meal_city_code',
        'mealReason' => 'meal_reason',
        'mealRule' => 'meal_rule',
        'mealScene' => 'meal_scene',
        'merchantCategory' => 'merchant_category',
        'merchantName' => 'merchant_name',
        'orderId' => 'order_id',
        'orderPrice' => 'order_price',
        'orderStatusDesc' => 'order_status_desc',
        'personSettlePrice' => 'person_settle_price',
        'primaryId' => 'primary_id',
        'processorOaCode' => 'processor_oa_code',
        'projectCode' => 'project_code',
        'projectName' => 'project_name',
        'remark' => 'remark',
        'serviceFee' => 'service_fee',
        'settleTypeDesc' => 'settle_type_desc',
        'settlementFee' => 'settlement_fee',
        'settlementTime' => 'settlement_time',
        'settlementType' => 'settlement_type',
        'shareDinner' => 'share_dinner',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'storeAddress' => 'store_address',
        'taxRate' => 'tax_rate',
        'thirdInvoiceId' => 'third_invoice_id',
        'thirdPartBusinessId' => 'third_part_business_id',
        'thirdpartApplyId' => 'thirdpart_apply_id',
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
        if (null !== $this->adjustTime) {
            $res['adjust_time'] = $this->adjustTime;
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

        if (null !== $this->categoryDesc) {
            $res['category_desc'] = $this->categoryDesc;
        }

        if (null !== $this->consumeReportAddress) {
            $res['consume_report_address'] = $this->consumeReportAddress;
        }

        if (null !== $this->consumeReportCity) {
            $res['consume_report_city'] = $this->consumeReportCity;
        }

        if (null !== $this->consumeReportCityCode) {
            $res['consume_report_city_code'] = $this->consumeReportCityCode;
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

        if (null !== $this->costDepartment) {
            $res['cost_department'] = $this->costDepartment;
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

        if (null !== $this->feeTypeDesc) {
            $res['fee_type_desc'] = $this->feeTypeDesc;
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

        if (null !== $this->mappingCompanyCode) {
            $res['mapping_company_code'] = $this->mappingCompanyCode;
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

        if (null !== $this->mealReason) {
            $res['meal_reason'] = $this->mealReason;
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

        if (null !== $this->processorOaCode) {
            $res['processor_oa_code'] = $this->processorOaCode;
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

        if (null !== $this->settleTypeDesc) {
            $res['settle_type_desc'] = $this->settleTypeDesc;
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

        if (null !== $this->statusDesc) {
            $res['status_desc'] = $this->statusDesc;
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
        if (isset($map['adjust_time'])) {
            $model->adjustTime = $map['adjust_time'];
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

        if (isset($map['category_desc'])) {
            $model->categoryDesc = $map['category_desc'];
        }

        if (isset($map['consume_report_address'])) {
            $model->consumeReportAddress = $map['consume_report_address'];
        }

        if (isset($map['consume_report_city'])) {
            $model->consumeReportCity = $map['consume_report_city'];
        }

        if (isset($map['consume_report_city_code'])) {
            $model->consumeReportCityCode = $map['consume_report_city_code'];
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

        if (isset($map['cost_department'])) {
            $model->costDepartment = $map['cost_department'];
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

        if (isset($map['fee_type_desc'])) {
            $model->feeTypeDesc = $map['fee_type_desc'];
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

        if (isset($map['mapping_company_code'])) {
            $model->mappingCompanyCode = $map['mapping_company_code'];
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

        if (isset($map['meal_reason'])) {
            $model->mealReason = $map['meal_reason'];
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

        if (isset($map['processor_oa_code'])) {
            $model->processorOaCode = $map['processor_oa_code'];
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

        if (isset($map['settle_type_desc'])) {
            $model->settleTypeDesc = $map['settle_type_desc'];
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

        if (isset($map['status_desc'])) {
            $model->statusDesc = $map['status_desc'];
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
