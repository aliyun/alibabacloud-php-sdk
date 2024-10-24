<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateSmsTemplateRequest extends Model
{
    /**
     * @description If there is an applicable scenario, you can fill it in.
     *
     * @example http://www.aliyun.com/
     *
     * @var string
     */
    public $applySceneContent;

    /**
     * @description International/Hong Kong, Macao, and Taiwan template type. When the **TemplateType** parameter is **3**, this parameter is required for international/Hong Kong, Macao, and Taiwan templates, with values:
     * - **0**: Verification code.
     * - **1**: SMS notification.
     * - **2**: Promotional message.
     * @example 0
     *
     * @var int
     */
    public $intlType;

    /**
     * @description Additional materials you can upload, such as business proof documents or screenshots, to help reviewers understand your business details.
     *
     * This parameter is optional; please fill it in according to actual needs.
     * @var string[]
     */
    public $moreData;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The signature name that the template needs to be associated with. The associated SMS signature must have passed the review.
     *
     * This parameter is mandatory when the TemplateType parameter is **0**, **1**, or **2**.
     *
     * <notice>Associating a signature can expedite the review process. Note that this associated signature is unrelated to the signature selected when sending SMS messages.</notice>
     * @example Aliyun
     *
     * @var string
     */
    public $relatedSignName;

    /**
     * @description Please describe the business scenario where you use SMS or provide an online link to the scenario, along with a complete example of the SMS (with variable contents filled), as complete information helps increase the template approval rate. Failure to follow guidelines or leaving this field blank may affect the approval of your template.
     *
     * @example Request verification code SMS.
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
     * @description Template content, up to 500 characters in length.
     *
     * This parameter is required.
     * @example You are applying for mobile registration. The verification code is: ${code}. It is valid for 5 minutes!
     *
     * @var string
     */
    public $templateContent;

    /**
     * @description Template name, up to 30 characters in length.
     *
     * This parameter is required.
     * @example aliyunCode
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Template variable rules.
     *
     * For filling in variable rules, refer to the [Sample Documentation](https://help.aliyun.com/zh/sms/templaterule-template-variable-parameter-filling-example).
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
     * - **2**: Promotional message.
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
        'moreData'             => 'MoreData',
        'ownerId'              => 'OwnerId',
        'relatedSignName'      => 'RelatedSignName',
        'remark'               => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->moreData) {
            $res['MoreData'] = $this->moreData;
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
     * @return CreateSmsTemplateRequest
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
            if (!empty($map['MoreData'])) {
                $model->moreData = $map['MoreData'];
            }
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
