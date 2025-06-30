<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\VasBillSettlementQueryResponseBody\module;

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
    public $alipayId;

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
    public $belongBusiness;

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
    public $bookMode;

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
    public $mappingCompanyCode;

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
     * @var int
     */
    public $primaryId;

    /**
     * @var string
     */
    public $processorOaCode;

    /**
     * @var int
     */
    public $productCount;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

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
    public $purchaseOrderId;

    /**
     * @var string
     */
    public $remark;

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
    public $specification;

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
     * @var string
     */
    public $tradeActionDesc;

    /**
     * @var string
     */
    public $tradeRemark;

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
        'alipayId' => 'alipay_id',
        'alipayTradeNo' => 'alipay_trade_no',
        'applyArrCityCode' => 'apply_arr_city_code',
        'applyArrCityName' => 'apply_arr_city_name',
        'applyDepCityCode' => 'apply_dep_city_code',
        'applyDepCityName' => 'apply_dep_city_name',
        'applyExtendField' => 'apply_extend_field',
        'applyId' => 'apply_id',
        'belongBusiness' => 'belong_business',
        'billRecordTime' => 'bill_record_time',
        'billingEntity' => 'billing_entity',
        'bookMode' => 'book_mode',
        'bookTime' => 'book_time',
        'bookerId' => 'booker_id',
        'bookerJobNo' => 'booker_job_no',
        'bookerName' => 'booker_name',
        'capitalDirection' => 'capital_direction',
        'cascadeDepartment' => 'cascade_department',
        'categoryDesc' => 'category_desc',
        'costCenter' => 'cost_center',
        'costCenterNumber' => 'cost_center_number',
        'costDepartment' => 'cost_department',
        'department' => 'department',
        'departmentId' => 'department_id',
        'feeType' => 'fee_type',
        'feeTypeDesc' => 'fee_type_desc',
        'index' => 'index',
        'invoiceTitle' => 'invoice_title',
        'mappingCompanyCode' => 'mapping_company_code',
        'orderId' => 'order_id',
        'orderPrice' => 'order_price',
        'orderStatusDesc' => 'order_status_desc',
        'overApplyId' => 'over_apply_id',
        'paymentDepartmentId' => 'payment_department_id',
        'paymentDepartmentName' => 'payment_department_name',
        'primaryId' => 'primary_id',
        'processorOaCode' => 'processor_oa_code',
        'productCount' => 'product_count',
        'productId' => 'product_id',
        'productName' => 'product_name',
        'projectCode' => 'project_code',
        'projectName' => 'project_name',
        'promotionFee' => 'promotion_fee',
        'purchaseOrderId' => 'purchase_order_id',
        'remark' => 'remark',
        'settleTypeDesc' => 'settle_type_desc',
        'settlementFee' => 'settlement_fee',
        'settlementGrantFee' => 'settlement_grant_fee',
        'settlementTime' => 'settlement_time',
        'settlementType' => 'settlement_type',
        'specification' => 'specification',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'subOrderId' => 'sub_order_id',
        'taxRate' => 'tax_rate',
        'thirdInvoiceId' => 'third_invoice_id',
        'thirdItineraryId' => 'third_itinerary_id',
        'tradeActionDesc' => 'trade_action_desc',
        'tradeRemark' => 'trade_remark',
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

        if (null !== $this->belongBusiness) {
            $res['belong_business'] = $this->belongBusiness;
        }

        if (null !== $this->billRecordTime) {
            $res['bill_record_time'] = $this->billRecordTime;
        }

        if (null !== $this->billingEntity) {
            $res['billing_entity'] = $this->billingEntity;
        }

        if (null !== $this->bookMode) {
            $res['book_mode'] = $this->bookMode;
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

        if (null !== $this->mappingCompanyCode) {
            $res['mapping_company_code'] = $this->mappingCompanyCode;
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

        if (null !== $this->overApplyId) {
            $res['over_apply_id'] = $this->overApplyId;
        }

        if (null !== $this->paymentDepartmentId) {
            $res['payment_department_id'] = $this->paymentDepartmentId;
        }

        if (null !== $this->paymentDepartmentName) {
            $res['payment_department_name'] = $this->paymentDepartmentName;
        }

        if (null !== $this->primaryId) {
            $res['primary_id'] = $this->primaryId;
        }

        if (null !== $this->processorOaCode) {
            $res['processor_oa_code'] = $this->processorOaCode;
        }

        if (null !== $this->productCount) {
            $res['product_count'] = $this->productCount;
        }

        if (null !== $this->productId) {
            $res['product_id'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['product_name'] = $this->productName;
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

        if (null !== $this->purchaseOrderId) {
            $res['purchase_order_id'] = $this->purchaseOrderId;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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

        if (null !== $this->specification) {
            $res['specification'] = $this->specification;
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

        if (null !== $this->tradeActionDesc) {
            $res['trade_action_desc'] = $this->tradeActionDesc;
        }

        if (null !== $this->tradeRemark) {
            $res['trade_remark'] = $this->tradeRemark;
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

        if (isset($map['belong_business'])) {
            $model->belongBusiness = $map['belong_business'];
        }

        if (isset($map['bill_record_time'])) {
            $model->billRecordTime = $map['bill_record_time'];
        }

        if (isset($map['billing_entity'])) {
            $model->billingEntity = $map['billing_entity'];
        }

        if (isset($map['book_mode'])) {
            $model->bookMode = $map['book_mode'];
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

        if (isset($map['mapping_company_code'])) {
            $model->mappingCompanyCode = $map['mapping_company_code'];
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

        if (isset($map['over_apply_id'])) {
            $model->overApplyId = $map['over_apply_id'];
        }

        if (isset($map['payment_department_id'])) {
            $model->paymentDepartmentId = $map['payment_department_id'];
        }

        if (isset($map['payment_department_name'])) {
            $model->paymentDepartmentName = $map['payment_department_name'];
        }

        if (isset($map['primary_id'])) {
            $model->primaryId = $map['primary_id'];
        }

        if (isset($map['processor_oa_code'])) {
            $model->processorOaCode = $map['processor_oa_code'];
        }

        if (isset($map['product_count'])) {
            $model->productCount = $map['product_count'];
        }

        if (isset($map['product_id'])) {
            $model->productId = $map['product_id'];
        }

        if (isset($map['product_name'])) {
            $model->productName = $map['product_name'];
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

        if (isset($map['purchase_order_id'])) {
            $model->purchaseOrderId = $map['purchase_order_id'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
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

        if (isset($map['specification'])) {
            $model->specification = $map['specification'];
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

        if (isset($map['trade_action_desc'])) {
            $model->tradeActionDesc = $map['trade_action_desc'];
        }

        if (isset($map['trade_remark'])) {
            $model->tradeRemark = $map['trade_remark'];
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
