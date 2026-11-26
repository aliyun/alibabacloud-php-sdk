<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetSecurityInfoResponseBody\securityEmail;

class GetSecurityInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEmail
     */
    public $securityEmail;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEmail' => 'SecurityEmail',
    ];

    public function validate()
    {
        if (null !== $this->securityEmail) {
            $this->securityEmail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEmail) {
            $res['SecurityEmail'] = null !== $this->securityEmail ? $this->securityEmail->toArray($noStream) : $this->securityEmail;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityEmail'])) {
            $model->securityEmail = securityEmail::fromMap($map['SecurityEmail']);
        }

        return $model;
    }
}
