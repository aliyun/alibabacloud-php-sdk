<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetOAuth2CredentialProviderResponseBody\OAuth2CredentialProvider;

class GetOAuth2CredentialProviderResponseBody extends Model
{
    /**
     * @var OAuth2CredentialProvider
     */
    public $OAuth2CredentialProvider;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'OAuth2CredentialProvider' => 'OAuth2CredentialProvider',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->OAuth2CredentialProvider) {
            $this->OAuth2CredentialProvider->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OAuth2CredentialProvider) {
            $res['OAuth2CredentialProvider'] = null !== $this->OAuth2CredentialProvider ? $this->OAuth2CredentialProvider->toArray($noStream) : $this->OAuth2CredentialProvider;
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
        if (isset($map['OAuth2CredentialProvider'])) {
            $model->OAuth2CredentialProvider = OAuth2CredentialProvider::fromMap($map['OAuth2CredentialProvider']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
