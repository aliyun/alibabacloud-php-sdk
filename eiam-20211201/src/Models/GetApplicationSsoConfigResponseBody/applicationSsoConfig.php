<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\oidcSsoConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\protocolEndpointDomain;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\samlSsoConfig;
use AlibabaCloud\Tea\Model;

class applicationSsoConfig extends Model
{
    /**
     * @description The initial SSO method. Valid values:
     *
     *   only_app_init_sso: Only application-initiated SSO is allowed. This method is selected by default when the SSO protocol of the application is an OIDC protocol. If this method is selected when the SSO protocol of the application is SAML, the InitLoginUrl parameter is required.
     *   idaas_or_app_init_sso: IDaaS-initiated SSO and application-initiated SSO are allowed. This method is selected by default when the SSO protocol of the application is SAML. If this method is selected when the SSO protocol of the application is an OIDC protocol, the InitLoginUrl parameter is required.
     *
     * @example only_app_init_sso
     *
     * @var string
     */
    public $initLoginType;

    /**
     * @description The initial webhook URL of SSO. This parameter is required when the SSO protocol of the application is an OIDC protocol and the InitLoginType parameters is set to idaas_or_app_init_sso or when the SSO protocol of the application is SAML and the InitLoginType parameter is set to only_app_init_sso.
     *
     * @example http://127.0.0.1:8000/start_login?enterprise_code=ABCDEF
     *
     * @var string
     */
    public $initLoginUrl;

    /**
     * @description The Open ID Connect (OIDC)-based SSO configuration attributes of the application. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @var oidcSsoConfig
     */
    public $oidcSsoConfig;

    /**
     * @description The configuration of the metadata endpoint provided by the application.
     *
     * @var protocolEndpointDomain
     */
    public $protocolEndpointDomain;

    /**
     * @description The Security Assertion Markup Language (SAML)-based SSO configuration attributes of the application. This parameter is returned only when the SSO protocol of the application is SAML 2.0.
     *
     * @var samlSsoConfig
     */
    public $samlSsoConfig;

    /**
     * @description The SSO feature status of the application. Valid values:
     *
     *   enabled: The feature is enabled.
     *   disabled: The feature is disabled.
     *
     * @example enabled
     *
     * @var string
     */
    public $ssoStatus;
    protected $_name = [
        'initLoginType'          => 'InitLoginType',
        'initLoginUrl'           => 'InitLoginUrl',
        'oidcSsoConfig'          => 'OidcSsoConfig',
        'protocolEndpointDomain' => 'ProtocolEndpointDomain',
        'samlSsoConfig'          => 'SamlSsoConfig',
        'ssoStatus'              => 'SsoStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initLoginType) {
            $res['InitLoginType'] = $this->initLoginType;
        }
        if (null !== $this->initLoginUrl) {
            $res['InitLoginUrl'] = $this->initLoginUrl;
        }
        if (null !== $this->oidcSsoConfig) {
            $res['OidcSsoConfig'] = null !== $this->oidcSsoConfig ? $this->oidcSsoConfig->toMap() : null;
        }
        if (null !== $this->protocolEndpointDomain) {
            $res['ProtocolEndpointDomain'] = null !== $this->protocolEndpointDomain ? $this->protocolEndpointDomain->toMap() : null;
        }
        if (null !== $this->samlSsoConfig) {
            $res['SamlSsoConfig'] = null !== $this->samlSsoConfig ? $this->samlSsoConfig->toMap() : null;
        }
        if (null !== $this->ssoStatus) {
            $res['SsoStatus'] = $this->ssoStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationSsoConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InitLoginType'])) {
            $model->initLoginType = $map['InitLoginType'];
        }
        if (isset($map['InitLoginUrl'])) {
            $model->initLoginUrl = $map['InitLoginUrl'];
        }
        if (isset($map['OidcSsoConfig'])) {
            $model->oidcSsoConfig = oidcSsoConfig::fromMap($map['OidcSsoConfig']);
        }
        if (isset($map['ProtocolEndpointDomain'])) {
            $model->protocolEndpointDomain = protocolEndpointDomain::fromMap($map['ProtocolEndpointDomain']);
        }
        if (isset($map['SamlSsoConfig'])) {
            $model->samlSsoConfig = samlSsoConfig::fromMap($map['SamlSsoConfig']);
        }
        if (isset($map['SsoStatus'])) {
            $model->ssoStatus = $map['SsoStatus'];
        }

        return $model;
    }
}
