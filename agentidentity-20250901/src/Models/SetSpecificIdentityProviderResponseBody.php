<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSpecificIdentityProviderResponseBody\specificIdentityProviderConfiguration;

class SetSpecificIdentityProviderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var specificIdentityProviderConfiguration
     */
    public $specificIdentityProviderConfiguration;
    protected $_name = [
        'requestId' => 'RequestId',
        'specificIdentityProviderConfiguration' => 'SpecificIdentityProviderConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->specificIdentityProviderConfiguration) {
            $this->specificIdentityProviderConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->specificIdentityProviderConfiguration) {
            $res['SpecificIdentityProviderConfiguration'] = null !== $this->specificIdentityProviderConfiguration ? $this->specificIdentityProviderConfiguration->toArray($noStream) : $this->specificIdentityProviderConfiguration;
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

        if (isset($map['SpecificIdentityProviderConfiguration'])) {
            $model->specificIdentityProviderConfiguration = specificIdentityProviderConfiguration::fromMap($map['SpecificIdentityProviderConfiguration']);
        }

        return $model;
    }
}
