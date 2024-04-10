<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\cards\cardComponents;

use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description The phone number.
     *
     * @example +86138000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The button content.
     *
     * @example Button text
     *
     * @var string
     */
    public $text;

    /**
     * @description The type of the button in the carousel template. Valid values: URL, PHONE_NUMBER, and QUICK_REQLY.
     *
     * @example URL
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL to be accessed when you click the URL button.
     *
     * @example https://aliyun.com
     *
     * @var string
     */
    public $url;

    /**
     * @description The type of the URL. Valid values: static and dynamic.
     *
     * @example static
     *
     * @var string
     */
    public $urlType;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'text'        => 'Text',
        'type'        => 'Type',
        'url'         => 'Url',
        'urlType'     => 'UrlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->urlType) {
            $res['UrlType'] = $this->urlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buttons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UrlType'])) {
            $model->urlType = $map['UrlType'];
        }

        return $model;
    }
}
