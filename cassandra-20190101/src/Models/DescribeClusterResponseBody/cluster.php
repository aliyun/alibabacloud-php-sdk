<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterResponseBody;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterResponseBody\cluster\tags;
use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @example cds-bp1b136j****5d56
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Cassandra-test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @var bool
     */
    public $confirmProductOffline;

    /**
     * @example 2019-09-20T16:02:34Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataCenterCount;

    /**
     * @example 2019-10-20T16:02:34Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @example None
     *
     * @var string
     */
    public $lockMode;

    /**
     * @example 4:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @example 2:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @example 3.11
     *
     * @var string
     */
    public $majorVersion;

    /**
     * @example 3.11.7
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $payType;

    /**
     * @example rg-xxxxxxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'autoRenewPeriod'       => 'AutoRenewPeriod',
        'autoRenewal'           => 'AutoRenewal',
        'clusterId'             => 'ClusterId',
        'clusterName'           => 'ClusterName',
        'confirmProductOffline' => 'ConfirmProductOffline',
        'createdTime'           => 'CreatedTime',
        'dataCenterCount'       => 'DataCenterCount',
        'expireTime'            => 'ExpireTime',
        'isLatestVersion'       => 'IsLatestVersion',
        'lockMode'              => 'LockMode',
        'maintainEndTime'       => 'MaintainEndTime',
        'maintainStartTime'     => 'MaintainStartTime',
        'majorVersion'          => 'MajorVersion',
        'minorVersion'          => 'MinorVersion',
        'payType'               => 'PayType',
        'resourceGroupId'       => 'ResourceGroupId',
        'status'                => 'Status',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->confirmProductOffline) {
            $res['ConfirmProductOffline'] = $this->confirmProductOffline;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dataCenterCount) {
            $res['DataCenterCount'] = $this->dataCenterCount;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ConfirmProductOffline'])) {
            $model->confirmProductOffline = $map['ConfirmProductOffline'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DataCenterCount'])) {
            $model->dataCenterCount = $map['DataCenterCount'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
