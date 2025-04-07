<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;

class GetUserPhoneResponseBody extends Model
{
    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'phone' => 'Phone',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
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
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
