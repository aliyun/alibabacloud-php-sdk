<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationClientSecretResponseBody\applicationClientSecret;

class ObtainApplicationClientSecretResponseBody extends Model
{
    /**
     * @var applicationClientSecret
     */
    public $applicationClientSecret;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationClientSecret' => 'ApplicationClientSecret',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationClientSecret) {
            $this->applicationClientSecret->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationClientSecret) {
            $res['ApplicationClientSecret'] = null !== $this->applicationClientSecret ? $this->applicationClientSecret->toArray($noStream) : $this->applicationClientSecret;
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
        if (isset($map['ApplicationClientSecret'])) {
            $model->applicationClientSecret = applicationClientSecret::fromMap($map['ApplicationClientSecret']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
