<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Resource instance ID bound to the environment, including container instance ID or VpcId.
     *
     * @example vpc-xxxxx
     *
     * @var string
     */
    public $bindResourceId;

    /**
     * @description Profile of bound resources.
     *
     * @example Default
     *
     * @var string
     */
    public $bindResourceProfile;

    /**
     * @description The state of the bound resource.
     *
     * @example running
     *
     * @var string
     */
    public $bindResourceStatus;

    /**
     * @description The storage duration of bound resources (days).
     *
     * @example 15
     *
     * @var string
     */
    public $bindResourceStoreDuration;

    /**
     * @description The bound resource type.
     *
     * @example ECS
     *
     * @var string
     */
    public $bindResourceType;

    /**
     * @description Bind the network segment of the vpc.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $bindVpcCidr;

    /**
     * @description Environment instance ID.
     *
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Environment name.
     *
     * @example env1
     *
     * @var string
     */
    public $environmentName;

    /**
     * @description Environment type:
     * - Cloud: cloud service.
     * @example CS
     *
     * @var string
     */
    public $environmentType;

    /**
     * @description Grafana data source name.
     *
     * @example datasource1
     *
     * @var string
     */
    public $grafaDataSourceName;

    /**
     * @description Grafana data source unique ID.
     *
     * @example zuvw
     *
     * @var string
     */
    public $grafanaDatasourceUid;

    /**
     * @description Grafana directory name.
     *
     * @example folder1
     *
     * @var string
     */
    public $grafanaFolderTitle;

    /**
     * @description Grafana directory unique ID.
     *
     * @example xyz
     *
     * @var string
     */
    public $grafanaFolderUid;

    /**
     * @description Grafana directory URL.
     *
     * @example https://g.console.aliyun.com/dashboards/f/xxx/yyyy
     *
     * @var string
     */
    public $grafanaFolderUrl;

    /**
     * @description The bound prometheus instance ID.
     *
     * @example xxxxyyyyyzzzzz
     *
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @description The name of the bound prometheus instance.
     *
     * @example name1
     *
     * @var string
     */
    public $prometheusInstanceName;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2vezare****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description UserId.
     *
     * @example 13002222xxxx
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bindResourceId'            => 'BindResourceId',
        'bindResourceProfile'       => 'BindResourceProfile',
        'bindResourceStatus'        => 'BindResourceStatus',
        'bindResourceStoreDuration' => 'BindResourceStoreDuration',
        'bindResourceType'          => 'BindResourceType',
        'bindVpcCidr'               => 'BindVpcCidr',
        'environmentId'             => 'EnvironmentId',
        'environmentName'           => 'EnvironmentName',
        'environmentType'           => 'EnvironmentType',
        'grafaDataSourceName'       => 'GrafaDataSourceName',
        'grafanaDatasourceUid'      => 'GrafanaDatasourceUid',
        'grafanaFolderTitle'        => 'GrafanaFolderTitle',
        'grafanaFolderUid'          => 'GrafanaFolderUid',
        'grafanaFolderUrl'          => 'GrafanaFolderUrl',
        'prometheusInstanceId'      => 'PrometheusInstanceId',
        'prometheusInstanceName'    => 'PrometheusInstanceName',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'tags'                      => 'Tags',
        'userId'                    => 'UserId',
        'vpcId'                     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindResourceId) {
            $res['BindResourceId'] = $this->bindResourceId;
        }
        if (null !== $this->bindResourceProfile) {
            $res['BindResourceProfile'] = $this->bindResourceProfile;
        }
        if (null !== $this->bindResourceStatus) {
            $res['BindResourceStatus'] = $this->bindResourceStatus;
        }
        if (null !== $this->bindResourceStoreDuration) {
            $res['BindResourceStoreDuration'] = $this->bindResourceStoreDuration;
        }
        if (null !== $this->bindResourceType) {
            $res['BindResourceType'] = $this->bindResourceType;
        }
        if (null !== $this->bindVpcCidr) {
            $res['BindVpcCidr'] = $this->bindVpcCidr;
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
        if (null !== $this->grafaDataSourceName) {
            $res['GrafaDataSourceName'] = $this->grafaDataSourceName;
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
        if (null !== $this->grafanaFolderUrl) {
            $res['GrafanaFolderUrl'] = $this->grafanaFolderUrl;
        }
        if (null !== $this->prometheusInstanceId) {
            $res['PrometheusInstanceId'] = $this->prometheusInstanceId;
        }
        if (null !== $this->prometheusInstanceName) {
            $res['PrometheusInstanceName'] = $this->prometheusInstanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['BindResourceId'])) {
            $model->bindResourceId = $map['BindResourceId'];
        }
        if (isset($map['BindResourceProfile'])) {
            $model->bindResourceProfile = $map['BindResourceProfile'];
        }
        if (isset($map['BindResourceStatus'])) {
            $model->bindResourceStatus = $map['BindResourceStatus'];
        }
        if (isset($map['BindResourceStoreDuration'])) {
            $model->bindResourceStoreDuration = $map['BindResourceStoreDuration'];
        }
        if (isset($map['BindResourceType'])) {
            $model->bindResourceType = $map['BindResourceType'];
        }
        if (isset($map['BindVpcCidr'])) {
            $model->bindVpcCidr = $map['BindVpcCidr'];
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
        if (isset($map['GrafaDataSourceName'])) {
            $model->grafaDataSourceName = $map['GrafaDataSourceName'];
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
        if (isset($map['GrafanaFolderUrl'])) {
            $model->grafanaFolderUrl = $map['GrafanaFolderUrl'];
        }
        if (isset($map['PrometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['PrometheusInstanceId'];
        }
        if (isset($map['PrometheusInstanceName'])) {
            $model->prometheusInstanceName = $map['PrometheusInstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
