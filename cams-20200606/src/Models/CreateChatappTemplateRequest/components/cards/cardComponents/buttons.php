<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\cards\cardComponents;

use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description The phone number.
     *
     * @example +8613800
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The text of the button.
     *
     * @example Call me
     *
     * @var string
     */
    public $text;

    /**
     * @description The type of the button. Valid values:
     *
     *   **PHONE_NUMBER**: phone call button
     *   **URL**: URL button
     *   **QUICK_REPLY**: quick reply button
     *
     * This parameter is required.
     * @example PHONE_NUMBER
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL to which you are redirected when you click the URL button.
     *
     * @example https://alibaba.com/xx
     *
     * @var string
     */
    public $url;

    /**
     * @description The type of the URL. Valid values:
     *
     *   **static**
     *   **dynamic**
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
