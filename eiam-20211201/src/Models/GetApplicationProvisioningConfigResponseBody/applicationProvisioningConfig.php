<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\callbackProvisioningConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\scimProvisioningConfig;

class applicationProvisioningConfig extends Model
{
    /**
     * @var string
     */
    public $applicationId;
    /**
     * @var callbackProvisioningConfig
     */
    public $callbackProvisioningConfig;
    /**
     * @var string
     */
    public $configOperateMode;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $provisionJwksEndpoint;
    /**
     * @var bool
     */
    public $provisionPassword;
    /**
     * @var string
     */
    public $provisionProtocolType;
    /**
     * @var scimProvisioningConfig
     */
    public $scimProvisioningConfig;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationId'              => 'ApplicationId',
        'callbackProvisioningConfig' => 'CallbackProvisioningConfig',
        'configOperateMode'          => 'ConfigOperateMode',
        'instanceId'                 => 'InstanceId',
        'provisionJwksEndpoint'      => 'ProvisionJwksEndpoint',
        'provisionPassword'          => 'ProvisionPassword',
        'provisionProtocolType'      => 'ProvisionProtocolType',
        'scimProvisioningConfig'     => 'ScimProvisioningConfig',
        'status'                     => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->callbackProvisioningConfig) {
            $this->callbackProvisioningConfig->validate();
        }
        if (null !== $this->scimProvisioningConfig) {
            $this->scimProvisioningConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->callbackProvisioningConfig) {
            $res['CallbackProvisioningConfig'] = null !== $this->callbackProvisioningConfig ? $this->callbackProvisioningConfig->toArray($noStream) : $this->callbackProvisioningConfig;
        }

        if (null !== $this->configOperateMode) {
            $res['ConfigOperateMode'] = $this->configOperateMode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->provisionJwksEndpoint) {
            $res['ProvisionJwksEndpoint'] = $this->provisionJwksEndpoint;
        }

        if (null !== $this->provisionPassword) {
            $res['ProvisionPassword'] = $this->provisionPassword;
        }

        if (null !== $this->provisionProtocolType) {
            $res['ProvisionProtocolType'] = $this->provisionProtocolType;
        }

        if (null !== $this->scimProvisioningConfig) {
            $res['ScimProvisioningConfig'] = null !== $this->scimProvisioningConfig ? $this->scimProvisioningConfig->toArray($noStream) : $this->scimProvisioningConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['CallbackProvisioningConfig'])) {
            $model->callbackProvisioningConfig = callbackProvisioningConfig::fromMap($map['CallbackProvisioningConfig']);
        }

        if (isset($map['ConfigOperateMode'])) {
            $model->configOperateMode = $map['ConfigOperateMode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProvisionJwksEndpoint'])) {
            $model->provisionJwksEndpoint = $map['ProvisionJwksEndpoint'];
        }

        if (isset($map['ProvisionPassword'])) {
            $model->provisionPassword = $map['ProvisionPassword'];
        }

        if (isset($map['ProvisionProtocolType'])) {
            $model->provisionProtocolType = $map['ProvisionProtocolType'];
        }

        if (isset($map['ScimProvisioningConfig'])) {
            $model->scimProvisioningConfig = scimProvisioningConfig::fromMap($map['ScimProvisioningConfig']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
