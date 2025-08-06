<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\oidcSsoConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\samlSsoConfig;

class SetApplicationSsoConfigRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $initLoginType;

    /**
     * @var string
     */
    public $initLoginUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var oidcSsoConfig
     */
    public $oidcSsoConfig;

    /**
     * @var samlSsoConfig
     */
    public $samlSsoConfig;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'clientToken' => 'ClientToken',
        'initLoginType' => 'InitLoginType',
        'initLoginUrl' => 'InitLoginUrl',
        'instanceId' => 'InstanceId',
        'oidcSsoConfig' => 'OidcSsoConfig',
        'samlSsoConfig' => 'SamlSsoConfig',
    ];

    public function validate()
    {
        if (null !== $this->oidcSsoConfig) {
            $this->oidcSsoConfig->validate();
        }
        if (null !== $this->samlSsoConfig) {
            $this->samlSsoConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
            $res['OidcSsoConfig'] = null !== $this->oidcSsoConfig ? $this->oidcSsoConfig->toArray($noStream) : $this->oidcSsoConfig;
        }

        if (null !== $this->samlSsoConfig) {
            $res['SamlSsoConfig'] = null !== $this->samlSsoConfig ? $this->samlSsoConfig->toArray($noStream) : $this->samlSsoConfig;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
