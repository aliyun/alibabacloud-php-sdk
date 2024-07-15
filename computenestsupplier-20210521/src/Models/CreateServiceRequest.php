<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest\serviceInfo;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateServiceRequest extends Model
{
    /**
     * @description The alert configurations of the service.
     *
     * >  This parameter takes effect only when you specify an alert policy for **PolicyNames**.
     * @example {
     * }
     * @var string
     */
    public $alarmMetadata;

    /**
     * @description The approval type of the service usage application. Valid values:
     *
     *   Manual: The application is manually approved.
     *   AutoPass: The application is automatically approved.
     *
     * @example Manual
     *
     * @var string
     */
    public $approvalType;

    /**
     * @description The parameters for building the service
     *
     * @example { "ServiceTemplateId": "st-xxxxx"}
     *
     * @var string
     */
    public $buildParameters;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The storage configurations of the service. The format in which the deployment information of a service is stored varies based on the deployment type of the service. In this case, the deployment information is stored in the JSON string format.
     *
     * @example {\\"TemplateConfigs\\":[{\\"Name\\":\\"模板1\\",\\"Url\\":\\"oss://computenest-test/template"
     * + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":200}}]}]}
     * @var string
     */
    public $deployMetadata;

    /**
     * @description The deployment type of the service. Valid values:
     *
     *   ros: The service is deployed by using Resource Orchestration Service (ROS).
     *   terraform: The service is deployed by using Terraform.
     *   ack: The service is deployed by using Container Service for Kubernetes (ACK).
     *   spi: The service is deployed by calling a service provider interface (SPI).
     *   operation: The service is deployed by using a hosted O\\&M service.
     *
     * This parameter is required.
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The duration for which hosted O\\&M is implemented. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $duration;

    /**
     * @description Specifies whether to enable the hosted O\\&M feature for the service. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * >  This parameter is required if you set **ServiceType** to **private**.
     * @example false
     *
     * @var bool
     */
    public $isSupportOperated;

    /**
     * @description The license metadata.
     *
     * @example {\\"RetentionDays\\":3}
     *
     * @var string
     */
    public $licenseMetadata;

    /**
     * @description The logging configurations.
     *
     * @example { "Logstores": [ { "LogstoreName": "access-log", "LogPath": "/home/admin/app/logs", # This parameter is not required for containers. Configure the parameter in the YAML file. "FilePattern": "access.log\\*" # This parameter is not required for containers. Configure the parameter in the YAML file. } ] }
     *
     * @var string
     */
    public $logMetadata;

    /**
     * @description The hosted O\\&M configurations.
     *
     * @example {\\"PrometheusConfigMap\\":{\\"New_Vpc_Ack_And_Jumpserver\\":{}}}
     *
     * @var string
     */
    public $operationMetadata;

    /**
     * @description The policy name. The name can be up to 128 characters in length. Separate multiple names with commas (,). Only hosted O\\&M policies are supported.
     *
     * @example policyName1, policyName2
     *
     * @var string
     */
    public $policyNames;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Whether resell is supported.
     *
     * @example false
     *
     * @var bool
     */
    public $resellable;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek25refu7r3opq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The service ID.
     *
     * @example service-0e6fca6a51a544xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service details.
     *
     * @var serviceInfo[]
     */
    public $serviceInfo;

    /**
     * @description The service type. Valid values:
     *
     *   private: The service is a private service and is deployed within the account of a customer.
     *   managed: The service is a fully managed service and is deployed within the account of a service provider.
     *   operation: The service is a hosted O\\&M service.
     *   poc: The service is a trial service.
     *
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The permission type of the deployment URL. Valid values:
     *
     *   Public: All users can go to the URL to create a service instance or a trial service instance.
     *   Restricted: Only users in the whitelist can go to the URL to create a service instance or a trial service instance.
     *   OnlyFormalRestricted: Only users in the whitelist can go to the URL to create a service instance.
     *   OnlyTrailRestricted: Only users in the whitelist can go to the URL to create a trial service instance.
     *   Hidden: Users not in the whitelist cannot see the service details page when they go to the URL and cannot request deployment permissions.
     *
     * @example Public
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The source service ID for resell。
     *
     * @example service-70a3b15bb62643xxxxxx
     *
     * @var string
     */
    public $sourceServiceId;

    /**
     * @description The source service version for resell。
     *
     * @example 1
     *
     * @var string
     */
    public $sourceServiceVersion;

    /**
     * @description The custom tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the tenant. Valid values:
     *
     *   SingleTenant
     *   MultiTenant
     *
     * @example SingleTenant
     *
     * @var string
     */
    public $tenantType;

    /**
     * @description The trial duration. Unit: day. The maximum trial duration cannot exceed 30 days.
     *
     * @example 7
     *
     * @var int
     */
    public $trialDuration;

    /**
     * @description The metadata about the upgrade.
     *
     * @example {\\"Description\\":\\"xxx\\",\\"SupportRollback\\":true,\\"SupportUpgradeFromVersions\\":[],\\"UpgradeComponents\\":[\\"Configuration\\"]}
     *
     * @var string
     */
    public $upgradeMetadata;

    /**
     * @description The version name.
     *
     * @example Draft
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'alarmMetadata'        => 'AlarmMetadata',
        'approvalType'         => 'ApprovalType',
        'buildParameters'      => 'BuildParameters',
        'clientToken'          => 'ClientToken',
        'deployMetadata'       => 'DeployMetadata',
        'deployType'           => 'DeployType',
        'duration'             => 'Duration',
        'isSupportOperated'    => 'IsSupportOperated',
        'licenseMetadata'      => 'LicenseMetadata',
        'logMetadata'          => 'LogMetadata',
        'operationMetadata'    => 'OperationMetadata',
        'policyNames'          => 'PolicyNames',
        'regionId'             => 'RegionId',
        'resellable'           => 'Resellable',
        'resourceGroupId'      => 'ResourceGroupId',
        'serviceId'            => 'ServiceId',
        'serviceInfo'          => 'ServiceInfo',
        'serviceType'          => 'ServiceType',
        'shareType'            => 'ShareType',
        'sourceServiceId'      => 'SourceServiceId',
        'sourceServiceVersion' => 'SourceServiceVersion',
        'tag'                  => 'Tag',
        'tenantType'           => 'TenantType',
        'trialDuration'        => 'TrialDuration',
        'upgradeMetadata'      => 'UpgradeMetadata',
        'versionName'          => 'VersionName',
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
        if (null !== $this->buildParameters) {
            $res['BuildParameters'] = $this->buildParameters;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deployMetadata) {
            $res['DeployMetadata'] = $this->deployMetadata;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->sourceServiceId) {
            $res['SourceServiceId'] = $this->sourceServiceId;
        }
        if (null !== $this->sourceServiceVersion) {
            $res['SourceServiceVersion'] = $this->sourceServiceVersion;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantType) {
            $res['TenantType'] = $this->tenantType;
        }
        if (null !== $this->trialDuration) {
            $res['TrialDuration'] = $this->trialDuration;
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
     * @return CreateServiceRequest
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
        if (isset($map['BuildParameters'])) {
            $model->buildParameters = $map['BuildParameters'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeployMetadata'])) {
            $model->deployMetadata = $map['DeployMetadata'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['SourceServiceId'])) {
            $model->sourceServiceId = $map['SourceServiceId'];
        }
        if (isset($map['SourceServiceVersion'])) {
            $model->sourceServiceVersion = $map['SourceServiceVersion'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantType'])) {
            $model->tenantType = $map['TenantType'];
        }
        if (isset($map['TrialDuration'])) {
            $model->trialDuration = $map['TrialDuration'];
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
