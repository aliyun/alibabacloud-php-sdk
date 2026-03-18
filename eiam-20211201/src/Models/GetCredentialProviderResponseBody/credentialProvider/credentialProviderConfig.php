<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialProviderResponseBody\credentialProvider;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialProviderResponseBody\credentialProvider\credentialProviderConfig\jwtProviderConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialProviderResponseBody\credentialProvider\credentialProviderConfig\OAuthProviderConfig;

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

    /**
     * @var string[]
     */
    public $providerCredentialIds;
    protected $_name = [
        'jwtProviderConfig' => 'JwtProviderConfig',
        'OAuthProviderConfig' => 'OAuthProviderConfig',
        'providerCredentialIds' => 'ProviderCredentialIds',
    ];

    public function validate()
    {
        if (null !== $this->jwtProviderConfig) {
            $this->jwtProviderConfig->validate();
        }
        if (null !== $this->OAuthProviderConfig) {
            $this->OAuthProviderConfig->validate();
        }
        if (\is_array($this->providerCredentialIds)) {
            Model::validateArray($this->providerCredentialIds);
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

        if (null !== $this->providerCredentialIds) {
            if (\is_array($this->providerCredentialIds)) {
                $res['ProviderCredentialIds'] = [];
                $n1 = 0;
                foreach ($this->providerCredentialIds as $item1) {
                    $res['ProviderCredentialIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ProviderCredentialIds'])) {
            if (!empty($map['ProviderCredentialIds'])) {
                $model->providerCredentialIds = [];
                $n1 = 0;
                foreach ($map['ProviderCredentialIds'] as $item1) {
                    $model->providerCredentialIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
