<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSAMLIdentityProviderResponseBody\SSOIdentityProviderConfiguration;

class SetSAMLIdentityProviderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SSOIdentityProviderConfiguration
     */
    public $SSOIdentityProviderConfiguration;
    protected $_name = [
        'requestId' => 'RequestId',
        'SSOIdentityProviderConfiguration' => 'SSOIdentityProviderConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->SSOIdentityProviderConfiguration) {
            $this->SSOIdentityProviderConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SSOIdentityProviderConfiguration) {
            $res['SSOIdentityProviderConfiguration'] = null !== $this->SSOIdentityProviderConfiguration ? $this->SSOIdentityProviderConfiguration->toArray($noStream) : $this->SSOIdentityProviderConfiguration;
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

        if (isset($map['SSOIdentityProviderConfiguration'])) {
            $model->SSOIdentityProviderConfiguration = SSOIdentityProviderConfiguration::fromMap($map['SSOIdentityProviderConfiguration']);
        }

        return $model;
    }
}
