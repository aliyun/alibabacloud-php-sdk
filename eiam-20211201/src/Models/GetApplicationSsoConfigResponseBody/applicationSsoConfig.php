<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\oidcSsoConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\protocolEndpointDomain;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\samlSsoConfig;

class applicationSsoConfig extends Model
{
    /**
     * @var string
     */
    public $initLoginType;

    /**
     * @var string
     */
    public $initLoginUrl;

    /**
     * @var oidcSsoConfig
     */
    public $oidcSsoConfig;

    /**
     * @var protocolEndpointDomain
     */
    public $protocolEndpointDomain;

    /**
     * @var samlSsoConfig
     */
    public $samlSsoConfig;

    /**
     * @var string
     */
    public $ssoStatus;
    protected $_name = [
        'initLoginType' => 'InitLoginType',
        'initLoginUrl' => 'InitLoginUrl',
        'oidcSsoConfig' => 'OidcSsoConfig',
        'protocolEndpointDomain' => 'ProtocolEndpointDomain',
        'samlSsoConfig' => 'SamlSsoConfig',
        'ssoStatus' => 'SsoStatus',
    ];

    public function validate()
    {
        if (null !== $this->oidcSsoConfig) {
            $this->oidcSsoConfig->validate();
        }
        if (null !== $this->protocolEndpointDomain) {
            $this->protocolEndpointDomain->validate();
        }
        if (null !== $this->samlSsoConfig) {
            $this->samlSsoConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->initLoginType) {
            $res['InitLoginType'] = $this->initLoginType;
        }

        if (null !== $this->initLoginUrl) {
            $res['InitLoginUrl'] = $this->initLoginUrl;
        }

        if (null !== $this->oidcSsoConfig) {
            $res['OidcSsoConfig'] = null !== $this->oidcSsoConfig ? $this->oidcSsoConfig->toArray($noStream) : $this->oidcSsoConfig;
        }

        if (null !== $this->protocolEndpointDomain) {
            $res['ProtocolEndpointDomain'] = null !== $this->protocolEndpointDomain ? $this->protocolEndpointDomain->toArray($noStream) : $this->protocolEndpointDomain;
        }

        if (null !== $this->samlSsoConfig) {
            $res['SamlSsoConfig'] = null !== $this->samlSsoConfig ? $this->samlSsoConfig->toArray($noStream) : $this->samlSsoConfig;
        }

        if (null !== $this->ssoStatus) {
            $res['SsoStatus'] = $this->ssoStatus;
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
