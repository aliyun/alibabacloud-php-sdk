<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateClientSecretResponseBody\clientSecret;

class CreateClientSecretResponseBody extends Model
{
    /**
     * @var clientSecret
     */
    public $clientSecret;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientSecret' => 'ClientSecret',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clientSecret) {
            $this->clientSecret->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = null !== $this->clientSecret ? $this->clientSecret->toArray($noStream) : $this->clientSecret;
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
        if (isset($map['ClientSecret'])) {
            $model->clientSecret = clientSecret::fromMap($map['ClientSecret']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
