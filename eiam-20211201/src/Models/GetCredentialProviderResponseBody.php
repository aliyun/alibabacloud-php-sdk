<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialProviderResponseBody\credentialProvider;

class GetCredentialProviderResponseBody extends Model
{
    /**
     * @var credentialProvider
     */
    public $credentialProvider;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'credentialProvider' => 'CredentialProvider',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->credentialProvider) {
            $this->credentialProvider->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialProvider) {
            $res['CredentialProvider'] = null !== $this->credentialProvider ? $this->credentialProvider->toArray($noStream) : $this->credentialProvider;
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
        if (isset($map['CredentialProvider'])) {
            $model->credentialProvider = credentialProvider::fromMap($map['CredentialProvider']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
