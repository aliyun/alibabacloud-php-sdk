<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetExternalSAMLIdentityProviderResponseBody\SAMLIdentityProviderConfiguration;

class GetExternalSAMLIdentityProviderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SAMLIdentityProviderConfiguration
     */
    public $SAMLIdentityProviderConfiguration;
    protected $_name = [
        'requestId' => 'RequestId',
        'SAMLIdentityProviderConfiguration' => 'SAMLIdentityProviderConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->SAMLIdentityProviderConfiguration) {
            $this->SAMLIdentityProviderConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SAMLIdentityProviderConfiguration) {
            $res['SAMLIdentityProviderConfiguration'] = null !== $this->SAMLIdentityProviderConfiguration ? $this->SAMLIdentityProviderConfiguration->toArray($noStream) : $this->SAMLIdentityProviderConfiguration;
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

        if (isset($map['SAMLIdentityProviderConfiguration'])) {
            $model->SAMLIdentityProviderConfiguration = SAMLIdentityProviderConfiguration::fromMap($map['SAMLIdentityProviderConfiguration']);
        }

        return $model;
    }
}
