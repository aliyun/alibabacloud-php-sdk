<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainBillSettlementQueryResponseBody\module;

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
     * @example 2021-10-13
     *
     * @var string
     */
    public $arrDate;

    /**
     * @var string
     */
    public $arrStation;

    /**
     * @example 12:30
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $billRecordTime;

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
     * @example 23.0
     *
     * @var float
     */
    public $changeFee;

    /**
     * @var string
     */
    public $costCenter;

    /**
     * @example T85
     *
     * @var string
     */
    public $costCenterNumber;

    /**
     * @example 0
     *
     * @var float
     */
    public $coupon;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $departmentId;

    /**
     * @example 2021-10-14
     *
     * @var string
     */
    public $deptDate;

    /**
     * @var string
     */
    public $deptStation;

    /**
     * @example 09:44
     *
     * @var string
     */
    public $deptTime;

    /**
     * @example 6001
     *
     * @var string
     */
    public $feeType;

    /**
     * @example 4740293
     *
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @example 23432692343243432
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 350
     *
     * @var float
     */
    public $orderPrice;

    /**
     * @example 534545345
     *
     * @var string
     */
    public $overApplyId;

    /**
     * @example 4740293
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
     * @example 0
     *
     * @var float
     */
    public $refundFee;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $runTime;

    /**
     * @example 004F
     *
     * @var string
     */
    public $seatNo;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @example 23.0
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
     * @example 4.56
     *
     * @var float
     */
    public $settlementGrantFee;

    /**
     * @example 2021-10-08 23:39:01
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
     * @example 2115242342342424067354
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @example 350
     *
     * @var float
     */
    public $ticketPrice;

    /**
     * @example G906
     *
     * @var string
     */
    public $trainNo;

    /**
     * @var string
     */
    public $trainType;

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
        'arrDate'            => 'arr_date',
        'arrStation'         => 'arr_station',
        'arrTime'            => 'arr_time',
        'billRecordTime'     => 'bill_record_time',
        'bookTime'           => 'book_time',
        'bookerId'           => 'booker_id',
        'bookerJobNo'        => 'booker_job_no',
        'bookerName'         => 'booker_name',
        'capitalDirection'   => 'capital_direction',
        'cascadeDepartment'  => 'cascade_department',
        'changeFee'          => 'change_fee',
        'costCenter'         => 'cost_center',
        'costCenterNumber'   => 'cost_center_number',
        'coupon'             => 'coupon',
        'department'         => 'department',
        'departmentId'       => 'department_id',
        'deptDate'           => 'dept_date',
        'deptStation'        => 'dept_station',
        'deptTime'           => 'dept_time',
        'feeType'            => 'fee_type',
        'index'              => 'index',
        'invoiceTitle'       => 'invoice_title',
        'orderId'            => 'order_id',
        'orderPrice'         => 'order_price',
        'overApplyId'        => 'over_apply_id',
        'primaryId'          => 'primary_id',
        'projectCode'        => 'project_code',
        'projectName'        => 'project_name',
        'refundFee'          => 'refund_fee',
        'remark'             => 'remark',
        'runTime'            => 'run_time',
        'seatNo'             => 'seat_no',
        'seatType'           => 'seat_type',
        'serviceFee'         => 'service_fee',
        'settlementFee'      => 'settlement_fee',
        'settlementGrantFee' => 'settlement_grant_fee',
        'settlementTime'     => 'settlement_time',
        'settlementType'     => 'settlement_type',
        'status'             => 'status',
        'ticketNo'           => 'ticket_no',
        'ticketPrice'        => 'ticket_price',
        'trainNo'            => 'train_no',
        'trainType'          => 'train_type',
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
        if (null !== $this->capitalDirection) {
            $res['capital_direction'] = $this->capitalDirection;
        }
        if (null !== $this->cascadeDepartment) {
            $res['cascade_department'] = $this->cascadeDepartment;
        }
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
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
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->departmentId) {
            $res['department_id'] = $this->departmentId;
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
        if (null !== $this->feeType) {
            $res['fee_type'] = $this->feeType;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
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
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->runTime) {
            $res['run_time'] = $this->runTime;
        }
        if (null !== $this->seatNo) {
            $res['seat_no'] = $this->seatNo;
        }
        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
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
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }
        if (null !== $this->trainType) {
            $res['train_type'] = $this->trainType;
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
        if (isset($map['capital_direction'])) {
            $model->capitalDirection = $map['capital_direction'];
        }
        if (isset($map['cascade_department'])) {
            $model->cascadeDepartment = $map['cascade_department'];
        }
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
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
        if (isset($map['department'])) {
            $model->department = $map['department'];
        }
        if (isset($map['department_id'])) {
            $model->departmentId = $map['department_id'];
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
        if (isset($map['fee_type'])) {
            $model->feeType = $map['fee_type'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
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
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['run_time'])) {
            $model->runTime = $map['run_time'];
        }
        if (isset($map['seat_no'])) {
            $model->seatNo = $map['seat_no'];
        }
        if (isset($map['seat_type'])) {
            $model->seatType = $map['seat_type'];
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
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }
        if (isset($map['train_type'])) {
            $model->trainType = $map['train_type'];
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
