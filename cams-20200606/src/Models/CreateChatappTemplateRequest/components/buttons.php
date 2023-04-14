<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components;

use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description The phone number. This parameter is valid only if the Type parameter is set to **PHONE_NUMBER**.
     *
     * @example +861368897****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The display name of the button.
     *
     * @example Call Me
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
     *   When the TemplateType parameter is set to WHATSAPP, if you have created a website link or a phone number link, you cannot create an quick reply button.
     *
     *   When the TemplateType parameter is set to WHATSAPP, you can add a combination of two URL buttons or a combination of a URL button and a phone number button to a message template.
     *
     *   When the TemplateType parameter is set to VIBER, you can add only one button and the button must be of the URL type.
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
