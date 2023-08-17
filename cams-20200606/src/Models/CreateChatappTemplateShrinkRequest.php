<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreateChatappTemplateShrinkRequest extends Model
{
    /**
     * @description Specifies whether to allow Facebook to automatically change the directory of the template. If you set this parameter to true, the review success rate of the template is improved. This parameter is valid only if TemplateType is set to WHATSAPP.
     *
     * @example true
     *
     * @var bool
     */
    public $allowCategoryChange;

    /**
     * @description The category of the template if TemplateType is set to WHATSAPP. Valid values:
     *
     *   **UTILITY**: the transaction template
     *   **MARKETING**: the marketing template
     *   **AUTHENTICATION**: the authentication template
     *
     * The category of the template if TemplateType is set to VIBER. Valid values:
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
     * @example The code of the message template.
     *
     * @var string
     */
    public $category;

    /**
     * @description The components of the message template.
     *
     * > If Category is set to AUTHENTICATION, the Type sub-parameter of the Components parameter cannot be set to HEADER. If the value of Type is BODY or FOOTER, the Text sub-parameter of the Components parameter is empty.
     * @var string
     */
    public $componentsShrink;

    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 65921621816****
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
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @example 120
     *
     * @var int
     */
    public $messageSendTtlSeconds;

    /**
     * @example hello_whatsapp
     *
     * @var string
     */
    public $name;

    /**
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'allowCategoryChange'   => 'AllowCategoryChange',
        'category'              => 'Category',
        'componentsShrink'      => 'Components',
        'custSpaceId'           => 'CustSpaceId',
        'custWabaId'            => 'CustWabaId',
        'exampleShrink'         => 'Example',
        'isvCode'               => 'IsvCode',
        'language'              => 'Language',
        'messageSendTtlSeconds' => 'MessageSendTtlSeconds',
        'name'                  => 'Name',
        'templateType'          => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCategoryChange) {
            $res['AllowCategoryChange'] = $this->allowCategoryChange;
        }
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChatappTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCategoryChange'])) {
            $model->allowCategoryChange = $map['AllowCategoryChange'];
        }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
