<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\appUninstallSchemaConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\deviceRegistrationSchemaConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\dlpSendSchemaConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\domainBlacklistSchemaConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\domainWhitelistSchemaConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\endpointHardeningSchemaConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\peripheralBlockSchemaConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\softwareBlockSchemaConfig;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs\softwareHardeningSchemaConfig;

class matchSchemaConfigs extends Model
{
    /**
     * @var appUninstallSchemaConfig
     */
    public $appUninstallSchemaConfig;

    /**
     * @var deviceRegistrationSchemaConfig
     */
    public $deviceRegistrationSchemaConfig;

    /**
     * @var dlpSendSchemaConfig
     */
    public $dlpSendSchemaConfig;

    /**
     * @var domainBlacklistSchemaConfig
     */
    public $domainBlacklistSchemaConfig;

    /**
     * @var domainWhitelistSchemaConfig
     */
    public $domainWhitelistSchemaConfig;

    /**
     * @var endpointHardeningSchemaConfig
     */
    public $endpointHardeningSchemaConfig;

    /**
     * @var peripheralBlockSchemaConfig
     */
    public $peripheralBlockSchemaConfig;

    /**
     * @var softwareBlockSchemaConfig
     */
    public $softwareBlockSchemaConfig;

    /**
     * @var softwareHardeningSchemaConfig
     */
    public $softwareHardeningSchemaConfig;
    protected $_name = [
        'appUninstallSchemaConfig' => 'AppUninstallSchemaConfig',
        'deviceRegistrationSchemaConfig' => 'DeviceRegistrationSchemaConfig',
        'dlpSendSchemaConfig' => 'DlpSendSchemaConfig',
        'domainBlacklistSchemaConfig' => 'DomainBlacklistSchemaConfig',
        'domainWhitelistSchemaConfig' => 'DomainWhitelistSchemaConfig',
        'endpointHardeningSchemaConfig' => 'EndpointHardeningSchemaConfig',
        'peripheralBlockSchemaConfig' => 'PeripheralBlockSchemaConfig',
        'softwareBlockSchemaConfig' => 'SoftwareBlockSchemaConfig',
        'softwareHardeningSchemaConfig' => 'SoftwareHardeningSchemaConfig',
    ];

    public function validate()
    {
        if (null !== $this->appUninstallSchemaConfig) {
            $this->appUninstallSchemaConfig->validate();
        }
        if (null !== $this->deviceRegistrationSchemaConfig) {
            $this->deviceRegistrationSchemaConfig->validate();
        }
        if (null !== $this->dlpSendSchemaConfig) {
            $this->dlpSendSchemaConfig->validate();
        }
        if (null !== $this->domainBlacklistSchemaConfig) {
            $this->domainBlacklistSchemaConfig->validate();
        }
        if (null !== $this->domainWhitelistSchemaConfig) {
            $this->domainWhitelistSchemaConfig->validate();
        }
        if (null !== $this->endpointHardeningSchemaConfig) {
            $this->endpointHardeningSchemaConfig->validate();
        }
        if (null !== $this->peripheralBlockSchemaConfig) {
            $this->peripheralBlockSchemaConfig->validate();
        }
        if (null !== $this->softwareBlockSchemaConfig) {
            $this->softwareBlockSchemaConfig->validate();
        }
        if (null !== $this->softwareHardeningSchemaConfig) {
            $this->softwareHardeningSchemaConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appUninstallSchemaConfig) {
            $res['AppUninstallSchemaConfig'] = null !== $this->appUninstallSchemaConfig ? $this->appUninstallSchemaConfig->toArray($noStream) : $this->appUninstallSchemaConfig;
        }

        if (null !== $this->deviceRegistrationSchemaConfig) {
            $res['DeviceRegistrationSchemaConfig'] = null !== $this->deviceRegistrationSchemaConfig ? $this->deviceRegistrationSchemaConfig->toArray($noStream) : $this->deviceRegistrationSchemaConfig;
        }

        if (null !== $this->dlpSendSchemaConfig) {
            $res['DlpSendSchemaConfig'] = null !== $this->dlpSendSchemaConfig ? $this->dlpSendSchemaConfig->toArray($noStream) : $this->dlpSendSchemaConfig;
        }

        if (null !== $this->domainBlacklistSchemaConfig) {
            $res['DomainBlacklistSchemaConfig'] = null !== $this->domainBlacklistSchemaConfig ? $this->domainBlacklistSchemaConfig->toArray($noStream) : $this->domainBlacklistSchemaConfig;
        }

        if (null !== $this->domainWhitelistSchemaConfig) {
            $res['DomainWhitelistSchemaConfig'] = null !== $this->domainWhitelistSchemaConfig ? $this->domainWhitelistSchemaConfig->toArray($noStream) : $this->domainWhitelistSchemaConfig;
        }

        if (null !== $this->endpointHardeningSchemaConfig) {
            $res['EndpointHardeningSchemaConfig'] = null !== $this->endpointHardeningSchemaConfig ? $this->endpointHardeningSchemaConfig->toArray($noStream) : $this->endpointHardeningSchemaConfig;
        }

        if (null !== $this->peripheralBlockSchemaConfig) {
            $res['PeripheralBlockSchemaConfig'] = null !== $this->peripheralBlockSchemaConfig ? $this->peripheralBlockSchemaConfig->toArray($noStream) : $this->peripheralBlockSchemaConfig;
        }

        if (null !== $this->softwareBlockSchemaConfig) {
            $res['SoftwareBlockSchemaConfig'] = null !== $this->softwareBlockSchemaConfig ? $this->softwareBlockSchemaConfig->toArray($noStream) : $this->softwareBlockSchemaConfig;
        }

        if (null !== $this->softwareHardeningSchemaConfig) {
            $res['SoftwareHardeningSchemaConfig'] = null !== $this->softwareHardeningSchemaConfig ? $this->softwareHardeningSchemaConfig->toArray($noStream) : $this->softwareHardeningSchemaConfig;
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
        if (isset($map['AppUninstallSchemaConfig'])) {
            $model->appUninstallSchemaConfig = appUninstallSchemaConfig::fromMap($map['AppUninstallSchemaConfig']);
        }

        if (isset($map['DeviceRegistrationSchemaConfig'])) {
            $model->deviceRegistrationSchemaConfig = deviceRegistrationSchemaConfig::fromMap($map['DeviceRegistrationSchemaConfig']);
        }

        if (isset($map['DlpSendSchemaConfig'])) {
            $model->dlpSendSchemaConfig = dlpSendSchemaConfig::fromMap($map['DlpSendSchemaConfig']);
        }

        if (isset($map['DomainBlacklistSchemaConfig'])) {
            $model->domainBlacklistSchemaConfig = domainBlacklistSchemaConfig::fromMap($map['DomainBlacklistSchemaConfig']);
        }

        if (isset($map['DomainWhitelistSchemaConfig'])) {
            $model->domainWhitelistSchemaConfig = domainWhitelistSchemaConfig::fromMap($map['DomainWhitelistSchemaConfig']);
        }

        if (isset($map['EndpointHardeningSchemaConfig'])) {
            $model->endpointHardeningSchemaConfig = endpointHardeningSchemaConfig::fromMap($map['EndpointHardeningSchemaConfig']);
        }

        if (isset($map['PeripheralBlockSchemaConfig'])) {
            $model->peripheralBlockSchemaConfig = peripheralBlockSchemaConfig::fromMap($map['PeripheralBlockSchemaConfig']);
        }

        if (isset($map['SoftwareBlockSchemaConfig'])) {
            $model->softwareBlockSchemaConfig = softwareBlockSchemaConfig::fromMap($map['SoftwareBlockSchemaConfig']);
        }

        if (isset($map['SoftwareHardeningSchemaConfig'])) {
            $model->softwareHardeningSchemaConfig = softwareHardeningSchemaConfig::fromMap($map['SoftwareHardeningSchemaConfig']);
        }

        return $model;
    }
}
