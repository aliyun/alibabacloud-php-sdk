<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCredentialProviderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCredentialProviderRequest\credentialProviderConfig\jwtProviderConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCredentialProviderRequest\credentialProviderConfig\OAuthProviderConfig;

class credentialProviderConfig extends Model
{
    /**
     * @var jwtProviderConfig
     */
    public $jwtProviderConfig;

    /**
     * @var OAuthProviderConfig
     */
    public $OAuthProviderConfig;
    protected $_name = [
        'jwtProviderConfig' => 'JwtProviderConfig',
        'OAuthProviderConfig' => 'OAuthProviderConfig',
    ];

    public function validate()
    {
        if (null !== $this->jwtProviderConfig) {
            $this->jwtProviderConfig->validate();
        }
        if (null !== $this->OAuthProviderConfig) {
            $this->OAuthProviderConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jwtProviderConfig) {
            $res['JwtProviderConfig'] = null !== $this->jwtProviderConfig ? $this->jwtProviderConfig->toArray($noStream) : $this->jwtProviderConfig;
        }

        if (null !== $this->OAuthProviderConfig) {
            $res['OAuthProviderConfig'] = null !== $this->OAuthProviderConfig ? $this->OAuthProviderConfig->toArray($noStream) : $this->OAuthProviderConfig;
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
        if (isset($map['JwtProviderConfig'])) {
            $model->jwtProviderConfig = jwtProviderConfig::fromMap($map['JwtProviderConfig']);
        }

        if (isset($map['OAuthProviderConfig'])) {
            $model->OAuthProviderConfig = OAuthProviderConfig::fromMap($map['OAuthProviderConfig']);
        }

        return $model;
    }
}
