<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateAPIKeyCredentialProviderResponseBody\APIKeyCredentialProvider;

class CreateAPIKeyCredentialProviderResponseBody extends Model
{
    /**
     * @var APIKeyCredentialProvider
     */
    public $APIKeyCredentialProvider;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'APIKeyCredentialProvider' => 'APIKeyCredentialProvider',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->APIKeyCredentialProvider) {
            $this->APIKeyCredentialProvider->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APIKeyCredentialProvider) {
            $res['APIKeyCredentialProvider'] = null !== $this->APIKeyCredentialProvider ? $this->APIKeyCredentialProvider->toArray($noStream) : $this->APIKeyCredentialProvider;
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
        if (isset($map['APIKeyCredentialProvider'])) {
            $model->APIKeyCredentialProvider = APIKeyCredentialProvider::fromMap($map['APIKeyCredentialProvider']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
