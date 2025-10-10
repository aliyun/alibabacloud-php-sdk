<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class DescribeAppCallbackSecretKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $callbackSecretKey;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callbackSecretKey' => 'CallbackSecretKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackSecretKey) {
            $res['CallbackSecretKey'] = $this->callbackSecretKey;
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
        if (isset($map['CallbackSecretKey'])) {
            $model->callbackSecretKey = $map['CallbackSecretKey'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
