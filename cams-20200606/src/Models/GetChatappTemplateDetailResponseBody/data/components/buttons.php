<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components;

use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description The phone number. This parameter is valid only if the return value of the Type parameter is **PHONE_NUMBER**.
     *
     * @example 861398745****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The display name of the button.
     *
     * @example Call us
     *
     * @var string
     */
    public $text;

    /**
     * @description The type of the button. Valid values:
     *
     *   **PHONE_NUMBER**: a phone number button
     *   **URL**: a URL button
     *   **QUICK_REPLY**: a quick reply button
     *
     * >
     *
     *   If you have created a URL button or a phone number button, you cannot create a quick reply button.
     *
     *   You can add a combination of two URL buttons or a combination of a URL button and a phone number button to a message template.
     *
     *   You can add only one button to a Viber message template, and the button must be a URL button.
     *
     * @example PHONE_NUMBER
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL to be accessed when users click the URL button.
     *
     * @example https://example.com
     *
     * @var string
     */
    public $url;

    /**
     * @description The type of the URL. Valid values:
     *
     *   **static**: a static URL
     *   **dynamic**: a dynamic URL
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
