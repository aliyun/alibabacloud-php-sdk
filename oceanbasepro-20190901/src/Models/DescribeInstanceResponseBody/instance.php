<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var bool
     */
    public $autoUpgradeObVersion;

    /**
     * @var string[]
     */
    public $availableZones;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataMergeTime;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var bool
     */
    public $enableUpgradeLogDisk;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $isLatestObVersion;

    /**
     * @var bool
     */
    public $isTrustEcs;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $obRpmVersion;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'autoRenewal'          => 'AutoRenewal',
        'autoUpgradeObVersion' => 'AutoUpgradeObVersion',
        'availableZones'       => 'AvailableZones',
        'createTime'           => 'CreateTime',
        'dataMergeTime'        => 'DataMergeTime',
        'deployMode'           => 'DeployMode',
        'deployType'           => 'DeployType',
        'diskType'             => 'DiskType',
        'enableUpgradeLogDisk' => 'EnableUpgradeLogDisk',
        'expireTime'           => 'ExpireTime',
        'instanceClass'        => 'InstanceClass',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'isLatestObVersion'    => 'IsLatestObVersion',
        'isTrustEcs'           => 'IsTrustEcs',
        'maintainTime'         => 'MaintainTime',
        'obRpmVersion'         => 'ObRpmVersion',
        'payType'              => 'PayType',
        'resource'             => 'Resource',
        'series'               => 'Series',
        'status'               => 'Status',
        'version'              => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->autoUpgradeObVersion) {
            $res['AutoUpgradeObVersion'] = $this->autoUpgradeObVersion;
        }
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = $this->availableZones;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataMergeTime) {
            $res['DataMergeTime'] = $this->dataMergeTime;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->enableUpgradeLogDisk) {
            $res['EnableUpgradeLogDisk'] = $this->enableUpgradeLogDisk;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isLatestObVersion) {
            $res['IsLatestObVersion'] = $this->isLatestObVersion;
        }
        if (null !== $this->isTrustEcs) {
            $res['IsTrustEcs'] = $this->isTrustEcs;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->obRpmVersion) {
            $res['ObRpmVersion'] = $this->obRpmVersion;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['AutoUpgradeObVersion'])) {
            $model->autoUpgradeObVersion = $map['AutoUpgradeObVersion'];
        }
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = $map['AvailableZones'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataMergeTime'])) {
            $model->dataMergeTime = $map['DataMergeTime'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['EnableUpgradeLogDisk'])) {
            $model->enableUpgradeLogDisk = $map['EnableUpgradeLogDisk'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsLatestObVersion'])) {
            $model->isLatestObVersion = $map['IsLatestObVersion'];
        }
        if (isset($map['IsTrustEcs'])) {
            $model->isTrustEcs = $map['IsTrustEcs'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['ObRpmVersion'])) {
            $model->obRpmVersion = $map['ObRpmVersion'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
