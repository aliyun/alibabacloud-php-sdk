<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components;

use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @description The text of the one-tap autofill button. AutofillText is required if Category is set to AUTHENTICATION in a WhatsApp message template and the Type sub-parameter of the Buttons parameter is set to ONE_TAP.
     *
     * @example Autofill
     *
     * @var string
     */
    public $autofillText;

    /**
     * @description The unsubscribe button in a WhatsApp marketing template. This parameter is valid if Category is set to MARKETING in a WhatsApp message template and the Type sub-parameter of the Buttons parameter is set to QUICK_REPLY. After you tap this button and customers configure the feature for unsubscribing from a WhatsApp marketing template in the ChatAPP console, subsequent marketing messages are not sent to you.
     *
     * @example false
     *
     * @var bool
     */
    public $isOptOut;

    /**
     * @description The package name of the app. PackageName is required if Category is set to AUTHENTICATION in a WhatsApp message template and the Type sub-parameter of the Buttons parameter is set to ONE_TAP.
     *
     * @example com.demo
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The phone number. This parameter is valid only if the Type sub-parameter of the Buttons parameter is set to **PHONE_NUMBER**.
     *
     * @example +861368897****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The hash value of the app signing key. SignatureHash is required if Category is set to AUTHENTICATION in a WhatsApp message template and the Type sub-parameter of the Buttons parameter is set to ONE_TAP.
     *
     * @example wi299382
     *
     * @var string
     */
    public $signatureHash;

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
     *   **PHONE_NUMBER**: the phone call button
     *   **URL**: the URL button
     *   **QUICK_REPLY**: the quick reply button
     *   **COPY_CODE**: the copy code button if Category is set to AUTHENTICATION
     *   **ONE_TAP**: the one-tap autofill button if Category is set to AUTHENTICATION
     *
     * > - You can add only one button to a Viber message template, and you must set the Type sub-parameter of the Buttons parameter to URL.
     * @example PHONE_NUMBER
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL to be accessed when you click the URL button.
     *
     * @example https://example.com
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
        'autofillText'  => 'AutofillText',
        'isOptOut'      => 'IsOptOut',
        'packageName'   => 'PackageName',
        'phoneNumber'   => 'PhoneNumber',
        'signatureHash' => 'SignatureHash',
        'text'          => 'Text',
        'type'          => 'Type',
        'url'           => 'Url',
        'urlType'       => 'UrlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autofillText) {
            $res['AutofillText'] = $this->autofillText;
        }
        if (null !== $this->isOptOut) {
            $res['IsOptOut'] = $this->isOptOut;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->signatureHash) {
            $res['SignatureHash'] = $this->signatureHash;
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
        if (isset($map['AutofillText'])) {
            $model->autofillText = $map['AutofillText'];
        }
        if (isset($map['IsOptOut'])) {
            $model->isOptOut = $map['IsOptOut'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['SignatureHash'])) {
            $model->signatureHash = $map['SignatureHash'];
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
