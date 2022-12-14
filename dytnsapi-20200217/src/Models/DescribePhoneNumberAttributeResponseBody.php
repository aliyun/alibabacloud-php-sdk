<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponseBody\phoneNumberAttribute;
use AlibabaCloud\Tea\Model;

class DescribePhoneNumberAttributeResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @var phoneNumberAttribute
     */
    public $phoneNumberAttribute;

    /**
     * @example CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'phoneNumberAttribute' => 'PhoneNumberAttribute',
        'requestId'            => 'RequestId',
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
        if (null !== $this->phoneNumberAttribute) {
            $res['PhoneNumberAttribute'] = null !== $this->phoneNumberAttribute ? $this->phoneNumberAttribute->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PhoneNumberAttribute'])) {
            $model->phoneNumberAttribute = phoneNumberAttribute::fromMap($map['PhoneNumberAttribute']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
