<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetExternalSAMLIdentityProviderResponseBody\SAMLIdentityProviderConfiguration;
use AlibabaCloud\Tea\Model;

class SetExternalSAMLIdentityProviderResponseBody extends Model
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
        'requestId'                         => 'RequestId',
        'SAMLIdentityProviderConfiguration' => 'SAMLIdentityProviderConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SAMLIdentityProviderConfiguration) {
            $res['SAMLIdentityProviderConfiguration'] = null !== $this->SAMLIdentityProviderConfiguration ? $this->SAMLIdentityProviderConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetExternalSAMLIdentityProviderResponseBody
     */
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
