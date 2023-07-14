<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponseBody\dashboardVos;

use AlibabaCloud\Tea\Model;

class i18nChild extends Model
{
    /**
     * @description The type of the Grafana dashboard. This parameter has the same effect as the Exporter parameter whereas provides clearer implication.
     *
     * @example Node
     *
     * @var string
     */
    public $dashboardType;

    /**
     * @description The type of the exporter access source. Valid values:
     *
     *   Prometheus
     *   Node
     *   GPU
     *   Redis
     *   MySQL
     *   Kafka
     *   NGINX V2
     *   Nginx
     *   ZooKeeper
     *   MongoDB
     *   RabbitMQ
     *   PostgreSQL
     *   Kubernetes
     *   Client Library
     *   Elasticsearch
     *   RocketMQ
     *
     * @example Nginx
     *
     * @var string
     */
    public $exporter;

    /**
     * @description The URL of the Grafana dashboard.
     *
     * @example http://g.console.aliyun.com/d/1131971649496228-*****-59/ApiServer?orgId=3**&refresh=60s
     *
     * @var string
     */
    public $httpUrl;

    /**
     * @description The URL of the Grafana dashboard.
     *
     * @example http://g.console.aliyun.com/d/1131971649496228-*****-59/ApiServer?orgId=3**&refresh=60s
     *
     * @var string
     */
    public $httpsUrl;

    /**
     * @description The ID of the Grafana dashboard. The value is unique only when you install the Grafana dashboard.
     *
     * @example 1100**
     *
     * @var string
     */
    public $id;

    /**
     * @description Indicates whether the exporter was provided by ARMS. Valid values:
     *
     *   `true`: The exporter is provided by ARMS.
     *   `false`: The exporter is not provided by ARMS.
     *
     * @example false
     *
     * @var bool
     */
    public $isArmsExporter;

    /**
     * @description The category of the Grafana dashboard. Valid values: BASIC, THIRD, LIMIT, and CUSTOM.
     *
     * @example BASIC
     *
     * @var string
     */
    public $kind;

    /**
     * @description The language of the Grafana dashboard.
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description The name of the Grafana dashboard. This parameter is different from the **Title** parameter as this parameter cannot be changed.
     *
     * @example k8s-node-overview
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the Grafana dashboard has a new version that was available for upgrade.
     *
     * @example false
     *
     * @var bool
     */
    public $needUpdate;

    /**
     * @description The tags of the Grafana dashboard.
     *
     * @var string[]
     */
    public $tags;

    /**
     * @description The timestamp when the Grafana dashboard was created.
     *
     * @example 1590136924
     *
     * @var string
     */
    public $time;

    /**
     * @description The title of the Grafana dashboard.
     *
     * @example ApiServer
     *
     * @var string
     */
    public $title;

    /**
     * @description The type of the Grafana dashboard. Valid values:
     *
     *   `dash-db`: a dashboard
     *   `dash-folder`: a folder that can include a dashboard
     *
     * @example dash-db
     *
     * @var string
     */
    public $type;

    /**
     * @description The unique identifier of a dashboard when multiple Grafana dashboards were installed. It is a unique business ID displayed on the page.
     *
     * @example 1131971649496228-*****-59
     *
     * @var string
     */
    public $uid;

    /**
     * @description The complete URL of the Grafana dashboard.
     *
     * @example http://g.console.aliyun.com/d/1131971649496228-*****-59/ApiServer?orgId=3**&refresh=60s
     *
     * @var string
     */
    public $url;

    /**
     * @description The version of the Grafana dashboard. The combination of version and name uniquely identifies a dashboard.
     *
     * @example v2
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'dashboardType'  => 'DashboardType',
        'exporter'       => 'Exporter',
        'httpUrl'        => 'HttpUrl',
        'httpsUrl'       => 'HttpsUrl',
        'id'             => 'Id',
        'isArmsExporter' => 'IsArmsExporter',
        'kind'           => 'Kind',
        'language'       => 'Language',
        'name'           => 'Name',
        'needUpdate'     => 'NeedUpdate',
        'tags'           => 'Tags',
        'time'           => 'Time',
        'title'          => 'Title',
        'type'           => 'Type',
        'uid'            => 'Uid',
        'url'            => 'Url',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboardType) {
            $res['DashboardType'] = $this->dashboardType;
        }
        if (null !== $this->exporter) {
            $res['Exporter'] = $this->exporter;
        }
        if (null !== $this->httpUrl) {
            $res['HttpUrl'] = $this->httpUrl;
        }
        if (null !== $this->httpsUrl) {
            $res['HttpsUrl'] = $this->httpsUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isArmsExporter) {
            $res['IsArmsExporter'] = $this->isArmsExporter;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->needUpdate) {
            $res['NeedUpdate'] = $this->needUpdate;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return i18nChild
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DashboardType'])) {
            $model->dashboardType = $map['DashboardType'];
        }
        if (isset($map['Exporter'])) {
            $model->exporter = $map['Exporter'];
        }
        if (isset($map['HttpUrl'])) {
            $model->httpUrl = $map['HttpUrl'];
        }
        if (isset($map['HttpsUrl'])) {
            $model->httpsUrl = $map['HttpsUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsArmsExporter'])) {
            $model->isArmsExporter = $map['IsArmsExporter'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NeedUpdate'])) {
            $model->needUpdate = $map['NeedUpdate'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
