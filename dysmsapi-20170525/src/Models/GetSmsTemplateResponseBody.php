<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateResponseBody\auditInfo;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateResponseBody\fileUrlList;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateResponseBody\moreDataFileUrlList;
use AlibabaCloud\Tea\Model;

class GetSmsTemplateResponseBody extends Model
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
     * @var fileUrlList
     */
    public $fileUrlList;

    /**
     * @example 0
     *
     * @var int
     */
    public $intlType;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @var moreDataFileUrlList
     */
    public $moreDataFileUrlList;

    /**
     * @example 20030193785
     *
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $relatedSignName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 819BE656-D2E0-4858-8B21-B2E47708****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SMS_2322****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @example 1
     *
     * @var string
     */
    public $templateStatus;

    /**
     * @example 2
     *
     * @var int
     */
    public $templateTag;

    /**
     * @example 1
     *
     * @var string
     */
    public $templateType;

    /**
     * @example {"code":"characterWithNumber"}
     *
     * @var string
     */
    public $variableAttribute;
    protected $_name = [
        'applyScene'          => 'ApplyScene',
        'auditInfo'           => 'AuditInfo',
        'code'                => 'Code',
        'createDate'          => 'CreateDate',
        'fileUrlList'         => 'FileUrlList',
        'intlType'            => 'IntlType',
        'message'             => 'Message',
        'moreDataFileUrlList' => 'MoreDataFileUrlList',
        'orderId'             => 'OrderId',
        'relatedSignName'     => 'RelatedSignName',
        'remark'              => 'Remark',
        'requestId'           => 'RequestId',
        'templateCode'        => 'TemplateCode',
        'templateContent'     => 'TemplateContent',
        'templateName'        => 'TemplateName',
        'templateStatus'      => 'TemplateStatus',
        'templateTag'         => 'TemplateTag',
        'templateType'        => 'TemplateType',
        'variableAttribute'   => 'VariableAttribute',
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
            $res['FileUrlList'] = null !== $this->fileUrlList ? $this->fileUrlList->toMap() : null;
        }
        if (null !== $this->intlType) {
            $res['IntlType'] = $this->intlType;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->moreDataFileUrlList) {
            $res['MoreDataFileUrlList'] = null !== $this->moreDataFileUrlList ? $this->moreDataFileUrlList->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->relatedSignName) {
            $res['RelatedSignName'] = $this->relatedSignName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }
        if (null !== $this->templateTag) {
            $res['TemplateTag'] = $this->templateTag;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->variableAttribute) {
            $res['VariableAttribute'] = $this->variableAttribute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmsTemplateResponseBody
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
            $model->fileUrlList = fileUrlList::fromMap($map['FileUrlList']);
        }
        if (isset($map['IntlType'])) {
            $model->intlType = $map['IntlType'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MoreDataFileUrlList'])) {
            $model->moreDataFileUrlList = moreDataFileUrlList::fromMap($map['MoreDataFileUrlList']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RelatedSignName'])) {
            $model->relatedSignName = $map['RelatedSignName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }
        if (isset($map['TemplateTag'])) {
            $model->templateTag = $map['TemplateTag'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['VariableAttribute'])) {
            $model->variableAttribute = $map['VariableAttribute'];
        }

        return $model;
    }
}
