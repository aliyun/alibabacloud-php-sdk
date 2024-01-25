<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody\data\advancedConfigs;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody\data\platform;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody\data\siteSurveyReport;
use AlibabaCloud\SDK\Adp\V20210720\Models\InstanceInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var advancedConfigs
     */
    public $advancedConfigs;

    /**
     * @example Deprecated
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterUID;

    /**
     * @example 2022-05-11T00:00:00+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredAt;

    /**
     * @var string
     */
    public $foundationType;

    /**
     * @example v1.4.3
     *
     * @var string
     */
    public $foundationVersion;

    /**
     * @example 484c4a1e-69c7-4395-8e02-xxx
     *
     * @var string
     */
    public $foundationVersionUID;

    /**
     * @var InstanceInfo[]
     */
    public $instanceList;

    /**
     * @example INITING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $location;

    /**
     * @example env-demo
     *
     * @var string
     */
    public $name;

    /**
     * @example v1.0.0
     *
     * @var string
     */
    public $oldProductVersion;

    /**
     * @example 79afa0dc-8557-4cff-aec7-xxx
     *
     * @var string
     */
    public $oldProductVersionUID;

    /**
     * @var platform
     */
    public $platform;

    /**
     * @var \AlibabaCloud\SDK\Adp\V20210720\Models\Platform[]
     */
    public $platformList;

    /**
     * @example INIT
     *
     * @var string
     */
    public $platformStatus;

    /**
     * @example demo-product
     *
     * @var string
     */
    public $productName;

    /**
     * @example v1.0.2
     *
     * @var string
     */
    public $productVersion;

    /**
     * @var siteSurveyReport
     */
    public $siteSurveyReport;

    /**
     * @example b8ec63af-7859-4464-9cff-xxx
     *
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $vendorConfig;

    /**
     * @example alicloud
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'advancedConfigs'      => 'advancedConfigs',
        'clusterId'            => 'clusterId',
        'clusterUID'           => 'clusterUID',
        'createdAt'            => 'createdAt',
        'description'          => 'description',
        'expiredAt'            => 'expiredAt',
        'foundationType'       => 'foundationType',
        'foundationVersion'    => 'foundationVersion',
        'foundationVersionUID' => 'foundationVersionUID',
        'instanceList'         => 'instanceList',
        'instanceStatus'       => 'instanceStatus',
        'location'             => 'location',
        'name'                 => 'name',
        'oldProductVersion'    => 'oldProductVersion',
        'oldProductVersionUID' => 'oldProductVersionUID',
        'platform'             => 'platform',
        'platformList'         => 'platformList',
        'platformStatus'       => 'platformStatus',
        'productName'          => 'productName',
        'productVersion'       => 'productVersion',
        'siteSurveyReport'     => 'siteSurveyReport',
        'uid'                  => 'uid',
        'vendorConfig'         => 'vendorConfig',
        'vendorType'           => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedConfigs) {
            $res['advancedConfigs'] = null !== $this->advancedConfigs ? $this->advancedConfigs->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterUID) {
            $res['clusterUID'] = $this->clusterUID;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->expiredAt) {
            $res['expiredAt'] = $this->expiredAt;
        }
        if (null !== $this->foundationType) {
            $res['foundationType'] = $this->foundationType;
        }
        if (null !== $this->foundationVersion) {
            $res['foundationVersion'] = $this->foundationVersion;
        }
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }
        if (null !== $this->instanceList) {
            $res['instanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['instanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceStatus) {
            $res['instanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->oldProductVersion) {
            $res['oldProductVersion'] = $this->oldProductVersion;
        }
        if (null !== $this->oldProductVersionUID) {
            $res['oldProductVersionUID'] = $this->oldProductVersionUID;
        }
        if (null !== $this->platform) {
            $res['platform'] = null !== $this->platform ? $this->platform->toMap() : null;
        }
        if (null !== $this->platformList) {
            $res['platformList'] = [];
            if (null !== $this->platformList && \is_array($this->platformList)) {
                $n = 0;
                foreach ($this->platformList as $item) {
                    $res['platformList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->platformStatus) {
            $res['platformStatus'] = $this->platformStatus;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productVersion) {
            $res['productVersion'] = $this->productVersion;
        }
        if (null !== $this->siteSurveyReport) {
            $res['siteSurveyReport'] = null !== $this->siteSurveyReport ? $this->siteSurveyReport->toMap() : null;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->vendorConfig) {
            $res['vendorConfig'] = $this->vendorConfig;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['advancedConfigs'])) {
            $model->advancedConfigs = advancedConfigs::fromMap($map['advancedConfigs']);
        }
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
        if (isset($map['clusterUID'])) {
            $model->clusterUID = $map['clusterUID'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['expiredAt'])) {
            $model->expiredAt = $map['expiredAt'];
        }
        if (isset($map['foundationType'])) {
            $model->foundationType = $map['foundationType'];
        }
        if (isset($map['foundationVersion'])) {
            $model->foundationVersion = $map['foundationVersion'];
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }
        if (isset($map['instanceList'])) {
            if (!empty($map['instanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['instanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? InstanceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instanceStatus'])) {
            $model->instanceStatus = $map['instanceStatus'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['oldProductVersion'])) {
            $model->oldProductVersion = $map['oldProductVersion'];
        }
        if (isset($map['oldProductVersionUID'])) {
            $model->oldProductVersionUID = $map['oldProductVersionUID'];
        }
        if (isset($map['platform'])) {
            $model->platform = platform::fromMap($map['platform']);
        }
        if (isset($map['platformList'])) {
            if (!empty($map['platformList'])) {
                $model->platformList = [];
                $n                   = 0;
                foreach ($map['platformList'] as $item) {
                    $model->platformList[$n++] = null !== $item ? \AlibabaCloud\SDK\Adp\V20210720\Models\Platform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['platformStatus'])) {
            $model->platformStatus = $map['platformStatus'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productVersion'])) {
            $model->productVersion = $map['productVersion'];
        }
        if (isset($map['siteSurveyReport'])) {
            $model->siteSurveyReport = siteSurveyReport::fromMap($map['siteSurveyReport']);
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['vendorConfig'])) {
            $model->vendorConfig = $map['vendorConfig'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
