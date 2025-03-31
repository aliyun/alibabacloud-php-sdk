<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class GetRegisterCodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $registerCode;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'registerCode' => 'RegisterCode',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registerCode) {
            $res['RegisterCode'] = $this->registerCode;
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
        if (isset($map['RegisterCode'])) {
            $model->registerCode = $map['RegisterCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
