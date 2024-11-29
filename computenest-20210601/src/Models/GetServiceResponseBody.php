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
     * @var string
     */
    public $alarmMetadata;

    /**
     * @var string
     */
    public $categories;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @var string
     */
    public $deployFrom;

    /**
     * @example {\\"TemplateUrl\\": \\"http://tidbRosFile\\"}
     *
     * @var string
     */
    public $deployMetadata;

    /**
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @example 259200
     *
     * @var int
     */
    public $duration;

    /**
     * @var instanceRoleInfos[]
     */
    public $instanceRoleInfos;

    /**
     * @example false
     *
     * @var bool
     */
    public $isSupportOperated;

    /**
     * @var string
     */
    public $licenseMetadata;

    /**
     * @var string
     */
    public $logMetadata;

    /**
     * @example {\\"PrometheusConfigMap\\":{\\"New_Vpc_Ack_And_Jumpserver\\":{}}}
     *
     * @var string
     */
    public $operationMetadata;

    /**
     * @example Deployable
     *
     * @var string
     */
    public $permission;

    /**
     * @example policyName1, policyName2
     *
     * @var string
     */
    public $policyNames;

    /**
     * @example 2021-05-21T00:00:00Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @example 06BF8F22-02DC-4750-83DF-3FFC11C065EA
     *
     * @var string
     */
    public $requestId;

    /**
     * @var serviceDocumentInfos[]
     */
    public $serviceDocumentInfos;

    /**
     * @example service-0e6fca6a51a544xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @example http://example1.com
     *
     * @var string
     */
    public $serviceProductUrl;

    /**
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example Public
     *
     * @var string
     */
    public $shareType;

    /**
     * @example Online
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplierDesc;

    /**
     * @var string
     */
    public $supplierLogo;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var int
     */
    public $supplierUid;

    /**
     * @example http://example.com
     *
     * @var string
     */
    public $supplierUrl;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example SingleTenant
     *
     * @var string
     */
    public $tenantType;

    /**
     * @example 7
     *
     * @var int
     */
    public $trialDuration;

    /**
     * @example Trial
     *
     * @var string
     */
    public $trialType;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;

    /**
     * @example v1
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'alarmMetadata'        => 'AlarmMetadata',
        'categories'           => 'Categories',
        'commodity'            => 'Commodity',
        'deployFrom'           => 'DeployFrom',
        'deployMetadata'       => 'DeployMetadata',
        'deployType'           => 'DeployType',
        'duration'             => 'Duration',
        'instanceRoleInfos'    => 'InstanceRoleInfos',
        'isSupportOperated'    => 'IsSupportOperated',
        'licenseMetadata'      => 'LicenseMetadata',
        'logMetadata'          => 'LogMetadata',
        'operationMetadata'    => 'OperationMetadata',
        'permission'           => 'Permission',
        'policyNames'          => 'PolicyNames',
        'publishTime'          => 'PublishTime',
        'requestId'            => 'RequestId',
        'serviceDocumentInfos' => 'ServiceDocumentInfos',
        'serviceId'            => 'ServiceId',
        'serviceInfos'         => 'ServiceInfos',
        'serviceProductUrl'    => 'ServiceProductUrl',
        'serviceType'          => 'ServiceType',
        'shareType'            => 'ShareType',
        'status'               => 'Status',
        'supplierDesc'         => 'SupplierDesc',
        'supplierLogo'         => 'SupplierLogo',
        'supplierName'         => 'SupplierName',
        'supplierUid'          => 'SupplierUid',
        'supplierUrl'          => 'SupplierUrl',
        'tags'                 => 'Tags',
        'tenantType'           => 'TenantType',
        'trialDuration'        => 'TrialDuration',
        'trialType'            => 'TrialType',
        'version'              => 'Version',
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
                $n                        = 0;
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
                $n                           = 0;
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
                $n           = 0;
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
