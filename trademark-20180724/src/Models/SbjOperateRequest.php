<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SbjOperateRequest extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $applyNo;

    /**
     * @var bool
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $fileDate;

    /**
     * @var string
     */
    public $fileOssKey;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var string
     */
    public $receiptOssKey;

    /**
     * @var bool
     */
    public $submittedSuccess;
    protected $_name = [
        'amount'           => 'Amount',
        'applyNo'          => 'ApplyNo',
        'auditStatus'      => 'AuditStatus',
        'bizId'            => 'BizId',
        'fileDate'         => 'FileDate',
        'fileOssKey'       => 'FileOssKey',
        'message'          => 'Message',
        'operateType'      => 'OperateType',
        'orderNo'          => 'OrderNo',
        'receiptOssKey'    => 'ReceiptOssKey',
        'submittedSuccess' => 'SubmittedSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->applyNo) {
            $res['ApplyNo'] = $this->applyNo;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->fileDate) {
            $res['FileDate'] = $this->fileDate;
        }
        if (null !== $this->fileOssKey) {
            $res['FileOssKey'] = $this->fileOssKey;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }
        if (null !== $this->receiptOssKey) {
            $res['ReceiptOssKey'] = $this->receiptOssKey;
        }
        if (null !== $this->submittedSuccess) {
            $res['SubmittedSuccess'] = $this->submittedSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SbjOperateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['ApplyNo'])) {
            $model->applyNo = $map['ApplyNo'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['FileDate'])) {
            $model->fileDate = $map['FileDate'];
        }
        if (isset($map['FileOssKey'])) {
            $model->fileOssKey = $map['FileOssKey'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }
        if (isset($map['ReceiptOssKey'])) {
            $model->receiptOssKey = $map['ReceiptOssKey'];
        }
        if (isset($map['SubmittedSuccess'])) {
            $model->submittedSuccess = $map['SubmittedSuccess'];
        }

        return $model;
    }
}
