<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetExternalSAMLIdentityProviderResponseBody\SAMLIdentityProviderConfiguration;
use AlibabaCloud\Tea\Model;

class GetExternalSAMLIdentityProviderResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 96D1E5FF-0301-5636-8D33-071E033CFB82
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The configurations of the IdP.
     *
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
     * @return GetExternalSAMLIdentityProviderResponseBody
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
