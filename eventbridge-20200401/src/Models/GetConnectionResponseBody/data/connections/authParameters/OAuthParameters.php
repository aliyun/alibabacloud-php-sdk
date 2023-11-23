<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\clientParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\OAuthHttpParameters;
use AlibabaCloud\Tea\Model;

class OAuthParameters extends Model
{
    /**
     * @description The endpoint that is used to obtain the OAuth token.
     *
     * @example http://localhost:8080/oauth/token
     *
     * @var string
     */
    public $authorizationEndpoint;

    /**
     * @description The information about the client.
     *
     * @var clientParameters
     */
    public $clientParameters;

    /**
     * @description The HTTP request method. Valid values:
     *
     *   GET
     *   POST
     *   HEAD
     *
     * @example POST
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description The request parameters of OAuth authentication.
     *
     * @var OAuthHttpParameters
     */
    public $OAuthHttpParameters;
    protected $_name = [
        'authorizationEndpoint' => 'AuthorizationEndpoint',
        'clientParameters'      => 'ClientParameters',
        'httpMethod'            => 'HttpMethod',
        'OAuthHttpParameters'   => 'OAuthHttpParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationEndpoint) {
            $res['AuthorizationEndpoint'] = $this->authorizationEndpoint;
        }
        if (null !== $this->clientParameters) {
            $res['ClientParameters'] = null !== $this->clientParameters ? $this->clientParameters->toMap() : null;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->OAuthHttpParameters) {
            $res['OAuthHttpParameters'] = null !== $this->OAuthHttpParameters ? $this->OAuthHttpParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OAuthParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationEndpoint'])) {
            $model->authorizationEndpoint = $map['AuthorizationEndpoint'];
        }
        if (isset($map['ClientParameters'])) {
            $model->clientParameters = clientParameters::fromMap($map['ClientParameters']);
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['OAuthHttpParameters'])) {
            $model->OAuthHttpParameters = OAuthHttpParameters::fromMap($map['OAuthHttpParameters']);
        }

        return $model;
    }
}
