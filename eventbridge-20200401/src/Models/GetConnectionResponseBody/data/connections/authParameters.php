<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\apiKeyAuthParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\basicAuthParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters;
use AlibabaCloud\Tea\Model;

class authParameters extends Model
{
    /**
     * @description The information about API key authentication.
     *
     * @var apiKeyAuthParameters
     */
    public $apiKeyAuthParameters;

    /**
     * @description The authentication method. Valid values:
     *
     *   BASIC_AUTH: basic authentication.
     *   API_KEY_AUTH: API key authentication.
     *   OAUTH_AUTH: OAuth authentication.
     *
     * @example BASIC_AUTH
     *
     * @var string
     */
    public $authorizationType;

    /**
     * @description The information about basic authentication.
     *
     * @var basicAuthParameters
     */
    public $basicAuthParameters;

    /**
     * @description The information about OAuth authentication.
     *
     * @var OAuthParameters
     */
    public $OAuthParameters;
    protected $_name = [
        'apiKeyAuthParameters' => 'ApiKeyAuthParameters',
        'authorizationType'    => 'AuthorizationType',
        'basicAuthParameters'  => 'BasicAuthParameters',
        'OAuthParameters'      => 'OAuthParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKeyAuthParameters) {
            $res['ApiKeyAuthParameters'] = null !== $this->apiKeyAuthParameters ? $this->apiKeyAuthParameters->toMap() : null;
        }
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }
        if (null !== $this->basicAuthParameters) {
            $res['BasicAuthParameters'] = null !== $this->basicAuthParameters ? $this->basicAuthParameters->toMap() : null;
        }
        if (null !== $this->OAuthParameters) {
            $res['OAuthParameters'] = null !== $this->OAuthParameters ? $this->OAuthParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKeyAuthParameters'])) {
            $model->apiKeyAuthParameters = apiKeyAuthParameters::fromMap($map['ApiKeyAuthParameters']);
        }
        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }
        if (isset($map['BasicAuthParameters'])) {
            $model->basicAuthParameters = basicAuthParameters::fromMap($map['BasicAuthParameters']);
        }
        if (isset($map['OAuthParameters'])) {
            $model->OAuthParameters = OAuthParameters::fromMap($map['OAuthParameters']);
        }

        return $model;
    }
}
