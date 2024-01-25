<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\SearchClusterInstancesResponseBody;

use AlibabaCloud\SDK\Cdp\V20210402\Models\SearchClusterInstancesResponseBody\data\clusterInstanceInfo;
use AlibabaCloud\SDK\Cdp\V20210402\Models\SearchClusterInstancesResponseBody\data\ecsGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var clusterInstanceInfo
     */
    public $clusterInstanceInfo;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterStatus;

    /**
     * @var int
     */
    public $clusterStatusValue;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $controlCenterUrl;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var ecsGroupList[]
     */
    public $ecsGroupList;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var mixed[]
     */
    public $instanceConf;

    /**
     * @var bool
     */
    public $noticeConfirmed;

    /**
     * @var string
     */
    public $orderBizId;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'beginTime'           => 'BeginTime',
        'clusterBizId'        => 'ClusterBizId',
        'clusterId'           => 'ClusterId',
        'clusterInstanceInfo' => 'ClusterInstanceInfo',
        'clusterName'         => 'ClusterName',
        'clusterStatus'       => 'ClusterStatus',
        'clusterStatusValue'  => 'ClusterStatusValue',
        'clusterType'         => 'ClusterType',
        'controlCenterUrl'    => 'ControlCenterUrl',
        'duration'            => 'Duration',
        'ecsGroupList'        => 'EcsGroupList',
        'expireTime'          => 'ExpireTime',
        'failReason'          => 'FailReason',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'instanceConf'        => 'InstanceConf',
        'noticeConfirmed'     => 'NoticeConfirmed',
        'orderBizId'          => 'OrderBizId',
        'packageType'         => 'PackageType',
        'pricingCycle'        => 'PricingCycle',
        'regionId'            => 'RegionId',
        'runningTime'         => 'RunningTime',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterInstanceInfo) {
            $res['ClusterInstanceInfo'] = null !== $this->clusterInstanceInfo ? $this->clusterInstanceInfo->toMap() : null;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->clusterStatusValue) {
            $res['ClusterStatusValue'] = $this->clusterStatusValue;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->controlCenterUrl) {
            $res['ControlCenterUrl'] = $this->controlCenterUrl;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ecsGroupList) {
            $res['EcsGroupList'] = [];
            if (null !== $this->ecsGroupList && \is_array($this->ecsGroupList)) {
                $n = 0;
                foreach ($this->ecsGroupList as $item) {
                    $res['EcsGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instanceConf) {
            $res['InstanceConf'] = $this->instanceConf;
        }
        if (null !== $this->noticeConfirmed) {
            $res['NoticeConfirmed'] = $this->noticeConfirmed;
        }
        if (null !== $this->orderBizId) {
            $res['OrderBizId'] = $this->orderBizId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterInstanceInfo'])) {
            $model->clusterInstanceInfo = clusterInstanceInfo::fromMap($map['ClusterInstanceInfo']);
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['ClusterStatusValue'])) {
            $model->clusterStatusValue = $map['ClusterStatusValue'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ControlCenterUrl'])) {
            $model->controlCenterUrl = $map['ControlCenterUrl'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EcsGroupList'])) {
            if (!empty($map['EcsGroupList'])) {
                $model->ecsGroupList = [];
                $n                   = 0;
                foreach ($map['EcsGroupList'] as $item) {
                    $model->ecsGroupList[$n++] = null !== $item ? ecsGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InstanceConf'])) {
            $model->instanceConf = $map['InstanceConf'];
        }
        if (isset($map['NoticeConfirmed'])) {
            $model->noticeConfirmed = $map['NoticeConfirmed'];
        }
        if (isset($map['OrderBizId'])) {
            $model->orderBizId = $map['OrderBizId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
