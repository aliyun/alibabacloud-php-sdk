<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments\addons;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments\features;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments\tags;
use AlibabaCloud\Tea\Model;

class environments extends Model
{
    /**
     * @description Addon list.
     *
     * @var addons[]
     */
    public $addons;

    /**
     * @description Id of the resource to be bound.
     *
     * @example vpc-bp1bgo8ronn
     *
     * @var string
     */
    public $bindResourceId;

    /**
     * @description Profile of the resource to be bound.
     *
     * @example xxx
     *
     * @var string
     */
    public $bindResourceProfile;

    /**
     * @description Type of the resource to be bound.
     *
     * @example VPC
     *
     * @var string
     */
    public $bindResourceType;

    /**
     * @description Bound Vpc IP Cidr.
     *
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $bindVpcCidr;

    /**
     * @description Create time.
     *
     * @example 2023-03-24 11:58:35 +0800
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Created User ID.
     *
     * @example 12378523784982
     *
     * @var string
     */
    public $createdUserId;

    /**
     * @description Environment ID.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Environment name.
     *
     * @example feiliks-biz-prod-edas
     *
     * @var string
     */
    public $environmentName;

    /**
     * @description Environment type.
     *
     * @example CS
     *
     * @var string
     */
    public $environmentType;

    /**
     * @description Featyre list.
     *
     * @var features[]
     */
    public $features;

    /**
     * @description Grafana datasource UID.
     *
     * @example 12374890
     *
     * @var string
     */
    public $grafanaDatasourceUid;

    /**
     * @description Grafana folder title.
     *
     * @example filepath
     *
     * @var string
     */
    public $grafanaFolderTitle;

    /**
     * @description Grafana folder UID.
     *
     * @example 1798319482935
     *
     * @var string
     */
    public $grafanaFolderUid;

    /**
     * @description Latest Release create time.
     *
     * @example 2023-09-22T16:56:29+08:00
     *
     * @var string
     */
    public $latestReleaseCreateTime;

    /**
     * @var string
     */
    public $managedType;

    /**
     * @description Prometheus ID.
     *
     * @example 124769812
     *
     * @var int
     */
    public $prometheusId;

    /**
     * @description Prometheus instance ID.
     *
     * @example vpc-m5e4alj2i24ndbn
     *
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @description The ID of the region.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Number of Release.
     *
     * @example 122
     *
     * @var int
     */
    public $releaseCount;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmvt3xpr5aema
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag value.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description User ID.
     *
     * @example 13990957477389
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'addons'                  => 'Addons',
        'bindResourceId'          => 'BindResourceId',
        'bindResourceProfile'     => 'BindResourceProfile',
        'bindResourceType'        => 'BindResourceType',
        'bindVpcCidr'             => 'BindVpcCidr',
        'createTime'              => 'CreateTime',
        'createdUserId'           => 'CreatedUserId',
        'environmentId'           => 'EnvironmentId',
        'environmentName'         => 'EnvironmentName',
        'environmentType'         => 'EnvironmentType',
        'features'                => 'Features',
        'grafanaDatasourceUid'    => 'GrafanaDatasourceUid',
        'grafanaFolderTitle'      => 'GrafanaFolderTitle',
        'grafanaFolderUid'        => 'GrafanaFolderUid',
        'latestReleaseCreateTime' => 'LatestReleaseCreateTime',
        'managedType'             => 'ManagedType',
        'prometheusId'            => 'PrometheusId',
        'prometheusInstanceId'    => 'PrometheusInstanceId',
        'regionId'                => 'RegionId',
        'releaseCount'            => 'ReleaseCount',
        'resourceGroupId'         => 'ResourceGroupId',
        'tags'                    => 'Tags',
        'userId'                  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addons) {
            $res['Addons'] = [];
            if (null !== $this->addons && \is_array($this->addons)) {
                $n = 0;
                foreach ($this->addons as $item) {
                    $res['Addons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bindResourceId) {
            $res['BindResourceId'] = $this->bindResourceId;
        }
        if (null !== $this->bindResourceProfile) {
            $res['BindResourceProfile'] = $this->bindResourceProfile;
        }
        if (null !== $this->bindResourceType) {
            $res['BindResourceType'] = $this->bindResourceType;
        }
        if (null !== $this->bindVpcCidr) {
            $res['BindVpcCidr'] = $this->bindVpcCidr;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createdUserId) {
            $res['CreatedUserId'] = $this->createdUserId;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->environmentName) {
            $res['EnvironmentName'] = $this->environmentName;
        }
        if (null !== $this->environmentType) {
            $res['EnvironmentType'] = $this->environmentType;
        }
        if (null !== $this->features) {
            $res['Features'] = [];
            if (null !== $this->features && \is_array($this->features)) {
                $n = 0;
                foreach ($this->features as $item) {
                    $res['Features'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->grafanaDatasourceUid) {
            $res['GrafanaDatasourceUid'] = $this->grafanaDatasourceUid;
        }
        if (null !== $this->grafanaFolderTitle) {
            $res['GrafanaFolderTitle'] = $this->grafanaFolderTitle;
        }
        if (null !== $this->grafanaFolderUid) {
            $res['GrafanaFolderUid'] = $this->grafanaFolderUid;
        }
        if (null !== $this->latestReleaseCreateTime) {
            $res['LatestReleaseCreateTime'] = $this->latestReleaseCreateTime;
        }
        if (null !== $this->managedType) {
            $res['ManagedType'] = $this->managedType;
        }
        if (null !== $this->prometheusId) {
            $res['PrometheusId'] = $this->prometheusId;
        }
        if (null !== $this->prometheusInstanceId) {
            $res['PrometheusInstanceId'] = $this->prometheusInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseCount) {
            $res['ReleaseCount'] = $this->releaseCount;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addons'])) {
            if (!empty($map['Addons'])) {
                $model->addons = [];
                $n             = 0;
                foreach ($map['Addons'] as $item) {
                    $model->addons[$n++] = null !== $item ? addons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BindResourceId'])) {
            $model->bindResourceId = $map['BindResourceId'];
        }
        if (isset($map['BindResourceProfile'])) {
            $model->bindResourceProfile = $map['BindResourceProfile'];
        }
        if (isset($map['BindResourceType'])) {
            $model->bindResourceType = $map['BindResourceType'];
        }
        if (isset($map['BindVpcCidr'])) {
            $model->bindVpcCidr = $map['BindVpcCidr'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatedUserId'])) {
            $model->createdUserId = $map['CreatedUserId'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['EnvironmentName'])) {
            $model->environmentName = $map['EnvironmentName'];
        }
        if (isset($map['EnvironmentType'])) {
            $model->environmentType = $map['EnvironmentType'];
        }
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n               = 0;
                foreach ($map['Features'] as $item) {
                    $model->features[$n++] = null !== $item ? features::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GrafanaDatasourceUid'])) {
            $model->grafanaDatasourceUid = $map['GrafanaDatasourceUid'];
        }
        if (isset($map['GrafanaFolderTitle'])) {
            $model->grafanaFolderTitle = $map['GrafanaFolderTitle'];
        }
        if (isset($map['GrafanaFolderUid'])) {
            $model->grafanaFolderUid = $map['GrafanaFolderUid'];
        }
        if (isset($map['LatestReleaseCreateTime'])) {
            $model->latestReleaseCreateTime = $map['LatestReleaseCreateTime'];
        }
        if (isset($map['ManagedType'])) {
            $model->managedType = $map['ManagedType'];
        }
        if (isset($map['PrometheusId'])) {
            $model->prometheusId = $map['PrometheusId'];
        }
        if (isset($map['PrometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['PrometheusInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseCount'])) {
            $model->releaseCount = $map['ReleaseCount'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
