<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\buttons;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\cards;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The note indicating that customers cannot share verification codes with others. The note is displayed in the message body. This parameter is valid if Category is set to AUTHENTICATION and the Type sub-parameter of the Components parameter is set to BODY for a WhatsApp message template.
     *
     * @example true
     *
     * @var bool
     */
    public $addSecretRecommendation;

    /**
     * @description The buttons. Specify this parameter only if you set the Type sub-parameter of the Components parameter to **BUTTONS**.
     *
     * >  ####
     *
     *   A marketing or utility WhatsApp message template can contain up to 10 buttons.
     *
     *   A WhatsApp message template can contain only one phone call button.
     *
     *   A WhatsApp message template can contain up to two URL buttons.
     *
     *   In a WhatsApp message template, a quick reply button cannot be used together with a phone call button or a URL button.
     *
     * @var buttons[]
     */
    public $buttons;

    /**
     * @description The description of the document.
     *
     * @example This is a video
     *
     * @var string
     */
    public $caption;

    /**
     * @description The carousel cards of the carousel template.
     *
     * @var cards[]
     */
    public $cards;

    /**
     * @description The validity period of the verification code in the WhatsApp authentication template. Unit: minutes. This parameter is valid only when Category is set to AUTHENTICATION and the Type sub-parameter of the Components parameter is set to FOOTER. The validity period of the verification code is displayed in the footer.
     *
     * @example 5
     *
     * @var int
     */
    public $codeExpirationMinutes;

    /**
     * @description The length of the video in the Viber message template. Unit: seconds. Valid values: 0 to 600.
     *
     * @example 120
     *
     * @var int
     */
    public $duration;

    /**
     * @description The name of the document.
     *
     * @example video name
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the document attached in the Viber message template.
     *
     * @example docx
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The type of the media resource. Valid values:
     *
     *   **TEXT**
     *   **IMAGE**
     *   **DOCUMENT**
     *   **VIDEO**
     *
     * @example TEXT
     *
     * @var string
     */
    public $format;

    /**
     * @description Specifies whether the coupon code has an expiration time. Specify this parameter if the Type sub-parameter of the Components parameter is set to LIMITED_TIME_OFFER.
     *
     * @example true
     *
     * @var bool
     */
    public $hasExpiration;

    /**
     * @description The text of the message that you want to send.
     *
     * >  If Category is set to AUTHENTICATION, the Text sub-parameter of the Components parameter must be empty.
     *
     * @example hello whatsapp
     *
     * @var string
     */
    public $text;

    /**
     * @description The thumbnail URL of the video in the Viber message template.
     *
     * @example https://cdn.multiplymall.mobiapp.cloud/yunmall/B-LM-LMALL202207130001/20220730/d712a057-a6af-4513-bbe6-7ee57ea60983.png?x-oss-process=image/resize,w_100
     *
     * @var string
     */
    public $thumbUrl;

    /**
     * @description The type of the component. Valid values:
     *
     *   **BODY**
     *   **HEADER**
     *   **FOOTER**
     *   **BUTTONS**
     *   **CAROUSEL**
     *   **LIMITED_TIME_OFFER**
     *
     * >
     *
     *   In a WhatsApp message template, a **Body** component cannot exceed 1,024 characters in length. A **HEADER** or **FOOTER** component cannot exceed 60 characters in length.
     *
     *   **FOOTER**, **CAROUSEL**, and **LIMITED_TIME_OFFER** components are not supported in Viber message templates.
     *
     *   In Viber message templates, media resources such as images, videos, and documents are placed in the **HEADER** component. If a Viber message contains text and an image, the image is placed below the text in the message received on a device.
     *
     * This parameter is required.
     *
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the media resource.
     *
     * >  We recommend that you use 800 × 800 images in Viber message templates.
     *
     * @example https://image.developer.aliyundoc.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'addSecretRecommendation' => 'AddSecretRecommendation',
        'buttons' => 'Buttons',
        'caption' => 'Caption',
        'cards' => 'Cards',
        'codeExpirationMinutes' => 'CodeExpirationMinutes',
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'format' => 'Format',
        'hasExpiration' => 'HasExpiration',
        'text' => 'Text',
        'thumbUrl' => 'ThumbUrl',
        'type' => 'Type',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addSecretRecommendation) {
            $res['AddSecretRecommendation'] = $this->addSecretRecommendation;
        }
        if (null !== $this->buttons) {
            $res['Buttons'] = [];
            if (null !== $this->buttons && \is_array($this->buttons)) {
                $n = 0;
                foreach ($this->buttons as $item) {
                    $res['Buttons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->cards) {
            $res['Cards'] = [];
            if (null !== $this->cards && \is_array($this->cards)) {
                $n = 0;
                foreach ($this->cards as $item) {
                    $res['Cards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->codeExpirationMinutes) {
            $res['CodeExpirationMinutes'] = $this->codeExpirationMinutes;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->hasExpiration) {
            $res['HasExpiration'] = $this->hasExpiration;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->thumbUrl) {
            $res['ThumbUrl'] = $this->thumbUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddSecretRecommendation'])) {
            $model->addSecretRecommendation = $map['AddSecretRecommendation'];
        }
        if (isset($map['Buttons'])) {
            if (!empty($map['Buttons'])) {
                $model->buttons = [];
                $n = 0;
                foreach ($map['Buttons'] as $item) {
                    $model->buttons[$n++] = null !== $item ? buttons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['Cards'])) {
            if (!empty($map['Cards'])) {
                $model->cards = [];
                $n = 0;
                foreach ($map['Cards'] as $item) {
                    $model->cards[$n++] = null !== $item ? cards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CodeExpirationMinutes'])) {
            $model->codeExpirationMinutes = $map['CodeExpirationMinutes'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['HasExpiration'])) {
            $model->hasExpiration = $map['HasExpiration'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['ThumbUrl'])) {
            $model->thumbUrl = $map['ThumbUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
