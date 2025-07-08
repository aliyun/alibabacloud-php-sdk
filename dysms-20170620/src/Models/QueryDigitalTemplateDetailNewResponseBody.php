<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateDetailNewResponseBody\ossKeys;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateDetailNewResponseBody\tags;

class QueryDigitalTemplateDetailNewResponseBody extends Model
{
    /**
     * @var string
     */
    public $auditInfo;

    /**
     * @var string
     */
    public $auditRemarkInfo;

    /**
     * @var string
     */
    public $auditState;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $expireDateStr;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isAnyParam;

    /**
     * @var bool
     */
    public $isDefaultTemplate;

    /**
     * @var bool
     */
    public $isRecently;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var ossKeys
     */
    public $ossKeys;

    /**
     * @var string
     */
    public $passErrType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $signType;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var string
     */
    public $supportVendor;

    /**
     * @var tags
     */
    public $tags;

    /**
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
     * @var string
     */
    public $templateRule;
    protected $_name = [
        'auditInfo' => 'AuditInfo',
        'auditRemarkInfo' => 'AuditRemarkInfo',
        'auditState' => 'AuditState',
        'bizType' => 'BizType',
        'expireDateStr' => 'ExpireDateStr',
        'gmtCreateStr' => 'GmtCreateStr',
        'id' => 'Id',
        'isAnyParam' => 'IsAnyParam',
        'isDefaultTemplate' => 'IsDefaultTemplate',
        'isRecently' => 'IsRecently',
        'orderId' => 'OrderId',
        'ossKeys' => 'OssKeys',
        'passErrType' => 'PassErrType',
        'remark' => 'Remark',
        'requestId' => 'RequestId',
        'signType' => 'SignType',
        'smsContent' => 'SmsContent',
        'supportVendor' => 'SupportVendor',
        'tags' => 'Tags',
        'templateCode' => 'TemplateCode',
        'templateContent' => 'TemplateContent',
        'templateName' => 'TemplateName',
        'templateRule' => 'TemplateRule',
    ];

    public function validate()
    {
        if (null !== $this->ossKeys) {
            $this->ossKeys->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditInfo) {
            $res['AuditInfo'] = $this->auditInfo;
        }

        if (null !== $this->auditRemarkInfo) {
            $res['AuditRemarkInfo'] = $this->auditRemarkInfo;
        }

        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->expireDateStr) {
            $res['ExpireDateStr'] = $this->expireDateStr;
        }

        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isAnyParam) {
            $res['IsAnyParam'] = $this->isAnyParam;
        }

        if (null !== $this->isDefaultTemplate) {
            $res['IsDefaultTemplate'] = $this->isDefaultTemplate;
        }

        if (null !== $this->isRecently) {
            $res['IsRecently'] = $this->isRecently;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->ossKeys) {
            $res['OssKeys'] = null !== $this->ossKeys ? $this->ossKeys->toArray($noStream) : $this->ossKeys;
        }

        if (null !== $this->passErrType) {
            $res['PassErrType'] = $this->passErrType;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }

        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }

        if (null !== $this->supportVendor) {
            $res['SupportVendor'] = $this->supportVendor;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

        if (null !== $this->templateRule) {
            $res['TemplateRule'] = $this->templateRule;
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
        if (isset($map['AuditInfo'])) {
            $model->auditInfo = $map['AuditInfo'];
        }

        if (isset($map['AuditRemarkInfo'])) {
            $model->auditRemarkInfo = $map['AuditRemarkInfo'];
        }

        if (isset($map['AuditState'])) {
            $model->auditState = $map['AuditState'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ExpireDateStr'])) {
            $model->expireDateStr = $map['ExpireDateStr'];
        }

        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsAnyParam'])) {
            $model->isAnyParam = $map['IsAnyParam'];
        }

        if (isset($map['IsDefaultTemplate'])) {
            $model->isDefaultTemplate = $map['IsDefaultTemplate'];
        }

        if (isset($map['IsRecently'])) {
            $model->isRecently = $map['IsRecently'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OssKeys'])) {
            $model->ossKeys = ossKeys::fromMap($map['OssKeys']);
        }

        if (isset($map['PassErrType'])) {
            $model->passErrType = $map['PassErrType'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }

        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }

        if (isset($map['SupportVendor'])) {
            $model->supportVendor = $map['SupportVendor'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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

        if (isset($map['TemplateRule'])) {
            $model->templateRule = $map['TemplateRule'];
        }

        return $model;
    }
}
