<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\complianceMetadata;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\serviceDocumentInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\serviceInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\statistic;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\supportContacts;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\tags;

class GetServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $alarmMetadata;

    /**
     * @var string
     */
    public $approvalType;

    /**
     * @var string
     */
    public $buildInfo;

    /**
     * @var string
     */
    public $buildParameters;

    /**
     * @var string
     */
    public $categories;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @var complianceMetadata
     */
    public $complianceMetadata;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $crossRegionConnectionStatus;

    /**
     * @var string
     */
    public $deployMetadata;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string[]
     */
    public $entitySource;

    /**
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
     * @var string
     */
    public $operationMetadata;

    /**
     * @var string
     */
    public $payFromType;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $policyNames;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $registrationId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $resellable;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceAuditDocumentUrl;

    /**
     * @var string
     */
    public $serviceDiscoverable;

    /**
     * @var serviceDocumentInfos[]
     */
    public $serviceDocumentInfos;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @var string
     */
    public $serviceProductUrl;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $shareTypeStatus;

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
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $supplierUrl;

    /**
     * @var supportContacts[]
     */
    public $supportContacts;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $tenantType;

    /**
     * @var string
     */
    public $testStatus;

    /**
     * @var int
     */
    public $trialDuration;

    /**
     * @var string
     */
    public $trialType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $upgradeMetadata;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var string
     */
    public $virtualInternetService;

    /**
     * @var string
     */
    public $virtualInternetServiceId;
    protected $_name = [
        'alarmMetadata' => 'AlarmMetadata',
        'approvalType' => 'ApprovalType',
        'buildInfo' => 'BuildInfo',
        'buildParameters' => 'BuildParameters',
        'categories' => 'Categories',
        'commodity' => 'Commodity',
        'complianceMetadata' => 'ComplianceMetadata',
        'createTime' => 'CreateTime',
        'crossRegionConnectionStatus' => 'CrossRegionConnectionStatus',
        'deployMetadata' => 'DeployMetadata',
        'deployType' => 'DeployType',
        'duration' => 'Duration',
        'entitySource' => 'EntitySource',
        'isSupportOperated' => 'IsSupportOperated',
        'licenseMetadata' => 'LicenseMetadata',
        'logMetadata' => 'LogMetadata',
        'operationMetadata' => 'OperationMetadata',
        'payFromType' => 'PayFromType',
        'permission' => 'Permission',
        'policyNames' => 'PolicyNames',
        'progress' => 'Progress',
        'publishTime' => 'PublishTime',
        'registrationId' => 'RegistrationId',
        'requestId' => 'RequestId',
        'resellable' => 'Resellable',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceAuditDocumentUrl' => 'ServiceAuditDocumentUrl',
        'serviceDiscoverable' => 'ServiceDiscoverable',
        'serviceDocumentInfos' => 'ServiceDocumentInfos',
        'serviceId' => 'ServiceId',
        'serviceInfos' => 'ServiceInfos',
        'serviceProductUrl' => 'ServiceProductUrl',
        'serviceType' => 'ServiceType',
        'shareType' => 'ShareType',
        'shareTypeStatus' => 'ShareTypeStatus',
        'sourceServiceId' => 'SourceServiceId',
        'sourceServiceVersion' => 'SourceServiceVersion',
        'sourceSupplierName' => 'SourceSupplierName',
        'statistic' => 'Statistic',
        'status' => 'Status',
        'statusDetail' => 'StatusDetail',
        'supplierName' => 'SupplierName',
        'supplierUrl' => 'SupplierUrl',
        'supportContacts' => 'SupportContacts',
        'tags' => 'Tags',
        'tenantType' => 'TenantType',
        'testStatus' => 'TestStatus',
        'trialDuration' => 'TrialDuration',
        'trialType' => 'TrialType',
        'updateTime' => 'UpdateTime',
        'upgradeMetadata' => 'UpgradeMetadata',
        'version' => 'Version',
        'versionName' => 'VersionName',
        'virtualInternetService' => 'VirtualInternetService',
        'virtualInternetServiceId' => 'VirtualInternetServiceId',
    ];

    public function validate()
    {
        if (null !== $this->commodity) {
            $this->commodity->validate();
        }
        if (null !== $this->complianceMetadata) {
            $this->complianceMetadata->validate();
        }
        if (\is_array($this->entitySource)) {
            Model::validateArray($this->entitySource);
        }
        if (\is_array($this->serviceDocumentInfos)) {
            Model::validateArray($this->serviceDocumentInfos);
        }
        if (\is_array($this->serviceInfos)) {
            Model::validateArray($this->serviceInfos);
        }
        if (null !== $this->statistic) {
            $this->statistic->validate();
        }
        if (\is_array($this->supportContacts)) {
            Model::validateArray($this->supportContacts);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->buildParameters) {
            $res['BuildParameters'] = $this->buildParameters;
        }

        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }

        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toArray($noStream) : $this->commodity;
        }

        if (null !== $this->complianceMetadata) {
            $res['ComplianceMetadata'] = null !== $this->complianceMetadata ? $this->complianceMetadata->toArray($noStream) : $this->complianceMetadata;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->crossRegionConnectionStatus) {
            $res['CrossRegionConnectionStatus'] = $this->crossRegionConnectionStatus;
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
            if (\is_array($this->entitySource)) {
                $res['EntitySource'] = [];
                foreach ($this->entitySource as $key1 => $value1) {
                    $res['EntitySource'][$key1] = $value1;
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

        if (null !== $this->payFromType) {
            $res['PayFromType'] = $this->payFromType;
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

        if (null !== $this->serviceDocumentInfos) {
            if (\is_array($this->serviceDocumentInfos)) {
                $res['ServiceDocumentInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceDocumentInfos as $item1) {
                    $res['ServiceDocumentInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInfos) {
            if (\is_array($this->serviceInfos)) {
                $res['ServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceInfos as $item1) {
                    $res['ServiceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['Statistic'] = null !== $this->statistic ? $this->statistic->toArray($noStream) : $this->statistic;
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

        if (null !== $this->supportContacts) {
            if (\is_array($this->supportContacts)) {
                $res['SupportContacts'] = [];
                $n1 = 0;
                foreach ($this->supportContacts as $item1) {
                    $res['SupportContacts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['BuildParameters'])) {
            $model->buildParameters = $map['BuildParameters'];
        }

        if (isset($map['Categories'])) {
            $model->categories = $map['Categories'];
        }

        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }

        if (isset($map['ComplianceMetadata'])) {
            $model->complianceMetadata = complianceMetadata::fromMap($map['ComplianceMetadata']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CrossRegionConnectionStatus'])) {
            $model->crossRegionConnectionStatus = $map['CrossRegionConnectionStatus'];
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
            if (!empty($map['EntitySource'])) {
                $model->entitySource = [];
                foreach ($map['EntitySource'] as $key1 => $value1) {
                    $model->entitySource[$key1] = $value1;
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

        if (isset($map['PayFromType'])) {
            $model->payFromType = $map['PayFromType'];
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

        if (isset($map['ServiceDocumentInfos'])) {
            if (!empty($map['ServiceDocumentInfos'])) {
                $model->serviceDocumentInfos = [];
                $n1 = 0;
                foreach ($map['ServiceDocumentInfos'] as $item1) {
                    $model->serviceDocumentInfos[$n1++] = serviceDocumentInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n1 = 0;
                foreach ($map['ServiceInfos'] as $item1) {
                    $model->serviceInfos[$n1++] = serviceInfos::fromMap($item1);
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

        if (isset($map['SupportContacts'])) {
            if (!empty($map['SupportContacts'])) {
                $model->supportContacts = [];
                $n1 = 0;
                foreach ($map['SupportContacts'] as $item1) {
                    $model->supportContacts[$n1++] = supportContacts::fromMap($item1);
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
