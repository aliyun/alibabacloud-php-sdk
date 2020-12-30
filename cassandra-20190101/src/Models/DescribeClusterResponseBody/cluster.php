<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterResponseBody;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterResponseBody\cluster\tags;
use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var int
     */
    public $dataCenterCount;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'            => 'Status',
        'expireTime'        => 'ExpireTime',
        'maintainStartTime' => 'MaintainStartTime',
        'payType'           => 'PayType',
        'maintainEndTime'   => 'MaintainEndTime',
        'tags'              => 'Tags',
        'lockMode'          => 'LockMode',
        'minorVersion'      => 'MinorVersion',
        'autoRenewPeriod'   => 'AutoRenewPeriod',
        'isLatestVersion'   => 'IsLatestVersion',
        'dataCenterCount'   => 'DataCenterCount',
        'autoRenewal'       => 'AutoRenewal',
        'resourceGroupId'   => 'ResourceGroupId',
        'clusterName'       => 'ClusterName',
        'majorVersion'      => 'MajorVersion',
        'createdTime'       => 'CreatedTime',
        'clusterId'         => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->dataCenterCount) {
            $res['DataCenterCount'] = $this->dataCenterCount;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['DataCenterCount'])) {
            $model->dataCenterCount = $map['DataCenterCount'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
