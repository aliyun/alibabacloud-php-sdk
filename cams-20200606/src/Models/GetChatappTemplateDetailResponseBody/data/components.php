<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\buttons;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description Whatsapp类型模板，Category为Authentication，并且Component Type为Body时有效，表示在Body上面显示不要将验证码信息提供给其它人的提示信息
     *
     * @example false
     *
     * @var bool
     */
    public $addSecretRecommendation;

    /**
     * @description This parameter applies only to components of the **BUTTONS** type. This parameter is passed in by converting its original JSON structure into a string.
     *
     * @var buttons[]
     */
    public $buttons;

    /**
     * @description The description of the file.
     *
     * @example The new file has been uploaded.
     *
     * @var string
     */
    public $caption;

    /**
     * @description Whatsapp Authentication模板验证码有效期（分钟），只在Whatsapp类型消息，Category为Authentication并且Component Type为Footer时有效（此信息显示在Footer位置）
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
     * @description The name of the file.
     *
     * @example Express file
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the file attached in the Viber message template.
     *
     * @example docx
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The type of the media resources that are included in the message.
     *
     * @example TEXT
     *
     * @var string
     */
    public $format;

    /**
     * @description 位置纬度属性
     *
     * @example 28.001
     *
     * @var string
     */
    public $latitude;

    /**
     * @description 位置地址
     *
     * @example 杭州
     *
     * @var string
     */
    public $locationAddress;

    /**
     * @description 位置名称
     *
     * @example 杭州
     *
     * @var string
     */
    public $locationName;

    /**
     * @description 位置经度属性
     *
     * @example 120.002
     *
     * @var string
     */
    public $longitude;

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
     *   The following limits apply to components in WhatsApp message templates: A component of the **BODY** type cannot exceed 1,024 characters. A component of the **HEADER** or **FOOTER** type cannot exceed 60 characters in length.
     *
     * >
     *
     *   **FOOTER** components are not supported in Viber message templates.
     *
     * >
     *
     *   In a Viber message template, a media resource, such as an image, a video, or a file, is placed in the **HEADER** component. If a Viber message contains text and an image, the image is placed under the text in the message received on a device.
     *
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the material.
     *
     * @example https://image.developer.aliyundoc.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'addSecretRecommendation' => 'AddSecretRecommendation',
        'buttons'                 => 'Buttons',
        'caption'                 => 'Caption',
        'codeExpirationMinutes'   => 'CodeExpirationMinutes',
        'duration'                => 'Duration',
        'fileName'                => 'FileName',
        'fileType'                => 'FileType',
        'format'                  => 'Format',
        'latitude'                => 'Latitude',
        'locationAddress'         => 'LocationAddress',
        'locationName'            => 'LocationName',
        'longitude'               => 'Longitude',
        'text'                    => 'Text',
        'thumbUrl'                => 'ThumbUrl',
        'type'                    => 'Type',
        'url'                     => 'Url',
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
                $n              = 0;
                foreach ($map['Buttons'] as $item) {
                    $model->buttons[$n++] = null !== $item ? buttons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
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
