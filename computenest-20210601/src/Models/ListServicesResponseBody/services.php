<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services\commodity;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services\serviceInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services\tags;

class services extends Model
{
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
    public $deployFrom;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var int
     */
    public $score;

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
    public $status;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $supplierNameEng;

    /**
     * @var int
     */
    public $supplierUid;

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
    public $trialDuration;

    /**
     * @var string
     */
    public $trialType;

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
        'categories' => 'Categories',
        'commodity' => 'Commodity',
        'commodityCode' => 'CommodityCode',
        'deployFrom' => 'DeployFrom',
        'deployType' => 'DeployType',
        'publishTime' => 'PublishTime',
        'score' => 'Score',
        'serviceId' => 'ServiceId',
        'serviceInfos' => 'ServiceInfos',
        'serviceProductUrl' => 'ServiceProductUrl',
        'serviceType' => 'ServiceType',
        'status' => 'Status',
        'supplierName' => 'SupplierName',
        'supplierNameEng' => 'SupplierNameEng',
        'supplierUid' => 'SupplierUid',
        'supplierUrl' => 'SupplierUrl',
        'tags' => 'Tags',
        'tenantType' => 'TenantType',
        'trialDuration' => 'TrialDuration',
        'trialType' => 'TrialType',
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }

        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toArray($noStream) : $this->commodity;
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
            if (\is_array($this->serviceInfos)) {
                $res['ServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceInfos as $item1) {
                    $res['ServiceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ServiceInfos'] as $item1) {
                    $model->serviceInfos[$n1] = serviceInfos::fromMap($item1);
                    ++$n1;
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
