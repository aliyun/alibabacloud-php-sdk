<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\oidcSsoConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\samlSsoConfig;
use AlibabaCloud\Tea\Model;

class SetApplicationSsoConfigRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $applicationId;

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
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The Open ID Connect (OIDC)-based SSO configuration attributes of the application.
     *
     * @var oidcSsoConfig
     */
    public $oidcSsoConfig;

    /**
     * @description The Security Assertion Markup Language (SAML)-based SSO configuration attributes of the application.
     *
     * @var samlSsoConfig
     */
    public $samlSsoConfig;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'initLoginType' => 'InitLoginType',
        'initLoginUrl'  => 'InitLoginUrl',
        'instanceId'    => 'InstanceId',
        'oidcSsoConfig' => 'OidcSsoConfig',
        'samlSsoConfig' => 'SamlSsoConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->initLoginType) {
            $res['InitLoginType'] = $this->initLoginType;
        }
        if (null !== $this->initLoginUrl) {
            $res['InitLoginUrl'] = $this->initLoginUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->oidcSsoConfig) {
            $res['OidcSsoConfig'] = null !== $this->oidcSsoConfig ? $this->oidcSsoConfig->toMap() : null;
        }
        if (null !== $this->samlSsoConfig) {
            $res['SamlSsoConfig'] = null !== $this->samlSsoConfig ? $this->samlSsoConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetApplicationSsoConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['InitLoginType'])) {
            $model->initLoginType = $map['InitLoginType'];
        }
        if (isset($map['InitLoginUrl'])) {
            $model->initLoginUrl = $map['InitLoginUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OidcSsoConfig'])) {
            $model->oidcSsoConfig = oidcSsoConfig::fromMap($map['OidcSsoConfig']);
        }
        if (isset($map['SamlSsoConfig'])) {
            $model->samlSsoConfig = samlSsoConfig::fromMap($map['SamlSsoConfig']);
        }

        return $model;
    }
}
