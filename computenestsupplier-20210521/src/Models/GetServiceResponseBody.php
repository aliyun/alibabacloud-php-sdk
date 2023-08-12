<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodityEntities;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commoditySpecifications;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\serviceInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\statistic;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $alarmMetadata;

    /**
     * @example Manual
     *
     * @var string
     */
    public $approvalType;

    /**
     * @example cmjj00xxxx
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var commodityEntities[]
     */
    public $commodityEntities;

    /**
     * @var commoditySpecifications[]
     */
    public $commoditySpecifications;

    /**
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $defaultLicenseDays;

    /**
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
     * @example {\"PrometheusConfigMap\":{\"New_Vpc_Ack_And_Jumpserver\":{}}}
     *
     * @var string
     */
    public $operationMetadata;

    /**
     * @example None
     *
     * @var string
     */
    public $payFromType;

    /**
     * @example Permanent
     *
     * @var string
     */
    public $payType;

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
     * @example 90
     *
     * @var int
     */
    public $progress;

    /**
     * @example 2021-05-21T00:00:00Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @example sr-04056c2ab4b94bxxxxxx
     *
     * @var string
     */
    public $registrationId;

    /**
     * @example B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-aekzuqyxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example http://example1.com
     *
     * @var string
     */
    public $serviceDocUrl;

    /**
     * @example service-70a3b15bb62643xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @example http://example2.com
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
     * @var string
     */
    public $sourceServiceId;

    /**
     * @var string
     */
    public $sourceServiceVersion;

    /**
     * @var string
     */
    public $sourceSupplierName;

    /**
     * @var statistic
     */
    public $statistic;

    /**
     * @example Online
     *
     * @var string
     */
    public $status;

    /**
     * @example deploy successfully
     *
     * @var string
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $supplierName;

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
     * @example SERVICE_TEST_SUCCEED
     *
     * @var string
     */
    public $testStatus;

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
     * @example 2021-05-22T00:00:00Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example {\"Description\":\"xxx\",\"SupportRollback\":true,\"SupportUpgradeFromVersions\":[],\"UpgradeComponents\":[\"Configuration\"]}
     *
     * @var string
     */
    public $upgradeMetadata;

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
        'alarmMetadata'           => 'AlarmMetadata',
        'approvalType'            => 'ApprovalType',
        'commodityCode'           => 'CommodityCode',
        'commodityEntities'       => 'CommodityEntities',
        'commoditySpecifications' => 'CommoditySpecifications',
        'createTime'              => 'CreateTime',
        'defaultLicenseDays'      => 'DefaultLicenseDays',
        'deployMetadata'          => 'DeployMetadata',
        'deployType'              => 'DeployType',
        'duration'                => 'Duration',
        'isSupportOperated'       => 'IsSupportOperated',
        'licenseMetadata'         => 'LicenseMetadata',
        'logMetadata'             => 'LogMetadata',
        'operationMetadata'       => 'OperationMetadata',
        'payFromType'             => 'PayFromType',
        'payType'                 => 'PayType',
        'permission'              => 'Permission',
        'policyNames'             => 'PolicyNames',
        'progress'                => 'Progress',
        'publishTime'             => 'PublishTime',
        'registrationId'          => 'RegistrationId',
        'requestId'               => 'RequestId',
        'resourceGroupId'         => 'ResourceGroupId',
        'serviceDocUrl'           => 'ServiceDocUrl',
        'serviceId'               => 'ServiceId',
        'serviceInfos'            => 'ServiceInfos',
        'serviceProductUrl'       => 'ServiceProductUrl',
        'serviceType'             => 'ServiceType',
        'shareType'               => 'ShareType',
        'sourceServiceId'         => 'SourceServiceId',
        'sourceServiceVersion'    => 'SourceServiceVersion',
        'sourceSupplierName'      => 'SourceSupplierName',
        'statistic'               => 'Statistic',
        'status'                  => 'Status',
        'statusDetail'            => 'StatusDetail',
        'supplierName'            => 'SupplierName',
        'supplierUrl'             => 'SupplierUrl',
        'tags'                    => 'Tags',
        'tenantType'              => 'TenantType',
        'testStatus'              => 'TestStatus',
        'trialDuration'           => 'TrialDuration',
        'trialType'               => 'TrialType',
        'updateTime'              => 'UpdateTime',
        'upgradeMetadata'         => 'UpgradeMetadata',
        'version'                 => 'Version',
        'versionName'             => 'VersionName',
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
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityEntities) {
            $res['CommodityEntities'] = [];
            if (null !== $this->commodityEntities && \is_array($this->commodityEntities)) {
                $n = 0;
                foreach ($this->commodityEntities as $item) {
                    $res['CommodityEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->commoditySpecifications) {
            $res['CommoditySpecifications'] = [];
            if (null !== $this->commoditySpecifications && \is_array($this->commoditySpecifications)) {
                $n = 0;
                foreach ($this->commoditySpecifications as $item) {
                    $res['CommoditySpecifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityEntities'])) {
            if (!empty($map['CommodityEntities'])) {
                $model->commodityEntities = [];
                $n                        = 0;
                foreach ($map['CommodityEntities'] as $item) {
                    $model->commodityEntities[$n++] = null !== $item ? commodityEntities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CommoditySpecifications'])) {
            if (!empty($map['CommoditySpecifications'])) {
                $model->commoditySpecifications = [];
                $n                              = 0;
                foreach ($map['CommoditySpecifications'] as $item) {
                    $model->commoditySpecifications[$n++] = null !== $item ? commoditySpecifications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
