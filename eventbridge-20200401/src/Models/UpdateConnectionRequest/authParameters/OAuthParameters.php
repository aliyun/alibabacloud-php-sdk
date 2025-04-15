<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters\OAuthParameters\clientParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters\OAuthParameters\OAuthHttpParameters;

class OAuthParameters extends Model
{
    /**
     * @var string
     */
    public $authorizationEndpoint;

    /**
     * @var clientParameters
     */
    public $clientParameters;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var OAuthHttpParameters
     */
    public $OAuthHttpParameters;
    protected $_name = [
        'authorizationEndpoint' => 'AuthorizationEndpoint',
        'clientParameters' => 'ClientParameters',
        'httpMethod' => 'HttpMethod',
        'OAuthHttpParameters' => 'OAuthHttpParameters',
    ];

    public function validate()
    {
        if (null !== $this->clientParameters) {
            $this->clientParameters->validate();
        }
        if (null !== $this->OAuthHttpParameters) {
            $this->OAuthHttpParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationEndpoint) {
            $res['AuthorizationEndpoint'] = $this->authorizationEndpoint;
        }

        if (null !== $this->clientParameters) {
            $res['ClientParameters'] = null !== $this->clientParameters ? $this->clientParameters->toArray($noStream) : $this->clientParameters;
        }

        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }

        if (null !== $this->OAuthHttpParameters) {
            $res['OAuthHttpParameters'] = null !== $this->OAuthHttpParameters ? $this->OAuthHttpParameters->toArray($noStream) : $this->OAuthHttpParameters;
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
