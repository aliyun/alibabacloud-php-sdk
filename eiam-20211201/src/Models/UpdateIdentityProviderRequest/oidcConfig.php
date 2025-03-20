<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest;

use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\oidcConfig\authnParam;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\oidcConfig\endpointConfig;
use AlibabaCloud\Tea\Model;

class oidcConfig extends Model
{
    /**
     * @description OIDC客户端认证配置。
     *
     * @var authnParam
     */
    public $authnParam;

    /**
     * @description OIDC 端点配置。
     *
     * @var endpointConfig
     */
    public $endpointConfig;

    /**
     * @description OIDC标准参数，如profile、email等
     *
     * @example openid
     *
     * @var string[]
     */
    public $grantScopes;

    /**
     * @description OIDC授权类型。
     *
     * @example authorization_code
     *
     * @var string
     */
    public $grantType;

    /**
     * @description 支持的PKCE算法类型。
     *
     * @example S256
     *
     * @var string
     */
    public $pkceChallengeMethod;

    /**
     * @description AuthorizationCode授权模式下是否使用PKCE。
     *
     * @example true
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authnParam) {
            $res['AuthnParam'] = null !== $this->authnParam ? $this->authnParam->toMap() : null;
        }
        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = null !== $this->endpointConfig ? $this->endpointConfig->toMap() : null;
        }
        if (null !== $this->grantScopes) {
            $res['GrantScopes'] = $this->grantScopes;
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

    /**
     * @param array $map
     *
     * @return oidcConfig
     */
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
                $model->grantScopes = $map['GrantScopes'];
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
