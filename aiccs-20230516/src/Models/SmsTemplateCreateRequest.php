<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Tea\Model;

class SmsTemplateCreateRequest extends Model
{
    /**
     * @description 短信内容
     *
     * This parameter is required.
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 短信签名
     *
     * This parameter is required.
     * @example ef2i29fsljf
     *
     * @var string
     */
    public $sign;

    /**
     * @description 短信类型
     *
     * @example 73
     *
     * @var int
     */
    public $smsType;

    /**
     * @description 模板名称
     *
     * This parameter is required.
     * @example 示例值示例值
     *
     * @var string
     */
    public $templateName;

    /**
     * @description 模板类型
     *
     * @example 56
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'content'              => 'Content',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sign'                 => 'Sign',
        'smsType'              => 'SmsType',
        'templateName'         => 'TemplateName',
        'templateType'         => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->smsType) {
            $res['SmsType'] = $this->smsType;
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
     * @return SmsTemplateCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SmsType'])) {
            $model->smsType = $map['SmsType'];
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
