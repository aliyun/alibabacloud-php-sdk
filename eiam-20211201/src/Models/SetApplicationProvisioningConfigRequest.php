<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest\callbackProvisioningConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest\scimProvisioningConfig;

class SetApplicationProvisioningConfigRequest extends Model
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
    public $instanceId;
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
    protected $_name = [
        'applicationId'              => 'ApplicationId',
        'callbackProvisioningConfig' => 'CallbackProvisioningConfig',
        'instanceId'                 => 'InstanceId',
        'provisionPassword'          => 'ProvisionPassword',
        'provisionProtocolType'      => 'ProvisionProtocolType',
        'scimProvisioningConfig'     => 'ScimProvisioningConfig',
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        return $model;
    }
}
