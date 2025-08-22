<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentResponseBody\data\tags;

class data extends Model
{
    /**
     * @var string
     */
    public $bindResourceId;

    /**
     * @var string
     */
    public $bindResourceProfile;

    /**
     * @var string
     */
    public $bindResourceStatus;

    /**
     * @var string
     */
    public $bindResourceStoreDuration;

    /**
     * @var string
     */
    public $bindResourceType;

    /**
     * @var string
     */
    public $bindVpcCidr;

    /**
     * @var string
     */
    public $dbInstanceStatus;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $environmentName;

    /**
     * @var string
     */
    public $environmentSubType;

    /**
     * @var string
     */
    public $environmentType;

    /**
     * @var string
     */
    public $feePackage;

    /**
     * @var string
     */
    public $grafaDataSourceName;

    /**
     * @var string
     */
    public $grafanaDatasourceUid;

    /**
     * @var string
     */
    public $grafanaFolderTitle;

    /**
     * @var string
     */
    public $grafanaFolderUid;

    /**
     * @var string
     */
    public $grafanaFolderUrl;

    /**
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @var string
     */
    public $managedType;

    /**
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @var string
     */
    public $prometheusInstanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $vpcId;

    /**
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
