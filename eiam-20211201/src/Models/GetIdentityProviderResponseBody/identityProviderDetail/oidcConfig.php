<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\oidcConfig\authnParam;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\oidcConfig\endpointConfig;

class oidcConfig extends Model
{
    /**
     * @var authnParam
     */
    public $authnParam;

    /**
     * @var endpointConfig
     */
    public $endpointConfig;

    /**
     * @var string[]
     */
    public $grantScopes;

    /**
     * @var string
     */
    public $grantType;

    /**
     * @var string
     */
    public $pkceChallengeMethod;

    /**
     * @var bool
     */
    public $pkceRequired;
    protected $_name = [
        'authnParam' => 'AuthnParam',
        'endpointConfig' => 'EndpointConfig',
        'grantScopes' => 'GrantScopes',
        'grantType' => 'GrantType',
        'pkceChallengeMethod' => 'PkceChallengeMethod',
        'pkceRequired' => 'PkceRequired',
    ];

    public function validate()
    {
        if (null !== $this->authnParam) {
            $this->authnParam->validate();
        }
        if (null !== $this->endpointConfig) {
            $this->endpointConfig->validate();
        }
        if (\is_array($this->grantScopes)) {
            Model::validateArray($this->grantScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authnParam) {
            $res['AuthnParam'] = null !== $this->authnParam ? $this->authnParam->toArray($noStream) : $this->authnParam;
        }

        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = null !== $this->endpointConfig ? $this->endpointConfig->toArray($noStream) : $this->endpointConfig;
        }

        if (null !== $this->grantScopes) {
            if (\is_array($this->grantScopes)) {
                $res['GrantScopes'] = [];
                $n1 = 0;
                foreach ($this->grantScopes as $item1) {
                    $res['GrantScopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }

        if (null !== $this->pkceChallengeMethod) {
            $res['PkceChallengeMethod'] = $this->pkceChallengeMethod;
        }

        if (null !== $this->pkceRequired) {
            $res['PkceRequired'] = $this->pkceRequired;
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
        if (isset($map['AuthnParam'])) {
            $model->authnParam = authnParam::fromMap($map['AuthnParam']);
        }

        if (isset($map['EndpointConfig'])) {
            $model->endpointConfig = endpointConfig::fromMap($map['EndpointConfig']);
        }

        if (isset($map['GrantScopes'])) {
            if (!empty($map['GrantScopes'])) {
                $model->grantScopes = [];
                $n1 = 0;
                foreach ($map['GrantScopes'] as $item1) {
                    $model->grantScopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }

        if (isset($map['PkceChallengeMethod'])) {
            $model->pkceChallengeMethod = $map['PkceChallengeMethod'];
        }

        if (isset($map['PkceRequired'])) {
            $model->pkceRequired = $map['PkceRequired'];
        }

        return $model;
    }
}
