<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardsByNameRequest extends Model
{
    /**
     * @description The ID of the cluster. If the ClusterType parameter is not set to `cloud-product-prometheus` or `cms-enterprise-prometheus`, you must specify the ClusterId parameter.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster type. Valid values:
     *
     *   vpc-prometheus
     *   cloud-product-prometheus
     *   cms-enterprise-prometheus
     *   ExternalKubernetes
     *   Ask
     *   Kubernetes
     *   ManagedKubernetes
     *   remote-write-prometheus
     *   GlobalViewV2
     *
     * @example cloud-product-prometheus
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The name of the dashboard.
     *
     * @example edas-ingress-url
     *
     * @var string
     */
    public $dashBoardName;

    /**
     * @description The version of the dashboard.
     *
     * @example latest
     *
     * @var string
     */
    public $dashBoardVersion;

    /**
     * @description The type of the data source. Valid values:
     *
     *   loki
     *   prometheus
     *
     * @example loki
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The name of the dashboard group.
     *
     * @example EDAS
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Specifies whether to display the Grafana dashboard only in the Application Real-Time Monitoring Service (ARMS) console.
     *
     * @example true
     *
     * @var bool
     */
    public $onlyQuery;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * @example edas
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'clusterType'      => 'ClusterType',
        'dashBoardName'    => 'DashBoardName',
        'dashBoardVersion' => 'DashBoardVersion',
        'dataSourceType'   => 'DataSourceType',
        'groupName'        => 'GroupName',
        'onlyQuery'        => 'OnlyQuery',
        'productCode'      => 'ProductCode',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->dashBoardName) {
            $res['DashBoardName'] = $this->dashBoardName;
        }
        if (null !== $this->dashBoardVersion) {
            $res['DashBoardVersion'] = $this->dashBoardVersion;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->onlyQuery) {
            $res['OnlyQuery'] = $this->onlyQuery;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardsByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['DashBoardName'])) {
            $model->dashBoardName = $map['DashBoardName'];
        }
        if (isset($map['DashBoardVersion'])) {
            $model->dashBoardVersion = $map['DashBoardVersion'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['OnlyQuery'])) {
            $model->onlyQuery = $map['OnlyQuery'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
