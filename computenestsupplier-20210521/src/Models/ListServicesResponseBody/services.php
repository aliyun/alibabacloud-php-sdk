<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponseBody\services\commodity;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponseBody\services\serviceInfos;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponseBody\services\serviceLocaleConfigs;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponseBody\services\tags;

class services extends Model
{
    /**
     * @var string
     */
    public $approvalType;

    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var string
     */
    public $artifactVersion;

    /**
     * @var string
     */
    public $buildInfo;

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
    public $commodityCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var bool
     */
    public $hasBeta;

    /**
     * @var bool
     */
    public $hasDraft;

    /**
     * @var string
     */
    public $latestResellSourceServiceVersion;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $resellApplyStatus;

    /**
     * @var string
     */
    public $resellServiceId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceDiscoverable;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @var serviceLocaleConfigs[]
     */
    public $serviceLocaleConfigs;

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
    public $sourceImage;

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
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $supplierUrl;

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
    public $trialType;

    /**
     * @var string
     */
    public $updateTime;

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
    protected $_name = [
        'approvalType' => 'ApprovalType',
        'artifactId' => 'ArtifactId',
        'artifactVersion' => 'ArtifactVersion',
        'buildInfo' => 'BuildInfo',
        'categories' => 'Categories',
        'commodity' => 'Commodity',
        'commodityCode' => 'CommodityCode',
        'createTime' => 'CreateTime',
        'defaultVersion' => 'DefaultVersion',
        'deployType' => 'DeployType',
        'hasBeta' => 'HasBeta',
        'hasDraft' => 'HasDraft',
        'latestResellSourceServiceVersion' => 'LatestResellSourceServiceVersion',
        'publishTime' => 'PublishTime',
        'relationType' => 'RelationType',
        'resellApplyStatus' => 'ResellApplyStatus',
        'resellServiceId' => 'ResellServiceId',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceDiscoverable' => 'ServiceDiscoverable',
        'serviceId' => 'ServiceId',
        'serviceInfos' => 'ServiceInfos',
        'serviceLocaleConfigs' => 'ServiceLocaleConfigs',
        'serviceType' => 'ServiceType',
        'shareType' => 'ShareType',
        'sourceImage' => 'SourceImage',
        'sourceServiceId' => 'SourceServiceId',
        'sourceServiceVersion' => 'SourceServiceVersion',
        'sourceSupplierName' => 'SourceSupplierName',
        'status' => 'Status',
        'supplierName' => 'SupplierName',
        'supplierUrl' => 'SupplierUrl',
        'tags' => 'Tags',
        'tenantType' => 'TenantType',
        'trialType' => 'TrialType',
        'updateTime' => 'UpdateTime',
        'version' => 'Version',
        'versionName' => 'VersionName',
        'virtualInternetService' => 'VirtualInternetService',
    ];

    public function validate()
    {
        if (null !== $this->commodity) {
            $this->commodity->validate();
        }
        if (\is_array($this->serviceInfos)) {
            Model::validateArray($this->serviceInfos);
        }
        if (\is_array($this->serviceLocaleConfigs)) {
            Model::validateArray($this->serviceLocaleConfigs);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }

        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }

        if (null !== $this->artifactVersion) {
            $res['ArtifactVersion'] = $this->artifactVersion;
        }

        if (null !== $this->buildInfo) {
            $res['BuildInfo'] = $this->buildInfo;
        }

        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }

        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toArray($noStream) : $this->commodity;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->hasBeta) {
            $res['HasBeta'] = $this->hasBeta;
        }

        if (null !== $this->hasDraft) {
            $res['HasDraft'] = $this->hasDraft;
        }

        if (null !== $this->latestResellSourceServiceVersion) {
            $res['LatestResellSourceServiceVersion'] = $this->latestResellSourceServiceVersion;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->resellApplyStatus) {
            $res['ResellApplyStatus'] = $this->resellApplyStatus;
        }

        if (null !== $this->resellServiceId) {
            $res['ResellServiceId'] = $this->resellServiceId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceDiscoverable) {
            $res['ServiceDiscoverable'] = $this->serviceDiscoverable;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInfos) {
            if (\is_array($this->serviceInfos)) {
                $res['ServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceInfos as $item1) {
                    $res['ServiceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceLocaleConfigs) {
            if (\is_array($this->serviceLocaleConfigs)) {
                $res['ServiceLocaleConfigs'] = [];
                $n1 = 0;
                foreach ($this->serviceLocaleConfigs as $item1) {
                    $res['ServiceLocaleConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }

        if (null !== $this->sourceImage) {
            $res['SourceImage'] = $this->sourceImage;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }

        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantType) {
            $res['TenantType'] = $this->tenantType;
        }

        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }

        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }

        if (isset($map['ArtifactVersion'])) {
            $model->artifactVersion = $map['ArtifactVersion'];
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

        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['HasBeta'])) {
            $model->hasBeta = $map['HasBeta'];
        }

        if (isset($map['HasDraft'])) {
            $model->hasDraft = $map['HasDraft'];
        }

        if (isset($map['LatestResellSourceServiceVersion'])) {
            $model->latestResellSourceServiceVersion = $map['LatestResellSourceServiceVersion'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['ResellApplyStatus'])) {
            $model->resellApplyStatus = $map['ResellApplyStatus'];
        }

        if (isset($map['ResellServiceId'])) {
            $model->resellServiceId = $map['ResellServiceId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceDiscoverable'])) {
            $model->serviceDiscoverable = $map['ServiceDiscoverable'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n1 = 0;
                foreach ($map['ServiceInfos'] as $item1) {
                    $model->serviceInfos[$n1] = serviceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceLocaleConfigs'])) {
            if (!empty($map['ServiceLocaleConfigs'])) {
                $model->serviceLocaleConfigs = [];
                $n1 = 0;
                foreach ($map['ServiceLocaleConfigs'] as $item1) {
                    $model->serviceLocaleConfigs[$n1] = serviceLocaleConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }

        if (isset($map['SourceImage'])) {
            $model->sourceImage = $map['SourceImage'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantType'])) {
            $model->tenantType = $map['TenantType'];
        }

        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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

        return $model;
    }
}
