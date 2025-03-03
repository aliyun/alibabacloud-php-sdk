<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\apiKeyAuthParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\basicAuthParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters;

class authParameters extends Model
{
    /**
     * @var apiKeyAuthParameters
     */
    public $apiKeyAuthParameters;
    /**
     * @var string
     */
    public $authorizationType;
    /**
     * @var basicAuthParameters
     */
    public $basicAuthParameters;
    /**
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
        if (null !== $this->apiKeyAuthParameters) {
            $this->apiKeyAuthParameters->validate();
        }
        if (null !== $this->basicAuthParameters) {
            $this->basicAuthParameters->validate();
        }
        if (null !== $this->OAuthParameters) {
            $this->OAuthParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyAuthParameters) {
            $res['ApiKeyAuthParameters'] = null !== $this->apiKeyAuthParameters ? $this->apiKeyAuthParameters->toArray($noStream) : $this->apiKeyAuthParameters;
        }

        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }

        if (null !== $this->basicAuthParameters) {
            $res['BasicAuthParameters'] = null !== $this->basicAuthParameters ? $this->basicAuthParameters->toArray($noStream) : $this->basicAuthParameters;
        }

        if (null !== $this->OAuthParameters) {
            $res['OAuthParameters'] = null !== $this->OAuthParameters ? $this->OAuthParameters->toArray($noStream) : $this->OAuthParameters;
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
