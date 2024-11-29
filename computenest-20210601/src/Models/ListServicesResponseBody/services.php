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
     * @example cloud_ssd
     *
     * @var string
     */
    public $categories;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @example cmjj00xxxx
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example ComputeNest
     *
     * @var string
     */
    public $deployFrom;

    /**
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @example 2022-01-21T10:35:44Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $score;

    /**
     * @example service-6b5d632edd394dxxxxxx
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
     * @example Online
     *
     * @var string
     */
    public $status;

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
     * @var string
     */
    public $trialDuration;

    /**
     * @example Trial
     *
     * @var string
     */
    public $trialType;

    /**
     * @example 4
     *
     * @var string
     */
    public $version;

    /**
     * @example v2.0.0
     *
     * @var string
     */
    public $versionName;

    /**
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
