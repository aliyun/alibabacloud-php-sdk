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
     * @description The alert configurations of the service.
     *
     * >  This parameter takes effect only when you specify an alert policy for **PolicyNames**.
     * @example {\\"CmsTemplateId\\":1162921,\\"TemplateUrl\\":\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1760465342xxxxxx/template/c072ef50-6c03-4d9c-8f0e-d1c440xxxxxx.json\\"}
     *
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
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 788E7CP0EN9D51P
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The commodity details.
     *
     * @var commodity
     */
    public $commodity;

    /**
     * @description Compliance check metadata.
     *
     * @var complianceMetadata
     */
    public $complianceMetadata;

    /**
     * @description The deployment configurations of the service. The format in which the deployment information of a service is stored varies based on the deployment type of the service. In this case, the deployment information is stored in the JSON string format.
     *
     * @example {\\"EstimateTime\\":null,\\"SupplierDeployMetadata\\":{\\"DeployTimeout\\":7200},\\"EnableVnc\\":false}
     *
     * @var string
     */
    public $deployMetadata;

    /**
     * @description The deployment type of the service. Valid values:
     *
     * operation: The service is deployed by using a hosted O&M service.
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @description Specifies whether to perform only a dry run for the request to check information such as the permissions and instance status. Valid values:
     *
     *   true: performs a dry run for the request, but does not update a service.
     *   false: performs a dry run for the request, and update a service if the request passes the dry run.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The duration for which hosted O\\&M is implemented. Unit: seconds.
     *
     * @example 259200
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
     * @example Metering Item Configuration Information (Cloud Marketplace - Pay-As-You-Go Use)
     *
     * @var string
     */
    public $licenseMetadata;

    /**
     * @description The logging configurations.
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
     * @description The hosted O\\&M configurations.
     *
     * @example {\\"PrometheusConfigMap\\":{\\"Custom_Image_Ecs\\":{\\"EnablePrometheus\\":false}}}
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
     * @description Region ID.
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
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-1dda29c3eca648xxxxxx
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
     *
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The service version.
     *
     * @example 1
     *
     * @var string
     */
    public $serviceVersion;

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
     * @description The update option.
     *
     * @var updateOption
     */
    public $updateOption;

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
