<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class UpdateSmsTemplateShrinkRequest extends Model
{
    /**
     * @description Application scenarios, instructions as follows:
     * - For e-commerce platform stores, applicable only to enterprise users, enter the display link of the e-commerce store with HTTP or HTTPS.
     * @example http://www.aliyun.com/
     *
     * @var string
     */
    public $applySceneContent;

    /**
     * @description International/Hong Kong, Macao, and Taiwan template type. When the **TemplateType** parameter is **3**, this parameter is required for international/Hong Kong, Macao, and Taiwan templates, with values:
     * - **0**: Verification code.
     * - **1**: SMS notification.
     * - **2**: Promotional SMS.
     * @example 0
     *
     * @var int
     */
    public $intlType;

    /**
     * @description Additional information, such as uploading business proof documents or screenshots, to help reviewers understand your business details. Optional and can be left unset.
     *
     * @var string
     */
    public $moreDataShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description SMS signature associated with the template during the application.
     *
     * @example 阿里云
     *
     * @var string
     */
    public $relatedSignName;

    /**
     * @description Explanation for the SMS template application, which serves as a reference for template review.
     *
     * @example 登录场景使用验证码
     *
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Template Code of an unapproved template.
     *
     * This parameter is required.
     * @example SMS_152550****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description Template content, up to 500 characters in length.
     *
     * This parameter is required.
     * @example 您正在申请手机注册，验证码为：${code}，5分钟内有效！
     *
     * @var string
     */
    public $templateContent;

    /**
     * @description Template name, up to 30 characters in length.
     *
     * This parameter is required.
     * @example 验证码
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Template variable rules.
     *
     * For guidance on filling variable rules, refer to the [Sample Documentation](https://help.aliyun.com/zh/sms/templaterule-template-variable-parameter-filling-example?spm).
     * @example {"code":"characterWithNumber"}
     *
     * @var string
     */
    public $templateRule;

    /**
     * @description SMS type. Values:
     *
     * - **0**: Verification code.
     * - **1**: SMS notification.
     * - **2**: Promotional SMS.
     * - **3**: International/Hong Kong, Macao, and Taiwan messages.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'applySceneContent'    => 'ApplySceneContent',
        'intlType'             => 'IntlType',
        'moreDataShrink'       => 'MoreData',
        'ownerId'              => 'OwnerId',
        'relatedSignName'      => 'RelatedSignName',
        'remark'               => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateCode'         => 'TemplateCode',
        'templateContent'      => 'TemplateContent',
        'templateName'         => 'TemplateName',
        'templateRule'         => 'TemplateRule',
        'templateType'         => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applySceneContent) {
            $res['ApplySceneContent'] = $this->applySceneContent;
        }
        if (null !== $this->intlType) {
            $res['IntlType'] = $this->intlType;
        }
        if (null !== $this->moreDataShrink) {
            $res['MoreData'] = $this->moreDataShrink;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->relatedSignName) {
            $res['RelatedSignName'] = $this->relatedSignName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSmsTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplySceneContent'])) {
            $model->applySceneContent = $map['ApplySceneContent'];
        }
        if (isset($map['IntlType'])) {
            $model->intlType = $map['IntlType'];
        }
        if (isset($map['MoreData'])) {
            $model->moreDataShrink = $map['MoreData'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RelatedSignName'])) {
            $model->relatedSignName = $map['RelatedSignName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
