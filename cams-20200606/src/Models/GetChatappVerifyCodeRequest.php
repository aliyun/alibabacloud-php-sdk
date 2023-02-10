<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetChatappVerifyCodeRequest extends Model
{
    /**
     * @description The space ID of the user under the ISV account.
     *
     * @example 229393838
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The language.
     *
     * @example zh_CN
     *
     * @var string
     */
    public $locale;

    /**
     * @description The type of the verification code. Valid values: SMS and VOICE.
     *
     * @example SMS
     *
     * @var string
     */
    public $method;

    /**
     * @description The phone number.
     *
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'locale'      => 'Locale',
        'method'      => 'Method',
        'phoneNumber' => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChatappVerifyCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
