<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class CustomOAuth2ProviderConfig extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var OAuth2Discovery
     */
    public $OAuth2Discovery;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'OAuth2Discovery' => 'OAuth2Discovery',
    ];

    public function validate()
    {
        if (null !== $this->OAuth2Discovery) {
            $this->OAuth2Discovery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }

        if (null !== $this->OAuth2Discovery) {
            $res['OAuth2Discovery'] = null !== $this->OAuth2Discovery ? $this->OAuth2Discovery->toArray($noStream) : $this->OAuth2Discovery;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        if (isset($map['OAuth2Discovery'])) {
            $model->OAuth2Discovery = OAuth2Discovery::fromMap($map['OAuth2Discovery']);
        }

        return $model;
    }
}
