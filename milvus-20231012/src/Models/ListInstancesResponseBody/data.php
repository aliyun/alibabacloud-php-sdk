<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesResponseBody\data\clusterInfo;

class data extends Model
{
    /**
     * @var bool
     */
    public $autoBackup;
    /**
     * @var int
     */
    public $beginTime;
    /**
     * @var clusterInfo
     */
    public $clusterInfo;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var int
     */
    public $expireTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceStatus;
    /**
     * @var string
     */
    public $nodeType;
    /**
     * @var bool
     */
    public $openPublicNet;
    /**
     * @var string
     */
    public $packageType;
    /**
     * @var int
     */
    public $payType;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var int
     */
    public $runningTime;
    /**
     * @var string
     */
    public $sgId;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vswId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoBackup'      => 'AutoBackup',
        'beginTime'       => 'BeginTime',
        'clusterInfo'     => 'ClusterInfo',
        'clusterName'     => 'ClusterName',
        'expireTime'      => 'ExpireTime',
        'instanceId'      => 'InstanceId',
        'instanceStatus'  => 'InstanceStatus',
        'nodeType'        => 'NodeType',
        'openPublicNet'   => 'OpenPublicNet',
        'packageType'     => 'PackageType',
        'payType'         => 'PayType',
        'productCode'     => 'ProductCode',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'runningTime'     => 'RunningTime',
        'sgId'            => 'SgId',
        'vpcId'           => 'VpcId',
        'vswId'           => 'VswId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->clusterInfo) {
            $this->clusterInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBackup) {
            $res['AutoBackup'] = $this->autoBackup;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->clusterInfo) {
            $res['ClusterInfo'] = null !== $this->clusterInfo ? $this->clusterInfo->toArray($noStream) : $this->clusterInfo;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->openPublicNet) {
            $res['OpenPublicNet'] = $this->openPublicNet;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }

        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AutoBackup'])) {
            $model->autoBackup = $map['AutoBackup'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['ClusterInfo'])) {
            $model->clusterInfo = clusterInfo::fromMap($map['ClusterInfo']);
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OpenPublicNet'])) {
            $model->openPublicNet = $map['OpenPublicNet'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }

        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
