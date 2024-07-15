<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\serviceInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\statistic;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetServiceResponseBody extends Model
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
     * @description The information of build service information.
     *
     * @example { "RepoUrl": "https://github.com/user/repo.git", "Brancn": "main"}
     *
     * @var string
     */
    public $buildInfo;

    /**
     * @description The category of the service.
     *
     * @example DevOps
     *
     * @var string
     */
    public $categories;

    /**
     * @description The commodity details.
     *
     * @var commodity
     */
    public $commodity;

    /**
     * @description The commodity code of the service in Alibaba Cloud Marketplace.
     *
     * @example cmjj00xxxx
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The time when the service was created.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The binding configurations of the commodity module.
     *
     * @example componesConfigs
     *
     * @var string
     */
    public $crossRegionConnectionStatus;

    /**
     * @description The validity period of the default license. Unit: day. Valid values: 1 to 1000.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultLicenseDays;

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
     *   spi: The service is deployed by calling a service provider interface (SPI).
     *   operation: The service is deployed by using a hosted O\\&M service.
     *   container: The service is deployed by using a container.
     *   pkg: The service is deployed by using a package.
     *
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The duration for which hosted O\\&M is implemented. Unit: seconds.
     *
     * @example 259200
     *
     * @var int
     */
    public $duration;

    /**
     * @description The report source.
     *
     * @var string[]
     */
    public $entitySource;

    /**
     * @description Indicates whether the hosted O\\&M feature is enabled for the service. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * >  This parameter is returned if you set **ServiceType** to **private**.
     * @example false
     *
     * @var bool
     */
    public $isSupportOperated;

    /**
     * @description The license metadata.
     *
     * @example {"renewType":"MONTHLY"}
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
     * @description The source for which fees are generated. Valid values:
     *
     *   None: No fees are generated.
     *   Marketplace: Fees are generated for Alibaba Cloud Marketplace.
     *   Custom: The custom fees.
     *
     * @example None
     *
     * @var string
     */
    public $payFromType;

    /**
     * @description The billing method of the service. Valid values:
     *
     *   Permanent: Once you purchase the service, you can use it permanently.
     *   Subscription: You purchase the service from Alibaba Cloud Marketplace and are charged for the service on a subscription basis.
     *   PayAsYouGo: You purchase the service from Alibaba Cloud Marketplace and are charged for the service on a pay-as-you-go basis.
     *   CustomFixTime: You are charged for the service based on a custom duration fixed by the service provider.
     *
     * @example Permanent
     *
     * @var string
     */
    public $payType;

    /**
     * @description The permissions on the service. Valid values:
     *
     *   Deployable: Permissions to deploy the service.
     *   Accessible: Permissions to access the service.
     *
     * @example Deployable
     *
     * @var string
     */
    public $permission;

    /**
     * @description The policy name. The name can be up to 128 characters in length. Separate multiple names with commas (,). Only hosted O\\&M policies are supported.
     *
     * @example policyName1, policyName2
     *
     * @var string
     */
    public $policyNames;

    /**
     * @description The deployment progress of the service instance. Unit: percentage.
     *
     * @example 90
     *
     * @var int
     */
    public $progress;

    /**
     * @description The time when the service was published.
     *
     * @example 2021-05-21T00:00:00Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description The registration ID.
     *
     * @example sr-04056c2ab4b94bxxxxxx
     *
     * @var string
     */
    public $registrationId;

    /**
     * @description The request ID.
     *
     * @example B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the distribution is supported. Valid values:
     *
     *   false
     *   true
     *
     * @example false
     *
     * @var bool
     */
    public $resellable;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzuqyxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The URL of the service audit file.
     *
     * @example https://service-info-public.oss-cn-hangzhou.aliyuncs.com/1690707531xxxxxx/service-document/be3382cd-xxxx-xxxx-xxxx-f8707ec12879.docx
     *
     * @var string
     */
    public $serviceAuditDocumentUrl;

    /**
     * @description Indicates whether the service is visible. Valid values:
     *
     *   INVISIBLE
     *   DISCOVERABLE
     *
     * @example DISCOVERABLE
     *
     * @var string
     */
    public $serviceDiscoverable;

    /**
     * @description The URL of the service documentation.
     *
     * @example http://example1.com
     *
     * @var string
     */
    public $serviceDocUrl;

    /**
     * @description The service ID.
     *
     * @example service-70a3b15bb62643xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The information about the service.
     *
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @description The URL of the service page.
     *
     * @example http://example2.com
     *
     * @var string
     */
    public $serviceProductUrl;

    /**
     * @description The type of the service. Valid values:
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
     * @description The share status of the instance.
     *
     * > This parameter is discontinued.
     * @example This parameter is discontinued.
     *
     * @var string
     */
    public $shareTypeStatus;

    /**
     * @description The ID of the distribution source service.
     *
     * @example service-70a3b15bb62643xxxxxx
     *
     * @var string
     */
    public $sourceServiceId;

    /**
     * @description The version of the distribution source service.
     *
     * @example 1
     *
     * @var string
     */
    public $sourceServiceVersion;

    /**
     * @description The name of the distribution source service provider.
     *
     * @example SourceSupplier
     *
     * @var string
     */
    public $sourceSupplierName;

    /**
     * @description The statistics.
     *
     * @var statistic
     */
    public $statistic;

    /**
     * @description The status of the service. Valid values:
     *
     *   Draft: The service is a draft.
     *   Submitted: The service is submitted for review. You cannot modify services in this state.
     *   Approved: The service is approved. You cannot modify services in this state. You can publish services in this state.
     *   Launching: The service is being published.
     *   Online: The service is published.
     *   Offline: The service is unpublished.
     *
     * @example Online
     *
     * @var string
     */
    public $status;

    /**
     * @description The description of the service status.
     *
     * @example deploy successfully
     *
     * @var string
     */
    public $statusDetail;

    /**
     * @description The name of the service provider.
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The URL of the service provider.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $supplierUrl;

    /**
     * @description The service tags.
     *
     * @var tags[]
     */
    public $tags;

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
     * @description The status of the test. Valid values:
     *
     *   `CONFIG_IS_NULL`: No test configurations exist.
     *   `SERVICE_TEST_SUCCEED`: The service passed the test.
     *   `SERVICE_TSET_DOING`: The service does not pass the test.
     *
     * @example SERVICE_TEST_SUCCEED
     *
     * @var string
     */
    public $testStatus;

    /**
     * @description The trial duration. Unit: day. The maximum trial duration cannot exceed 30 days.
     *
     * @example 7
     *
     * @var int
     */
    public $trialDuration;

    /**
     * @description The trial policy. Valid values:
     *
     *   Trial: Trials are supported.
     *   NotTrial: Trials are not supported.
     *
     * @example Trial
     *
     * @var string
     */
    public $trialType;

    /**
     * @description The time when the service was updated.
     *
     * @example 2021-05-22T00:00:00Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The metadata about the upgrade.
     *
     * @example {\\"Description\\":\\"xxx\\",\\"SupportRollback\\":true,\\"SupportUpgradeFromVersions\\":[],\\"UpgradeComponents\\":[\\"Configuration\\"]}
     *
     * @var string
     */
    public $upgradeMetadata;

    /**
     * @description The service version.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;

    /**
     * @description The version name.
     *
     * @example v1
     *
     * @var string
     */
    public $versionName;

    /**
     * @description Indicates whether the service is a virtual Internet service. Valid values:
     *
     *   false
     *   true
     *
     * @example false
     *
     * @var string
     */
    public $virtualInternetService;

    /**
     * @description The ID of the virtual Internet service.
     *
     * @example service-70a3b15bb62643xxxxxx
     *
     * @var string
     */
    public $virtualInternetServiceId;
    protected $_name = [
        'alarmMetadata'               => 'AlarmMetadata',
        'approvalType'                => 'ApprovalType',
        'buildInfo'                   => 'BuildInfo',
        'categories'                  => 'Categories',
        'commodity'                   => 'Commodity',
        'commodityCode'               => 'CommodityCode',
        'createTime'                  => 'CreateTime',
        'crossRegionConnectionStatus' => 'CrossRegionConnectionStatus',
        'defaultLicenseDays'          => 'DefaultLicenseDays',
        'deployMetadata'              => 'DeployMetadata',
        'deployType'                  => 'DeployType',
        'duration'                    => 'Duration',
        'entitySource'                => 'EntitySource',
        'isSupportOperated'           => 'IsSupportOperated',
        'licenseMetadata'             => 'LicenseMetadata',
        'logMetadata'                 => 'LogMetadata',
        'operationMetadata'           => 'OperationMetadata',
        'payFromType'                 => 'PayFromType',
        'payType'                     => 'PayType',
        'permission'                  => 'Permission',
        'policyNames'                 => 'PolicyNames',
        'progress'                    => 'Progress',
        'publishTime'                 => 'PublishTime',
        'registrationId'              => 'RegistrationId',
        'requestId'                   => 'RequestId',
        'resellable'                  => 'Resellable',
        'resourceGroupId'             => 'ResourceGroupId',
        'serviceAuditDocumentUrl'     => 'ServiceAuditDocumentUrl',
        'serviceDiscoverable'         => 'ServiceDiscoverable',
        'serviceDocUrl'               => 'ServiceDocUrl',
        'serviceId'                   => 'ServiceId',
        'serviceInfos'                => 'ServiceInfos',
        'serviceProductUrl'           => 'ServiceProductUrl',
        'serviceType'                 => 'ServiceType',
        'shareType'                   => 'ShareType',
        'shareTypeStatus'             => 'ShareTypeStatus',
        'sourceServiceId'             => 'SourceServiceId',
        'sourceServiceVersion'        => 'SourceServiceVersion',
        'sourceSupplierName'          => 'SourceSupplierName',
        'statistic'                   => 'Statistic',
        'status'                      => 'Status',
        'statusDetail'                => 'StatusDetail',
        'supplierName'                => 'SupplierName',
        'supplierUrl'                 => 'SupplierUrl',
        'tags'                        => 'Tags',
        'tenantType'                  => 'TenantType',
        'testStatus'                  => 'TestStatus',
        'trialDuration'               => 'TrialDuration',
        'trialType'                   => 'TrialType',
        'updateTime'                  => 'UpdateTime',
        'upgradeMetadata'             => 'UpgradeMetadata',
        'version'                     => 'Version',
        'versionName'                 => 'VersionName',
        'virtualInternetService'      => 'VirtualInternetService',
        'virtualInternetServiceId'    => 'VirtualInternetServiceId',
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
        if (null !== $this->buildInfo) {
            $res['BuildInfo'] = $this->buildInfo;
        }
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toMap() : null;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossRegionConnectionStatus) {
            $res['CrossRegionConnectionStatus'] = $this->crossRegionConnectionStatus;
        }
        if (null !== $this->defaultLicenseDays) {
            $res['DefaultLicenseDays'] = $this->defaultLicenseDays;
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
        if (null !== $this->entitySource) {
            $res['EntitySource'] = $this->entitySource;
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
        if (null !== $this->payFromType) {
            $res['PayFromType'] = $this->payFromType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->policyNames) {
            $res['PolicyNames'] = $this->policyNames;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->registrationId) {
            $res['RegistrationId'] = $this->registrationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resellable) {
            $res['Resellable'] = $this->resellable;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceAuditDocumentUrl) {
            $res['ServiceAuditDocumentUrl'] = $this->serviceAuditDocumentUrl;
        }
        if (null !== $this->serviceDiscoverable) {
            $res['ServiceDiscoverable'] = $this->serviceDiscoverable;
        }
        if (null !== $this->serviceDocUrl) {
            $res['ServiceDocUrl'] = $this->serviceDocUrl;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceInfos) {
            $res['ServiceInfos'] = [];
            if (null !== $this->serviceInfos && \is_array($this->serviceInfos)) {
                $n = 0;
                foreach ($this->serviceInfos as $item) {
                    $res['ServiceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceProductUrl) {
            $res['ServiceProductUrl'] = $this->serviceProductUrl;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->shareTypeStatus) {
            $res['ShareTypeStatus'] = $this->shareTypeStatus;
        }
        if (null !== $this->sourceServiceId) {
            $res['SourceServiceId'] = $this->sourceServiceId;
        }
        if (null !== $this->sourceServiceVersion) {
            $res['SourceServiceVersion'] = $this->sourceServiceVersion;
        }
        if (null !== $this->sourceSupplierName) {
            $res['SourceSupplierName'] = $this->sourceSupplierName;
        }
        if (null !== $this->statistic) {
            $res['Statistic'] = null !== $this->statistic ? $this->statistic->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantType) {
            $res['TenantType'] = $this->tenantType;
        }
        if (null !== $this->testStatus) {
            $res['TestStatus'] = $this->testStatus;
        }
        if (null !== $this->trialDuration) {
            $res['TrialDuration'] = $this->trialDuration;
        }
        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->upgradeMetadata) {
            $res['UpgradeMetadata'] = $this->upgradeMetadata;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->virtualInternetService) {
            $res['VirtualInternetService'] = $this->virtualInternetService;
        }
        if (null !== $this->virtualInternetServiceId) {
            $res['VirtualInternetServiceId'] = $this->virtualInternetServiceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceResponseBody
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
        if (isset($map['BuildInfo'])) {
            $model->buildInfo = $map['BuildInfo'];
        }
        if (isset($map['Categories'])) {
            $model->categories = $map['Categories'];
        }
        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossRegionConnectionStatus'])) {
            $model->crossRegionConnectionStatus = $map['CrossRegionConnectionStatus'];
        }
        if (isset($map['DefaultLicenseDays'])) {
            $model->defaultLicenseDays = $map['DefaultLicenseDays'];
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
        if (isset($map['EntitySource'])) {
            $model->entitySource = $map['EntitySource'];
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
        if (isset($map['PayFromType'])) {
            $model->payFromType = $map['PayFromType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['PolicyNames'])) {
            $model->policyNames = $map['PolicyNames'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resellable'])) {
            $model->resellable = $map['Resellable'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceAuditDocumentUrl'])) {
            $model->serviceAuditDocumentUrl = $map['ServiceAuditDocumentUrl'];
        }
        if (isset($map['ServiceDiscoverable'])) {
            $model->serviceDiscoverable = $map['ServiceDiscoverable'];
        }
        if (isset($map['ServiceDocUrl'])) {
            $model->serviceDocUrl = $map['ServiceDocUrl'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n                   = 0;
                foreach ($map['ServiceInfos'] as $item) {
                    $model->serviceInfos[$n++] = null !== $item ? serviceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceProductUrl'])) {
            $model->serviceProductUrl = $map['ServiceProductUrl'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['ShareTypeStatus'])) {
            $model->shareTypeStatus = $map['ShareTypeStatus'];
        }
        if (isset($map['SourceServiceId'])) {
            $model->sourceServiceId = $map['SourceServiceId'];
        }
        if (isset($map['SourceServiceVersion'])) {
            $model->sourceServiceVersion = $map['SourceServiceVersion'];
        }
        if (isset($map['SourceSupplierName'])) {
            $model->sourceSupplierName = $map['SourceSupplierName'];
        }
        if (isset($map['Statistic'])) {
            $model->statistic = statistic::fromMap($map['Statistic']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantType'])) {
            $model->tenantType = $map['TenantType'];
        }
        if (isset($map['TestStatus'])) {
            $model->testStatus = $map['TestStatus'];
        }
        if (isset($map['TrialDuration'])) {
            $model->trialDuration = $map['TrialDuration'];
        }
        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpgradeMetadata'])) {
            $model->upgradeMetadata = $map['UpgradeMetadata'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['VirtualInternetService'])) {
            $model->virtualInternetService = $map['VirtualInternetService'];
        }
        if (isset($map['VirtualInternetServiceId'])) {
            $model->virtualInternetServiceId = $map['VirtualInternetServiceId'];
        }

        return $model;
    }
}
