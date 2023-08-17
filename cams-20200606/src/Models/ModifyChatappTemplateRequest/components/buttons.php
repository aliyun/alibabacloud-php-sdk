<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components;

use AlibabaCloud\Tea\Model;

class buttons extends Model
{
    /**
     * @example Autofill
     *
     * @var string
     */
    public $autofillText;

    /**
     * @example false
     *
     * @var bool
     */
    public $isOptOut;

    /**
     * @example com.demo
     *
     * @var string
     */
    public $packageName;

    /**
     * @example +8613888887889
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 29dkeke
     *
     * @var string
     */
    public $signatureHash;

    /**
     * @example phone-button-text
     *
     * @var string
     */
    public $text;

    /**
     * @example PHONE_NUMBER
     *
     * @var string
     */
    public $type;

    /**
     * @example https://www.website.com/
     *
     * @var string
     */
    public $url;

    /**
     * @example dynamic
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
