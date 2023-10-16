<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SbjOperateNewRequest extends Model
{
    /**
     * @var bool
     */
    public $addSubmitCount;

    /**
     * @var bool
     */
    public $allowResubmit;

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
     * @var bool
     */
    public $changeStatus;

    /**
     * @var string
     */
    public $errorMsgScreenshot;

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

    /**
     * @var string
     */
    public $successType;
    protected $_name = [
        'addSubmitCount'     => 'AddSubmitCount',
        'allowResubmit'      => 'AllowResubmit',
        'amount'             => 'Amount',
        'applyNo'            => 'ApplyNo',
        'auditStatus'        => 'AuditStatus',
        'bizId'              => 'BizId',
        'changeStatus'       => 'ChangeStatus',
        'errorMsgScreenshot' => 'ErrorMsgScreenshot',
        'fileDate'           => 'FileDate',
        'fileOssKey'         => 'FileOssKey',
        'message'            => 'Message',
        'operateType'        => 'OperateType',
        'orderNo'            => 'OrderNo',
        'receiptOssKey'      => 'ReceiptOssKey',
        'submittedSuccess'   => 'SubmittedSuccess',
        'successType'        => 'SuccessType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addSubmitCount) {
            $res['AddSubmitCount'] = $this->addSubmitCount;
        }
        if (null !== $this->allowResubmit) {
            $res['AllowResubmit'] = $this->allowResubmit;
        }
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
        if (null !== $this->changeStatus) {
            $res['ChangeStatus'] = $this->changeStatus;
        }
        if (null !== $this->errorMsgScreenshot) {
            $res['ErrorMsgScreenshot'] = $this->errorMsgScreenshot;
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
        if (null !== $this->successType) {
            $res['SuccessType'] = $this->successType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SbjOperateNewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddSubmitCount'])) {
            $model->addSubmitCount = $map['AddSubmitCount'];
        }
        if (isset($map['AllowResubmit'])) {
            $model->allowResubmit = $map['AllowResubmit'];
        }
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
        if (isset($map['ChangeStatus'])) {
            $model->changeStatus = $map['ChangeStatus'];
        }
        if (isset($map['ErrorMsgScreenshot'])) {
            $model->errorMsgScreenshot = $map['ErrorMsgScreenshot'];
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
        if (isset($map['SuccessType'])) {
            $model->successType = $map['SuccessType'];
        }

        return $model;
    }
}
