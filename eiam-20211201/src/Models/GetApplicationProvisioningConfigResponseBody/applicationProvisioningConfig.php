<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\callbackProvisioningConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\scimProvisioningConfig;
use AlibabaCloud\Tea\Model;

class applicationProvisioningConfig extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The configuration of the custom event callback protocol of IDaaS.
     *
     * @var callbackProvisioningConfig
     */
    public $callbackProvisioningConfig;

    /**
     * @description Client-side rendering, Valid values:
     * - template：template mode.
     * @example standard
     *
     * @var string
     */
    public $configOperateMode;

    /**
     * @description The ID of the instance.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The public key endpoint for signature verification of the synchronization callback information.
     *
     * @example https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk267xxxxx/app_mkv7rgt4d7i4u7zqtzev2mxxxx/provisioning/jwks
     *
     * @var string
     */
    public $provisionJwksEndpoint;

    /**
     * @description Indicates whether the password is synchronized in IDaaS user event callbacks. Valid values:
     *
     *   true: The password is synchronized.
     *   false: The password is not synchronized.
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
     * @example idaas_callback
     *
     * @var string
     */
    public $provisionProtocolType;

    /**
     * @description The configuration of SCIM-based IDaaS synchronization.
     *
     * @var scimProvisioningConfig
     */
    public $scimProvisioningConfig;

    /**
     * @description The status of the IDaaS account synchronization feature. Valid values:
     *
     *   enabled: The feature is enabled.
     *   disabled: The feature is disabled.
     *
     * @example enabled
     *
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
            $res['ScimProvisioningConfig'] = null !== $this->scimProvisioningConfig ? $this->scimProvisioningConfig->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationProvisioningConfig
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
