<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the resource associated with the environment, such as the ACK cluster ID or VPC ID.
     *
     * @example vpc-xxxxx
     *
     * @var string
     */
    public $bindResourceId;

    /**
     * @description The profile of the resource.
     *
     * @example Default
     *
     * @var string
     */
    public $bindResourceProfile;

    /**
     * @description The status of the resource.
     *
     * @example running
     *
     * @var string
     */
    public $bindResourceStatus;

    /**
     * @description The retention period of the resource. Unit: days.
     *
     * @example 15
     *
     * @var string
     */
    public $bindResourceStoreDuration;

    /**
     * @description The resource type.
     *
     * @example ECS
     *
     * @var string
     */
    public $bindResourceType;

    /**
     * @description The VPC CIDR block.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $bindVpcCidr;

    /**
     * @description The status of the database that is bound to the Prometheus instance.
     *
     * Valid values:
     *
     *   UNINSTALLING
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   INSTALLING
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   UNINSTALLED
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   RUNNING
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   MODIFYING
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example RUNNING
     *
     * @var string
     */
    public $dbInstanceStatus;

    /**
     * @description The ID of the environment instance.
     *
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The environment name.
     *
     * @example env1
     *
     * @var string
     */
    public $environmentName;

    /**
     * @description Environment subtypes:
     * - CS: Currently supports ACK.
     * - ECS: ECS is currently supported.
     * - Cloud: Currently supports Cloud.
     *
     * @example ACK
     *
     * @var string
     */
    public $environmentSubType;

    /**
     * @description The type of the environment. Valid values:
     *
     *   CS: Container Service for Kubernetes (ACK)
     *   ECS: Elastic Compute Service
     *   Cloud: cloud service
     *
     * @example CS
     *
     * @var string
     */
    public $environmentType;

    /**
     * @description The payable resource plan. Valid values:
     *
     *   If the EnvironmentType parameter is set to CS, set the value to CS_Basic or CS_Pro.
     *   Otherwise, leave the parameter empty.
     *
     * @example CS_Basic
     *
     * @var string
     */
    public $feePackage;

    /**
     * @description The name of the Grafana data source.
     *
     * @example datasource1
     *
     * @var string
     */
    public $grafaDataSourceName;

    /**
     * @description The unique ID of the Grafana data source.
     *
     * @example zuvw
     *
     * @var string
     */
    public $grafanaDatasourceUid;

    /**
     * @description The name of the Grafana directory.
     *
     * @example folder1
     *
     * @var string
     */
    public $grafanaFolderTitle;

    /**
     * @description The unique ID of the Grafana directory.
     *
     * @example xyz
     *
     * @var string
     */
    public $grafanaFolderUid;

    /**
     * @description The URL of the Grafana directory.
     *
     * @example https://g.console.aliyun.com/dashboards/f/xxx/yyyy
     *
     * @var string
     */
    public $grafanaFolderUrl;

    /**
     * @description The ID of the Grafana workspace.
     *
     * @example grafana-cn-27a3m8eem0a
     *
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @description managed type:
     * - none: unmanaged. The default value for ACK clusters.
     * - agent: managed agent (including KSM). The default values for ASK, ACS, and AckOne clusters.
     * - agent-exporter: managed agent and exporters. The default value for the cloud service type.
     *
     * @example none
     *
     * @var string
     */
    public $managedType;

    /**
     * @description The ID of the Prometheus instance.
     *
     * @example xxxxyyyyyzzzzz
     *
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @description The name of the Prometheus instance.
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
     * @description The ID of the security group associated with the environment.
     *
     * @example sg-8vbdgmf4nraiqa9bx0jo
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The user ID.
     *
     * @example 13002222xxxx
     *
     * @var string
     */
    public $userId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-8vb02uk57qbcktqcvqqqj
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch associated with the environment.
     *
     * @example vsw-2ze7yr3f1x8snryaioo7u
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'bindResourceId' => 'BindResourceId',
        'bindResourceProfile' => 'BindResourceProfile',
        'bindResourceStatus' => 'BindResourceStatus',
        'bindResourceStoreDuration' => 'BindResourceStoreDuration',
        'bindResourceType' => 'BindResourceType',
        'bindVpcCidr' => 'BindVpcCidr',
        'dbInstanceStatus' => 'DbInstanceStatus',
        'environmentId' => 'EnvironmentId',
        'environmentName' => 'EnvironmentName',
        'environmentSubType' => 'EnvironmentSubType',
        'environmentType' => 'EnvironmentType',
        'feePackage' => 'FeePackage',
        'grafaDataSourceName' => 'GrafaDataSourceName',
        'grafanaDatasourceUid' => 'GrafanaDatasourceUid',
        'grafanaFolderTitle' => 'GrafanaFolderTitle',
        'grafanaFolderUid' => 'GrafanaFolderUid',
        'grafanaFolderUrl' => 'GrafanaFolderUrl',
        'grafanaWorkspaceId' => 'GrafanaWorkspaceId',
        'managedType' => 'ManagedType',
        'prometheusInstanceId' => 'PrometheusInstanceId',
        'prometheusInstanceName' => 'PrometheusInstanceName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'tags' => 'Tags',
        'userId' => 'UserId',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate() {}

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
        if (null !== $this->dbInstanceStatus) {
            $res['DbInstanceStatus'] = $this->dbInstanceStatus;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->environmentName) {
            $res['EnvironmentName'] = $this->environmentName;
        }
        if (null !== $this->environmentSubType) {
            $res['EnvironmentSubType'] = $this->environmentSubType;
        }
        if (null !== $this->environmentType) {
            $res['EnvironmentType'] = $this->environmentType;
        }
        if (null !== $this->feePackage) {
            $res['FeePackage'] = $this->feePackage;
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
        if (null !== $this->grafanaWorkspaceId) {
            $res['GrafanaWorkspaceId'] = $this->grafanaWorkspaceId;
        }
        if (null !== $this->managedType) {
            $res['ManagedType'] = $this->managedType;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['DbInstanceStatus'])) {
            $model->dbInstanceStatus = $map['DbInstanceStatus'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['EnvironmentName'])) {
            $model->environmentName = $map['EnvironmentName'];
        }
        if (isset($map['EnvironmentSubType'])) {
            $model->environmentSubType = $map['EnvironmentSubType'];
        }
        if (isset($map['EnvironmentType'])) {
            $model->environmentType = $map['EnvironmentType'];
        }
        if (isset($map['FeePackage'])) {
            $model->feePackage = $map['FeePackage'];
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
        if (isset($map['GrafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['GrafanaWorkspaceId'];
        }
        if (isset($map['ManagedType'])) {
            $model->managedType = $map['ManagedType'];
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
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
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
