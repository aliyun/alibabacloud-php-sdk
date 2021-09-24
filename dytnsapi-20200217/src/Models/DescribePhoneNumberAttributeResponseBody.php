<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponseBody\phoneNumberAttribute;
use AlibabaCloud\Tea\Model;

class DescribePhoneNumberAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var phoneNumberAttribute
     */
    public $phoneNumberAttribute;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'phoneNumberAttribute' => 'PhoneNumberAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->phoneNumberAttribute) {
            $res['PhoneNumberAttribute'] = null !== $this->phoneNumberAttribute ? $this->phoneNumberAttribute->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhoneNumberAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PhoneNumberAttribute'])) {
            $model->phoneNumberAttribute = phoneNumberAttribute::fromMap($map['PhoneNumberAttribute']);
        }

        return $model;
    }
}
