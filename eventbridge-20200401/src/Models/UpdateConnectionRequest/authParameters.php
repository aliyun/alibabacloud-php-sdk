<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters\apiKeyAuthParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters\basicAuthParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters\OAuthParameters;
use AlibabaCloud\Tea\Model;

class authParameters extends Model
{
    /**
     * @description The parameters configured for API key authentication.
     *
     * @var apiKeyAuthParameters
     */
    public $apiKeyAuthParameters;

    /**
     * @description The authentication type. Valid values:
     *
     *   BASIC: basic authentication. Basic authentication is a simple authentication scheme built into the HTTP protocol. When you use the HTTP protocol for communications, the authentication method that the HTTP server uses to authenticate user identities on the client is defined in the protocol. The request header is in the Authorization: Basic Base64-encoded string (`Username:Password`) format. If you use this authentication method, you must configure Username and Password.
     *   API_KEY_AUTH: API key authentication. The request header is in the Token: Token value format. If you use this authentication method, you must configure ApiKeyName and ApiKeyValue.
     *   OAUTH_AUTH: OAuth authentication. OAuth2.0 is an authentication mechanism. In normal cases, a system that does not use OAuth2.0 can access the resources of the server from the client. To ensure access security, access tokens are used to authenticate users in OAuth 2.0. The client must use an access token to access protected resources. This way, OAuth 2.0 protects resources from being accessed from malicious clients and improves system security. If you use this authentication method, you must configure AuthorizationEndpoint, OAuthHttpParameters, and HttpMethod.
     *
     * @example BASIC_AUTH
     *
     * @var string
     */
    public $authorizationType;

    /**
     * @description The parameters that are configured for basic authentication.
     *
     * @var basicAuthParameters
     */
    public $basicAuthParameters;

    /**
     * @description The parameters that are configured for OAuth authentication.
     *
     * @var OAuthParameters
     */
    public $OAuthParameters;
    protected $_name = [
        'apiKeyAuthParameters' => 'ApiKeyAuthParameters',
        'authorizationType' => 'AuthorizationType',
        'basicAuthParameters' => 'BasicAuthParameters',
        'OAuthParameters' => 'OAuthParameters',
    ];

    public function validate() {}

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
