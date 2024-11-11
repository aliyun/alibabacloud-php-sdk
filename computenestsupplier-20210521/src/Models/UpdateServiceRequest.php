<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\complianceMetadata;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\serviceInfo;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\updateOption;
use AlibabaCloud\Tea\Model;

class UpdateServiceRequest extends Model
{
    /**
     * @description Is need to update the artifacts
     *
     * @example {\\"CmsTemplateId\\":1162921,\\"TemplateUrl\\":\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1760465342xxxxxx/template/c072ef50-6c03-4d9c-8f0e-d1c440xxxxxx.json\\"}
     *
     * @var string
     */
    public $alarmMetadata;

    /**
     * @description The service type. Valid values:
     *
     *   private: The service is a private service and is deployed within the account of a customer.
     *   managed: The service is a fully managed service and is deployed within the account of a service provider.
     *   operation: The service is a hosted O\\&M service.
     *   poc: The service is a trial service.
     *
     * @example Manual
     *
     * @var string
     */
    public $approvalType;

    /**
     * @description The options for update the service.
     *
     * @example 788E7CP0EN9D51P
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is not publicly accessible.
     *
     * @var commodity
     */
    public $commodity;

    /**
     * @var complianceMetadata
     */
    public $complianceMetadata;

    /**
     * @description The policy name. The name can be up to 128 characters in length. Separate multiple names with commas (,). Only hosted O\\&M policies are supported.
     *
     * @example {\\"EstimateTime\\":null,\\"SupplierDeployMetadata\\":{\\"DeployTimeout\\":7200},\\"EnableVnc\\":false}
     *
     * @var string
     */
    public $deployMetadata;

    /**
     * @description WB01286039
     *
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @description The deployment type of the service. Valid values:
     *
     *   ros: The service is deployed by using Resource Orchestration Service (ROS).
     *   terraform: The service is deployed by using Terraform.
     *   spi: The service is deployed by calling a service provider interface (SPI).
     *   operation: The service is deployed by using a hosted O\\&M service.
     *   container: The service is deployed by using a container.
     *   pkg: The service is deployed by using a package.
     *
     * @example 259200
     *
     * @var int
     */
    public $duration;

    /**
     * @description The version name.
     *
     * @example false
     *
     * @var bool
     */
    public $isSupportOperated;

    /**
     * @description The duration for which hosted O\\&M is implemented. Unit: seconds.
     *
     * @example Metering Item Configuration Information (Cloud Marketplace - Pay-As-You-Go Use)
     *
     * @var string
     */
    public $licenseMetadata;

    /**
     * @description This parameter is not publicly accessible.
     *
     * @example Specifies whether to support distribution. Valid values:
     *
     *   false
     *   true
     *
     * @var string
     */
    public $logMetadata;

    /**
     * @description {\\"RetentionDays\\":3}
     *
     * @example {\\"PrometheusConfigMap\\":{\\"Custom_Image_Ecs\\":{\\"EnablePrometheus\\":false}}}
     *
     * @var string
     */
    public $operationMetadata;

    /**
     * @description The package name.
     *
     * @example policyName1, policyName2
     *
     * @var string
     */
    public $policyNames;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $resellable;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfo[]
     */
    public $serviceInfo;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $tenantType;

    /**
     * @var int
     */
    public $trialDuration;

    /**
     * @var updateOption
     */
    public $updateOption;

    /**
     * @var string
     */
    public $upgradeMetadata;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'alarmMetadata'      => 'AlarmMetadata',
        'approvalType'       => 'ApprovalType',
        'clientToken'        => 'ClientToken',
        'commodity'          => 'Commodity',
        'complianceMetadata' => 'ComplianceMetadata',
        'deployMetadata'     => 'DeployMetadata',
        'deployType'         => 'DeployType',
        'dryRun'             => 'DryRun',
        'duration'           => 'Duration',
        'isSupportOperated'  => 'IsSupportOperated',
        'licenseMetadata'    => 'LicenseMetadata',
        'logMetadata'        => 'LogMetadata',
        'operationMetadata'  => 'OperationMetadata',
        'policyNames'        => 'PolicyNames',
        'regionId'           => 'RegionId',
        'resellable'         => 'Resellable',
        'serviceId'          => 'ServiceId',
        'serviceInfo'        => 'ServiceInfo',
        'serviceType'        => 'ServiceType',
        'serviceVersion'     => 'ServiceVersion',
        'shareType'          => 'ShareType',
        'tenantType'         => 'TenantType',
        'trialDuration'      => 'TrialDuration',
        'updateOption'       => 'UpdateOption',
        'upgradeMetadata'    => 'UpgradeMetadata',
        'versionName'        => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmMetadata) {
            $res['AlarmMetadata'] = $this->alarmMetadata;
        }
        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toMap() : null;
        }
        if (null !== $this->complianceMetadata) {
            $res['ComplianceMetadata'] = null !== $this->complianceMetadata ? $this->complianceMetadata->toMap() : null;
        }
        if (null !== $this->deployMetadata) {
            $res['DeployMetadata'] = $this->deployMetadata;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->isSupportOperated) {
            $res['IsSupportOperated'] = $this->isSupportOperated;
        }
        if (null !== $this->licenseMetadata) {
            $res['LicenseMetadata'] = $this->licenseMetadata;
        }
        if (null !== $this->logMetadata) {
            $res['LogMetadata'] = $this->logMetadata;
        }
        if (null !== $this->operationMetadata) {
            $res['OperationMetadata'] = $this->operationMetadata;
        }
        if (null !== $this->policyNames) {
            $res['PolicyNames'] = $this->policyNames;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resellable) {
            $res['Resellable'] = $this->resellable;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceInfo) {
            $res['ServiceInfo'] = [];
            if (null !== $this->serviceInfo && \is_array($this->serviceInfo)) {
                $n = 0;
                foreach ($this->serviceInfo as $item) {
                    $res['ServiceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->tenantType) {
            $res['TenantType'] = $this->tenantType;
        }
        if (null !== $this->trialDuration) {
            $res['TrialDuration'] = $this->trialDuration;
        }
        if (null !== $this->updateOption) {
            $res['UpdateOption'] = null !== $this->updateOption ? $this->updateOption->toMap() : null;
        }
        if (null !== $this->upgradeMetadata) {
            $res['UpgradeMetadata'] = $this->upgradeMetadata;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmMetadata'])) {
            $model->alarmMetadata = $map['AlarmMetadata'];
        }
        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }
        if (isset($map['ComplianceMetadata'])) {
            $model->complianceMetadata = complianceMetadata::fromMap($map['ComplianceMetadata']);
        }
        if (isset($map['DeployMetadata'])) {
            $model->deployMetadata = $map['DeployMetadata'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['IsSupportOperated'])) {
            $model->isSupportOperated = $map['IsSupportOperated'];
        }
        if (isset($map['LicenseMetadata'])) {
            $model->licenseMetadata = $map['LicenseMetadata'];
        }
        if (isset($map['LogMetadata'])) {
            $model->logMetadata = $map['LogMetadata'];
        }
        if (isset($map['OperationMetadata'])) {
            $model->operationMetadata = $map['OperationMetadata'];
        }
        if (isset($map['PolicyNames'])) {
            $model->policyNames = $map['PolicyNames'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resellable'])) {
            $model->resellable = $map['Resellable'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInfo'])) {
            if (!empty($map['ServiceInfo'])) {
                $model->serviceInfo = [];
                $n                  = 0;
                foreach ($map['ServiceInfo'] as $item) {
                    $model->serviceInfo[$n++] = null !== $item ? serviceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['TenantType'])) {
            $model->tenantType = $map['TenantType'];
        }
        if (isset($map['TrialDuration'])) {
            $model->trialDuration = $map['TrialDuration'];
        }
        if (isset($map['UpdateOption'])) {
            $model->updateOption = updateOption::fromMap($map['UpdateOption']);
        }
        if (isset($map['UpgradeMetadata'])) {
            $model->upgradeMetadata = $map['UpgradeMetadata'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
