<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class AddSmsTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The description of the message template. It is one of the reference information for template review. The description cannot exceed 100 characters in length.
     *
     * This parameter is required.
     * @example Apply for a template to send verification codes.
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
     * @description The content of the template. The content can be up to 500 characters in length. For more information, see [Message template specifications](https://help.aliyun.com/document_detail/108253.html).
     *
     * This parameter is required.
     * @example You are applying for mobile registration. The verification code is: ${code}, valid for 5 minutes!
     *
     * @var string
     */
    public $templateContent;

    /**
     * @description The name of the template. The name can be up to 30 characters in length.
     *
     * This parameter is required.
     * @example Aliyun Test
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the message. Valid values:
     *
     *   **0**: verification code
     *   **1**: notification
     *   **2**: promotional message
     *   **3**: message sent to countries or regions outside the Chinese mainland
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'remark'               => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateContent'      => 'TemplateContent',
        'templateName'         => 'TemplateName',
        'templateType'         => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSmsTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
