<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\instanceRoleInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\serviceDocumentInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\serviceInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetServiceResponseBody extends Model
{
    /**
     * @description The alert configurations of the service.
     *
     * >  This parameter takes effect only when you specify an alert policy for **PolicyNames**.
     *
     * @example { "TemplateUrl": "http://template.file.url", "ApplicationGroups": [ { "Name": "applicationGroup1", "TemplateUrl": "url1" }, { "Name": "applicationGroup2", "TemplateUrl": "url2" } ] }
     *
     * @var string
     */
    public $alarmMetadata;

    /**
     * @description The categories of the Flow.
     *
     * @example AI
     *
     * @var string
     */
    public $categories;

    /**
     * @description The information about the order placed in Alibaba Cloud Marketplace.
     *
     * @var commodity
     */
    public $commodity;

    /**
     * @description Service deployment approach, Valid values：
     *
     * - NoWhere
     * - Marketplace
     * - ComputeNest
     *
     * @example Marketplace
     *
     * @var string
     */
    public $deployFrom;

    /**
     * @description The storage configurations of the service. The format in which the deployment information of a service is stored varies based on the deployment type of the service. In this case, the deployment information is stored in the JSON string format.
     *
     * @example {\\"TemplateUrl\\": \\"http://tidbRosFile\\"}
     *
     * @var string
     */
    public $deployMetadata;

    /**
     * @description The deployment type of the service. Valid values:
     *
     *   ros: The service is deployed by using Resource Orchestration Service (ROS).
     *   terraform: The service is deployed by using Terraform.
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
     * @description Information about the ram role created in the service template.
     *
     * @var instanceRoleInfos[]
     */
    public $instanceRoleInfos;

    /**
     * @description Indicates whether the hosted O\\&M feature is enabled for the service. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * >  This parameter is returned if you set **ServiceType** to **private**.
     *
     * @example false
     *
     * @var bool
     */
    public $isSupportOperated;

    /**
     * @description The license metadata.
     *
     * @example {\\"PayType\\":\\"CustomFixTime\\",\\"DefaultLicenseDays\\":7,\\"CustomMetadata\\":[{\\"TemplateName\\":\\"ECS\\",\\"SpecificationName\\":\\"bandwith-0\\",\\"CustomData\\":\\"1\\"}]}
     *
     * @var string
     */
    public $licenseMetadata;

    /**
     * @description The logging configurations.
     *
     * @example {\\"Logstores\\":[]}
     *
     * @var string
     */
    public $logMetadata;

    /**
     * @description The operation metadata.
     *
     * @example {\\"PrometheusConfigMap\\":{\\"New_Vpc_Ack_And_Jumpserver\\":{}}}
     *
     * @var string
     */
    public $operationMetadata;

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
     * @description The time when the service was published.
     *
     * @example 2021-05-21T00:00:00Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description The request ID.
     *
     * @example 06BF8F22-02DC-4750-83DF-3FFC11C065EA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Service document information.
     *
     * @var serviceDocumentInfos[]
     */
    public $serviceDocumentInfos;

    /**
     * @description The service ID.
     *
     * @example service-0e6fca6a51a544xxxxxx
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
     * @example http://example1.com
     *
     * @var string
     */
    public $serviceProductUrl;

    /**
     * @description The type of the service. Valid values:
     *
     * - private: The service is a private service and is deployed within the account of a customer.
     * - managed: The service is a fully managed service and is deployed within the account of a service provider.
     * - operation: The service is a hosted O&M service.
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
     * @description The deploy status of the service. Valid values:
     * - Draft
     * - Beta
     * - Submitted
     * - Approved
     * - Launching
     * - Online
     * - Offline
     * - Creating
     *
     * @example Online
     *
     * @var string
     */
    public $status;

    /**
     * @description The description of service provider.
     *
     * @example Computing Nest Community service
     *
     * @var string
     */
    public $supplierDesc;

    /**
     * @description The Logo of service provider.
     *
     * @example https://service-info-public.oss-cn-hangzhou.aliyuncs.com/xxx/service-image/xxx.png
     *
     * @var string
     */
    public $supplierLogo;

    /**
     * @description The name of the service provider.
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The Alibaba Cloud account ID of the service provider.
     *
     * @example 158927391332*****
     *
     * @var int
     */
    public $supplierUid;

    /**
     * @description The URL of the service provider.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $supplierUrl;

    /**
     * @description The tags.
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
    protected $_name = [
        'alarmMetadata' => 'AlarmMetadata',
        'categories' => 'Categories',
        'commodity' => 'Commodity',
        'deployFrom' => 'DeployFrom',
        'deployMetadata' => 'DeployMetadata',
        'deployType' => 'DeployType',
        'duration' => 'Duration',
        'instanceRoleInfos' => 'InstanceRoleInfos',
        'isSupportOperated' => 'IsSupportOperated',
        'licenseMetadata' => 'LicenseMetadata',
        'logMetadata' => 'LogMetadata',
        'operationMetadata' => 'OperationMetadata',
        'permission' => 'Permission',
        'policyNames' => 'PolicyNames',
        'publishTime' => 'PublishTime',
        'requestId' => 'RequestId',
        'serviceDocumentInfos' => 'ServiceDocumentInfos',
        'serviceId' => 'ServiceId',
        'serviceInfos' => 'ServiceInfos',
        'serviceProductUrl' => 'ServiceProductUrl',
        'serviceType' => 'ServiceType',
        'shareType' => 'ShareType',
        'status' => 'Status',
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierName' => 'SupplierName',
        'supplierUid' => 'SupplierUid',
        'supplierUrl' => 'SupplierUrl',
        'tags' => 'Tags',
        'tenantType' => 'TenantType',
        'trialDuration' => 'TrialDuration',
        'trialType' => 'TrialType',
        'version' => 'Version',
        'versionName' => 'VersionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmMetadata) {
            $res['AlarmMetadata'] = $this->alarmMetadata;
        }
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toMap() : null;
        }
        if (null !== $this->deployFrom) {
            $res['DeployFrom'] = $this->deployFrom;
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
        if (null !== $this->instanceRoleInfos) {
            $res['InstanceRoleInfos'] = [];
            if (null !== $this->instanceRoleInfos && \is_array($this->instanceRoleInfos)) {
                $n = 0;
                foreach ($this->instanceRoleInfos as $item) {
                    $res['InstanceRoleInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->policyNames) {
            $res['PolicyNames'] = $this->policyNames;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceDocumentInfos) {
            $res['ServiceDocumentInfos'] = [];
            if (null !== $this->serviceDocumentInfos && \is_array($this->serviceDocumentInfos)) {
                $n = 0;
                foreach ($this->serviceDocumentInfos as $item) {
                    $res['ServiceDocumentInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplierDesc) {
            $res['SupplierDesc'] = $this->supplierDesc;
        }
        if (null !== $this->supplierLogo) {
            $res['SupplierLogo'] = $this->supplierLogo;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierUid) {
            $res['SupplierUid'] = $this->supplierUid;
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
        if (null !== $this->trialDuration) {
            $res['TrialDuration'] = $this->trialDuration;
        }
        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['Categories'])) {
            $model->categories = $map['Categories'];
        }
        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }
        if (isset($map['DeployFrom'])) {
            $model->deployFrom = $map['DeployFrom'];
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
        if (isset($map['InstanceRoleInfos'])) {
            if (!empty($map['InstanceRoleInfos'])) {
                $model->instanceRoleInfos = [];
                $n = 0;
                foreach ($map['InstanceRoleInfos'] as $item) {
                    $model->instanceRoleInfos[$n++] = null !== $item ? instanceRoleInfos::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['PolicyNames'])) {
            $model->policyNames = $map['PolicyNames'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceDocumentInfos'])) {
            if (!empty($map['ServiceDocumentInfos'])) {
                $model->serviceDocumentInfos = [];
                $n = 0;
                foreach ($map['ServiceDocumentInfos'] as $item) {
                    $model->serviceDocumentInfos[$n++] = null !== $item ? serviceDocumentInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n = 0;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierDesc'])) {
            $model->supplierDesc = $map['SupplierDesc'];
        }
        if (isset($map['SupplierLogo'])) {
            $model->supplierLogo = $map['SupplierLogo'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierUid'])) {
            $model->supplierUid = $map['SupplierUid'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantType'])) {
            $model->tenantType = $map['TenantType'];
        }
        if (isset($map['TrialDuration'])) {
            $model->trialDuration = $map['TrialDuration'];
        }
        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
