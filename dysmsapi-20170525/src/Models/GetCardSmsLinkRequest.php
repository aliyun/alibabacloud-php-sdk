<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetCardSmsLinkRequest extends Model
{
    /**
     * @description The code type of the URLs.
     *
     *   **1**: group texting
     *   **2**: personalization
     *
     * @example 2
     *
     * @var int
     */
    public $cardCodeType;

    /**
     * @description The type of the short URLs.
     *
     *   1: standard short code.
     *   2: custom short code.
     *
     * > If the **CardLinkType** is not specified, standard short codes are generated. If you need to generate custom short codes, contact Alibaba Cloud SMS technical support.
     * @example 1
     *
     * @var int
     */
    public $cardLinkType;

    /**
     * @description The code of the message template. You can view the template code in the **Template Code** column on the **Templates** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * This parameter is required.
     * @example CARD_SMS_****
     *
     * @var string
     */
    public $cardTemplateCode;

    /**
     * @description The variables of the message template.
     *
     * @var string
     */
    public $cardTemplateParamJson;

    /**
     * @description The custom short code. It can contain 4 to 8 digits or letters.
     *
     * > If the CardLinkType parameter is set to 2, the CustomShortCodeJson parameter is required.
     * @example abCde
     *
     * @var string
     */
    public $customShortCodeJson;

    /**
     * @description The original domain name. You must submit domain names for approval in advance.
     *
     * >
     *
     *   If the **CardLinkType** parameter is set to **2**, the **Domain** parameter is required.
     *
     *   The **Domain** parameter cannot exceed 100 characters in length. If the parameter is not specified, a default domain name is used.
     *
     * @example xxx.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The extension field.
     *
     * @example BC20220608102511660860762****
     *
     * @var string
     */
    public $outId;

    /**
     * @description The mobile phone numbers of recipients, custom identifiers, or system identifiers.
     *
     * >
     *
     *   A maximum of 10,000 mobile phone numbers are supported.
     *
     *   You can enter custom identifier. Each identifier can be a maximum of 60 characters in length.
     *
     *   You can apply for a maximum of 10 OPPO templates at a time.
     *
     * @example [\\"1390000****
     * \\",\\"1370000****
     * \\"]
     * @var string
     */
    public $phoneNumberJson;

    /**
     * @description The signature. You can view the template code in the **Signature** column on the **Signaturess** tab of the **Go China** page in the Alibaba Cloud SMS console.
     *
     * This parameter is required.
     * @var string
     */
    public $signNameJson;
    protected $_name = [
        'cardCodeType'          => 'CardCodeType',
        'cardLinkType'          => 'CardLinkType',
        'cardTemplateCode'      => 'CardTemplateCode',
        'cardTemplateParamJson' => 'CardTemplateParamJson',
        'customShortCodeJson'   => 'CustomShortCodeJson',
        'domain'                => 'Domain',
        'outId'                 => 'OutId',
        'phoneNumberJson'       => 'PhoneNumberJson',
        'signNameJson'          => 'SignNameJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardCodeType) {
            $res['CardCodeType'] = $this->cardCodeType;
        }
        if (null !== $this->cardLinkType) {
            $res['CardLinkType'] = $this->cardLinkType;
        }
        if (null !== $this->cardTemplateCode) {
            $res['CardTemplateCode'] = $this->cardTemplateCode;
        }
        if (null !== $this->cardTemplateParamJson) {
            $res['CardTemplateParamJson'] = $this->cardTemplateParamJson;
        }
        if (null !== $this->customShortCodeJson) {
            $res['CustomShortCodeJson'] = $this->customShortCodeJson;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->phoneNumberJson) {
            $res['PhoneNumberJson'] = $this->phoneNumberJson;
        }
        if (null !== $this->signNameJson) {
            $res['SignNameJson'] = $this->signNameJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCardSmsLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardCodeType'])) {
            $model->cardCodeType = $map['CardCodeType'];
        }
        if (isset($map['CardLinkType'])) {
            $model->cardLinkType = $map['CardLinkType'];
        }
        if (isset($map['CardTemplateCode'])) {
            $model->cardTemplateCode = $map['CardTemplateCode'];
        }
        if (isset($map['CardTemplateParamJson'])) {
            $model->cardTemplateParamJson = $map['CardTemplateParamJson'];
        }
        if (isset($map['CustomShortCodeJson'])) {
            $model->customShortCodeJson = $map['CustomShortCodeJson'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PhoneNumberJson'])) {
            $model->phoneNumberJson = $map['PhoneNumberJson'];
        }
        if (isset($map['SignNameJson'])) {
            $model->signNameJson = $map['SignNameJson'];
        }

        return $model;
    }
}
