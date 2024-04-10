<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\buttons;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\cards;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The note indicating that customers cannot share verification codes with others. The note is displayed in the message body. This parameter is valid if Category is set to AUTHENTICATION and the Type sub-parameter of the Components parameter is set to BODY in a WhatsApp message template.
     *
     * @example false
     *
     * @var bool
     */
    public $addSecretRecommendation;

    /**
     * @description The buttons. Specify this parameter only if you set the Type sub-parameter of the Components parameter to **BUTTONS**. Before you specify this parameter, the format of the value must be changed from JSON to String.
     *
     * @var buttons[]
     */
    public $buttons;

    /**
     * @description The description of the document.
     *
     * @example The new file has been uploaded.
     *
     * @var string
     */
    public $caption;

    /**
     * @description The carousel cards.
     *
     * @var cards[]
     */
    public $cards;

    /**
     * @description The validity period of the verification code in the WhatsApp authentication template. Unit: minutes. This parameter is valid only when Category is set to AUTHENTICATION and the Type sub-parameter of the Components parameter is set to FOOTER in a WhatsApp message template. The validity period of the verification code is displayed in the footer.
     *
     * @example 5
     *
     * @var int
     */
    public $codeExpirationMinutes;

    /**
     * @description The length of the video in the Viber message template. Valid values: 0 to 600. Unit: seconds.
     *
     * @example 50
     *
     * @var int
     */
    public $duration;

    /**
     * @description The name of the document.
     *
     * @example Express file
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
     * @description The format.
     *
     * @example TEXT
     *
     * @var string
     */
    public $format;

    /**
     * @description The latitude of the location.
     *
     * @example 28.001
     *
     * @var string
     */
    public $latitude;

    /**
     * @description The address of the location.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $locationAddress;

    /**
     * @description The name of the location.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $locationName;

    /**
     * @description The longitude of the location.
     *
     * @example 120.002
     *
     * @var string
     */
    public $longitude;

    /**
     * @description The variable when the coupon code expires in the limited-time offer template.
     *
     * @example $(offerExpirationTimeMs)
     *
     * @var string
     */
    public $offerExpirationTimeMs;

    /**
     * @description The text of the message that you want to send.
     *
     * @example Hello
     *
     * @var string
     */
    public $text;

    /**
     * @description The thumbnail URL of the video in the Viber message template.
     *
     * @example https://img.png
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
     *
     * >
     *
     *   The following limits apply to components in WhatsApp message templates: A **BODY** component cannot exceed 1,024 characters in length. A **HEADER** or **FOOTER** component cannot exceed 60 characters in length.
     *
     *   **FOOTER** components are not supported in Viber message templates.
     *
     *   In a Viber message template, media resources such as images, videos, and documents are placed in the **HEADER** component. If a Viber message contains both text and an image, the image is placed below the text in the message received on a device.
     *
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the media resource.
     *
     * @example https://image.developer.aliyundoc.com
     *
     * @var string
     */
    public $url;

    /**
     * @description Indicates whether the coupon code will expire in the limited-time offer template.
     *
     * @example true
     *
     * @var bool
     */
    public $hasExpiration;
    protected $_name = [
        'addSecretRecommendation' => 'AddSecretRecommendation',
        'buttons'                 => 'Buttons',
        'caption'                 => 'Caption',
        'cards'                   => 'Cards',
        'codeExpirationMinutes'   => 'CodeExpirationMinutes',
        'duration'                => 'Duration',
        'fileName'                => 'FileName',
        'fileType'                => 'FileType',
        'format'                  => 'Format',
        'latitude'                => 'Latitude',
        'locationAddress'         => 'LocationAddress',
        'locationName'            => 'LocationName',
        'longitude'               => 'Longitude',
        'offerExpirationTimeMs'   => 'OfferExpirationTimeMs',
        'text'                    => 'Text',
        'thumbUrl'                => 'ThumbUrl',
        'type'                    => 'Type',
        'url'                     => 'Url',
        'hasExpiration'           => 'hasExpiration',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->locationAddress) {
            $res['LocationAddress'] = $this->locationAddress;
        }
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->offerExpirationTimeMs) {
            $res['OfferExpirationTimeMs'] = $this->offerExpirationTimeMs;
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
        if (null !== $this->hasExpiration) {
            $res['hasExpiration'] = $this->hasExpiration;
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
                $n              = 0;
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
                $n            = 0;
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
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['LocationAddress'])) {
            $model->locationAddress = $map['LocationAddress'];
        }
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['OfferExpirationTimeMs'])) {
            $model->offerExpirationTimeMs = $map['OfferExpirationTimeMs'];
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
        if (isset($map['hasExpiration'])) {
            $model->hasExpiration = $map['hasExpiration'];
        }

        return $model;
    }
}
