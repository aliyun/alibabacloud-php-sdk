<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The application version.
     *
     * @example 1.9.3
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description Indicates whether the instance can be upgraded.
     *
     * @example true
     *
     * @var bool
     */
    public $canUpdate;

    /**
     * @description The billing method, such as subscription or pay-as-you-go.
     *
     * @example Pay-as-you-go
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The alias of the cluster.
     *
     * @example mse-7413****
     *
     * @var string
     */
    public $clusterAliasName;

    /**
     * @description The name of the cluster.
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values: ZooKeeper, Nacos-Ans, and Eureka.
     *
     * @example Eureka
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2020-07-31 11:36:08
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the cluster expires.
     *
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The initialization status of the instance.
     *
     * @example RESTART_SUCCESS
     *
     * @var string
     */
    public $initStatus;

    /**
     * @description The number of clusters.
     *
     * @example 2
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The instance ID.
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The public IP address.
     *
     * @example 47.98.XX.XX
     *
     * @var string
     */
    public $internetAddress;

    /**
     * @description The public endpoint.
     *
     * @example mse-7413****-p.eureka.mse.aliyuncs.com
     *
     * @var string
     */
    public $internetDomain;

    /**
     * @description The internal IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The internal endpoint.
     *
     * @example mse-7413****-eureka.mse.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @description The edition of the cluster.
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmv7jiavm4uxa
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags that are attached to the instance.
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The version information.
     *
     * @example EUREKA_1_9_3
     *
     * @var string
     */
    public $versionCode;

    /**
     * @example vpc-bp1hcg467ekqsv0zr****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appVersion'       => 'AppVersion',
        'canUpdate'        => 'CanUpdate',
        'chargeType'       => 'ChargeType',
        'clusterAliasName' => 'ClusterAliasName',
        'clusterName'      => 'ClusterName',
        'clusterType'      => 'ClusterType',
        'createTime'       => 'CreateTime',
        'endDate'          => 'EndDate',
        'initStatus'       => 'InitStatus',
        'instanceCount'    => 'InstanceCount',
        'instanceId'       => 'InstanceId',
        'internetAddress'  => 'InternetAddress',
        'internetDomain'   => 'InternetDomain',
        'intranetAddress'  => 'IntranetAddress',
        'intranetDomain'   => 'IntranetDomain',
        'mseVersion'       => 'MseVersion',
        'resourceGroupId'  => 'ResourceGroupId',
        'tags'             => 'Tags',
        'versionCode'      => 'VersionCode',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->canUpdate) {
            $res['CanUpdate'] = $this->canUpdate;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterAliasName) {
            $res['ClusterAliasName'] = $this->clusterAliasName;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->initStatus) {
            $res['InitStatus'] = $this->initStatus;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetAddress) {
            $res['InternetAddress'] = $this->internetAddress;
        }
        if (null !== $this->internetDomain) {
            $res['InternetDomain'] = $this->internetDomain;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
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
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['CanUpdate'])) {
            $model->canUpdate = $map['CanUpdate'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterAliasName'])) {
            $model->clusterAliasName = $map['ClusterAliasName'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['InitStatus'])) {
            $model->initStatus = $map['InitStatus'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetAddress'])) {
            $model->internetAddress = $map['InternetAddress'];
        }
        if (isset($map['InternetDomain'])) {
            $model->internetDomain = $map['InternetDomain'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
