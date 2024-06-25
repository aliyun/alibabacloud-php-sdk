<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsSignResponseBody\auditInfo;
use AlibabaCloud\Tea\Model;

class GetSmsSignResponseBody extends Model
{
    /**
     * @example http://www.aliyun.com/
     *
     * @var string
     */
    public $applyScene;

    /**
     * @var auditInfo
     */
    public $auditInfo;

    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 2024-06-03 10:02:34
     *
     * @var string
     */
    public $createDate;

    /**
     * @var string[]
     */
    public $fileUrlList;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example 20044156924
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 2004393xxxx
     *
     * @var int
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example F655A8D5-B967-440B-8683-DAD6FF8DE990
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SIGN_100xxx077042023_16884xxxx64065_hrsdB
     *
     * @var string
     */
    public $signCode;

    /**
     * @var string
     */
    public $signName;

    /**
     * @example 1
     *
     * @var int
     */
    public $signStatus;

    /**
     * @example 2
     *
     * @var string
     */
    public $signTag;

    /**
     * @var string
     */
    public $signUsage;

    /**
     * @example false
     *
     * @var bool
     */
    public $thirdParty;
    protected $_name = [
        'applyScene'      => 'ApplyScene',
        'auditInfo'       => 'AuditInfo',
        'code'            => 'Code',
        'createDate'      => 'CreateDate',
        'fileUrlList'     => 'FileUrlList',
        'message'         => 'Message',
        'orderId'         => 'OrderId',
        'qualificationId' => 'QualificationId',
        'remark'          => 'Remark',
        'requestId'       => 'RequestId',
        'signCode'        => 'SignCode',
        'signName'        => 'SignName',
        'signStatus'      => 'SignStatus',
        'signTag'         => 'SignTag',
        'signUsage'       => 'SignUsage',
        'thirdParty'      => 'ThirdParty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyScene) {
            $res['ApplyScene'] = $this->applyScene;
        }
        if (null !== $this->auditInfo) {
            $res['AuditInfo'] = null !== $this->auditInfo ? $this->auditInfo->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->fileUrlList) {
            $res['FileUrlList'] = $this->fileUrlList;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signCode) {
            $res['SignCode'] = $this->signCode;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signStatus) {
            $res['SignStatus'] = $this->signStatus;
        }
        if (null !== $this->signTag) {
            $res['SignTag'] = $this->signTag;
        }
        if (null !== $this->signUsage) {
            $res['SignUsage'] = $this->signUsage;
        }
        if (null !== $this->thirdParty) {
            $res['ThirdParty'] = $this->thirdParty;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmsSignResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyScene'])) {
            $model->applyScene = $map['ApplyScene'];
        }
        if (isset($map['AuditInfo'])) {
            $model->auditInfo = auditInfo::fromMap($map['AuditInfo']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['FileUrlList'])) {
            if (!empty($map['FileUrlList'])) {
                $model->fileUrlList = $map['FileUrlList'];
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignCode'])) {
            $model->signCode = $map['SignCode'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignStatus'])) {
            $model->signStatus = $map['SignStatus'];
        }
        if (isset($map['SignTag'])) {
            $model->signTag = $map['SignTag'];
        }
        if (isset($map['SignUsage'])) {
            $model->signUsage = $map['SignUsage'];
        }
        if (isset($map['ThirdParty'])) {
            $model->thirdParty = $map['ThirdParty'];
        }

        return $model;
    }
}
