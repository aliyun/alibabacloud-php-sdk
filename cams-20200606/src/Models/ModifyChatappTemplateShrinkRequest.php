<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ModifyChatappTemplateShrinkRequest extends Model
{
    /**
     * @description The category of the Viber message template. Valid values:
     *
     *   **text**: the template that contains only text
     *   **image**: the template that contains only images
     *   **text_image_button**: the template that contains text, images, and buttons
     *   **text_button**: the template that contains text and buttons
     *   **document**: the template that contains only documents
     *   **video**: the template that contains only videos
     *   **text_video**: the template that contains text and videos
     *   **text_video_button**: the template that contains text, videos, and buttons
     *   **text_image**: the template that contains text and images
     *
     * > This parameter applies only to Viber message templates.
     * @example text
     *
     * @var string
     */
    public $category;

    /**
     * @description The components of the message template.
     *
     * > If Category is set to AUTHENTICATION, the Type sub-parameter of the Components parameter cannot be set to HEADER. If the Type sub-parameter is set to BODY or FOOTER, the Text sub-parameter of the Components parameter is empty and text in the body or footer is automatically generated.
     * @var string
     */
    public $componentsShrink;

    /**
     * @description The space ID of the user within the ISV account.
     *
     * @example 28251486512358****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The WhatsApp Business account (WABA) ID of the user within the independent software vendor (ISV) account.
     *
     * > CustWabaId is an obsolete parameter. Use CustSpaceId instead.
     * @example 659216218162179
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description The examples of variables that are used when you create the message template.
     *
     * @var string
     */
    public $exampleShrink;

    /**
     * @description The ISV verification code, which is used to verify whether the user is authorized by the ISV account.
     *
     * @example ksiekdki39ksks93939
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The language that is used in the message template. For more information, see [Language codes](~~463420~~).
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description Validity period of authentication template message sending in WhatsApp
     *
     * >This attribute requires providing waba in advance to Alibaba operators to open the whitelist, otherwise it will result in template submission failure
     * @example 120
     *
     * @var int
     */
    public $messageSendTtlSeconds;

    /**
     * @description The message template code.
     *
     * @example 8472929283883
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The type of the message template.
     *
     *   **WHATSAPP**
     *   **VIBER**
     *   LINE: the Line message template. This type of message template will be released later.
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category'              => 'Category',
        'componentsShrink'      => 'Components',
        'custSpaceId'           => 'CustSpaceId',
        'custWabaId'            => 'CustWabaId',
        'exampleShrink'         => 'Example',
        'isvCode'               => 'IsvCode',
        'language'              => 'Language',
        'messageSendTtlSeconds' => 'MessageSendTtlSeconds',
        'templateCode'          => 'TemplateCode',
        'templateType'          => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->componentsShrink) {
            $res['Components'] = $this->componentsShrink;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->exampleShrink) {
            $res['Example'] = $this->exampleShrink;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->messageSendTtlSeconds) {
            $res['MessageSendTtlSeconds'] = $this->messageSendTtlSeconds;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyChatappTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Components'])) {
            $model->componentsShrink = $map['Components'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['Example'])) {
            $model->exampleShrink = $map['Example'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MessageSendTtlSeconds'])) {
            $model->messageSendTtlSeconds = $map['MessageSendTtlSeconds'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
