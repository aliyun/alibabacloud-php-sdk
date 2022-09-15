<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var bool
     */
    public $canUpdate;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clusterAliasName;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $initStatus;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internetAddress;

    /**
     * @var string
     */
    public $internetDomain;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @var string
     */
    public $intranetDomain;

    /**
     * @var string
     */
    public $mseVersion;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $versionCode;
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

        return $model;
    }
}
