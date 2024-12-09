<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services\commodity;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services\serviceInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services\tags;
use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @description The category of the service.
     *
     * @example cloud_ssd
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
     * @description Service deployment approach. Valid values:
     * - ComputeNest
     * @example ComputeNest
     *
     * @var string
     */
    public $deployFrom;

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
     * @description The time when the service was published.
     *
     * @example 2022-01-21T10:35:44Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description Service recommendation score.
     *
     * @example 5
     *
     * @var int
     */
    public $score;

    /**
     * @description The service ID.
     *
     * @example service-6b5d632edd394dxxxxxx
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
     * - operation: The service is a hosted O&M service.
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The state of the service. Valid values:
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
     * @description The name of the service provider.
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The name of service provider.
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $supplierNameEng;

    /**
     * @description The Alibaba Cloud account ID of the service provider.
     *
     * @example 1436322xxxxx
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
     * @description The tenant type of the managed service. Valid values:
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
     * @var string
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
     * @description The version of the service.
     *
     * @example 4
     *
     * @var string
     */
    public $version;

    /**
     * @description The custom version name defined by the service provider.
     *
     * @example v2.0.0
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
    protected $_name = [
        'categories'             => 'Categories',
        'commodity'              => 'Commodity',
        'commodityCode'          => 'CommodityCode',
        'deployFrom'             => 'DeployFrom',
        'deployType'             => 'DeployType',
        'publishTime'            => 'PublishTime',
        'score'                  => 'Score',
        'serviceId'              => 'ServiceId',
        'serviceInfos'           => 'ServiceInfos',
        'serviceProductUrl'      => 'ServiceProductUrl',
        'serviceType'            => 'ServiceType',
        'status'                 => 'Status',
        'supplierName'           => 'SupplierName',
        'supplierNameEng'        => 'SupplierNameEng',
        'supplierUid'            => 'SupplierUid',
        'supplierUrl'            => 'SupplierUrl',
        'tags'                   => 'Tags',
        'tenantType'             => 'TenantType',
        'trialDuration'          => 'TrialDuration',
        'trialType'              => 'TrialType',
        'version'                => 'Version',
        'versionName'            => 'VersionName',
        'virtualInternetService' => 'VirtualInternetService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toMap() : null;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->deployFrom) {
            $res['DeployFrom'] = $this->deployFrom;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierNameEng) {
            $res['SupplierNameEng'] = $this->supplierNameEng;
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
        if (null !== $this->virtualInternetService) {
            $res['VirtualInternetService'] = $this->virtualInternetService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            $model->categories = $map['Categories'];
        }
        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DeployFrom'])) {
            $model->deployFrom = $map['DeployFrom'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierNameEng'])) {
            $model->supplierNameEng = $map['SupplierNameEng'];
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
        if (isset($map['VirtualInternetService'])) {
            $model->virtualInternetService = $map['VirtualInternetService'];
        }

        return $model;
    }
}
