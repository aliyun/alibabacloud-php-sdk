<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardsRequest extends Model
{
    /**
     * @description The ID of the ACK cluster.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Valid values: ACK, ASK, cloud-product-prometheus, and Node. You can query the dashboards of a virtual cluster by specifying the cluster type. For InfluxDB, set this parameter to `cloud-product-prometheus`.
     *
     * @example Node
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The unique names of the dashboards. You can query dashboards by specifying their names. The **dashboard title** can be changed whereas the **dashboard name** cannot. You can specify multiple names and separate them with commas (,), for example, `k8s-event,k8s-overview`. A dashboard may have multiple versions. If you want to specify a version, you can add version information after the name, for example, `k8s-event:v1,k8s-overview:latest`.
     *
     * @example k8s-node-overview
     *
     * @var string
     */
    public $dashboardName;

    /**
     * @description The language of the returned Grafana dashboard. Valid values: en and zh. Default value: en.
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The cloud service code. This parameter is required if you set the ClusterType parameter to `cloud-product-prometheus`. The following cloud services are available: Serverless App Engine, Microservices Engine, Message Queue for Apache RocketMQ, Lindorm, Message Queue for Apache Kafka, ApsaraDB for ClickHouse, Data Lake Analytics, Message Queue for RabbitMQ, ApsaraDB for MongoDB, Time Series Database (TSDB) for InfluxDB, MSE Cloud-native Gateway, Grafana Service, SchedulerX, Global Transaction Service, Enterprise Distributed Application Service, Machine Learning Platform for AI - Elastic Algorithm Service (EAS), Application High Availability Service, and Performance Testing.
     *
     * @example xxxx
     *
     * @var string
     */
    public $product;

    /**
     * @description Specifies whether to create or query a virtual cluster. This parameter provides backward compatibility.
     *
     * @example false
     *
     * @var bool
     */
    public $recreateSwitch;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The dashboard title. The dashboard title can be changed. We recommend that you specify the **DashboardName** parameter.
     *
     * @example ApiServer
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterType'    => 'ClusterType',
        'dashboardName'  => 'DashboardName',
        'language'       => 'Language',
        'product'        => 'Product',
        'recreateSwitch' => 'RecreateSwitch',
        'regionId'       => 'RegionId',
        'title'          => 'Title',
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
        if (null !== $this->dashboardName) {
            $res['DashboardName'] = $this->dashboardName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->recreateSwitch) {
            $res['RecreateSwitch'] = $this->recreateSwitch;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardsRequest
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
        if (isset($map['DashboardName'])) {
            $model->dashboardName = $map['DashboardName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RecreateSwitch'])) {
            $model->recreateSwitch = $map['RecreateSwitch'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
