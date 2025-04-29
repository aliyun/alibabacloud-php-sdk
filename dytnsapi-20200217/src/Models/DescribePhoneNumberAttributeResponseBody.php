<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponseBody\phoneNumberAttribute;

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
     * @var phoneNumberAttribute
     */
    public $phoneNumberAttribute;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'phoneNumberAttribute' => 'PhoneNumberAttribute',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->phoneNumberAttribute) {
            $this->phoneNumberAttribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->phoneNumberAttribute) {
            $res['PhoneNumberAttribute'] = null !== $this->phoneNumberAttribute ? $this->phoneNumberAttribute->toArray($noStream) : $this->phoneNumberAttribute;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
