<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreateChatappTemplateShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $allowCategoryChange;

    /**
     * @description The category of the template when the TemplateType parameter is set to WHATSAPP. Valid values:
     *
     *   **TRANSACTIONAL**: a transactional template
     *   **MARKETING**: a marketing template
     *   **OTP**: a one-time password template
     *
     * The category of the template when the TemplateType parameter is set to VIBER. Valid values:
     *
     *   **text**: a text message template
     *   **image**: an image message template
     *   **text_image_button**: a template that contains multiple media objects, including text, image, and button
     *   **text_button**: a template that contains the text and button media objects
     *   **document**: a document message template
     *   **video**: a video message template
     *   **text_video**: a template that contains the text and video media objects
     *   **text_video_button**: a template that contains multiple media objects, including text, video, and button
     *   **text_image**: a template that contains the text and image media objects
     *
     * @example TRANSACTIONAL
     *
     * @var string
     */
    public $category;

    /**
     * @description The list of components of the message template.
     *
     * @var string
     */
    public $componentsShrink;

    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The ID of the WhatsApp account that you register.
     *
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
     * @description The ISV verification code, which is used to verify whether the user is authorized by the ISV account.
     *
     * @example skdi3kksloslikdkkdk
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
     * @description The name of the message template.
     *
     * @example hello_whatsapp
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the message template.
     *
     *   **WHATSAPP**
     *   **VIBER**
     *   LINE: the LINE message template. The LINE message template is under development.
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'allowCategoryChange' => 'AllowCategoryChange',
        'category'            => 'Category',
        'componentsShrink'    => 'Components',
        'custSpaceId'         => 'CustSpaceId',
        'custWabaId'          => 'CustWabaId',
        'exampleShrink'       => 'Example',
        'isvCode'             => 'IsvCode',
        'language'            => 'Language',
        'name'                => 'Name',
        'templateType'        => 'TemplateType',
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
