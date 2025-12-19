<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderResponseBody\identityProvider;

class GetIdentityProviderResponseBody extends Model
{
    /**
     * @var identityProvider
     */
    public $identityProvider;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'identityProvider' => 'IdentityProvider',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->identityProvider) {
            $this->identityProvider->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProvider) {
            $res['IdentityProvider'] = null !== $this->identityProvider ? $this->identityProvider->toArray($noStream) : $this->identityProvider;
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
        if (isset($map['IdentityProvider'])) {
            $model->identityProvider = identityProvider::fromMap($map['IdentityProvider']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
