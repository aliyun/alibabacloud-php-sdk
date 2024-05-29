<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest\callbackProvisioningConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest\scimProvisioningConfig;
use AlibabaCloud\Tea\Model;

class SetApplicationProvisioningConfigRequest extends Model
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
     * @description The configuration of event callback synchronization. This parameter is required when the ProvisionProtocolType parameter is set to idaas_callback.
     *
     * @var callbackProvisioningConfig
     */
    public $callbackProvisioningConfig;

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
     * @description Specifies whether to synchronize the password in IDaaS user event callbacks. Valid values:
     *
     *   true: synchronize the password.
     *   false: do not synchronize the password.
     *
     * @example true
     *
     * @var bool
     */
    public $provisionPassword;

    /**
     * @description The synchronization protocol type of the application. Valid values:
     *
     *   idaas_callback: custom event callback protocol of IDaaS.
     *   scim2: System for Cross-domain Identity Management (SCIM) protocol.
     *
     * This parameter is required.
     * @example idaas_callback
     *
     * @var string
     */
    public $provisionProtocolType;

    /**
     * @description The configuration of SCIM-based IDaaS synchronization. This parameter is required when the ProvisionProtocolType parameter is set to scim2.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->callbackProvisioningConfig) {
            $res['CallbackProvisioningConfig'] = null !== $this->callbackProvisioningConfig ? $this->callbackProvisioningConfig->toMap() : null;
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
            $res['ScimProvisioningConfig'] = null !== $this->scimProvisioningConfig ? $this->scimProvisioningConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetApplicationProvisioningConfigRequest
     */
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
