<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationTokenResponseBody\applicationToken;

class ObtainApplicationTokenResponseBody extends Model
{
    /**
     * @var applicationToken
     */
    public $applicationToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationToken' => 'ApplicationToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationToken) {
            $this->applicationToken->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationToken) {
            $res['ApplicationToken'] = null !== $this->applicationToken ? $this->applicationToken->toArray($noStream) : $this->applicationToken;
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
        if (isset($map['ApplicationToken'])) {
            $model->applicationToken = applicationToken::fromMap($map['ApplicationToken']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
