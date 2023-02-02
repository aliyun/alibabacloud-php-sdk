<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description Indicates whether automatic renewal is enabled.
     *
     * This parameter is valid only for clusters whose billing methods are set to PREPAY.
     * @example true
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description Indicates whether automatic upgrade of the OBServer version is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoUpgradeObVersion;

    /**
     * @description The list of zones.
     *
     * @var string[]
     */
    public $availableZones;

    /**
     * @description The time in UTC when the cluster was created.
     *
     * @example 2021-10-19T07:13:41Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the major compaction of cluster data is performed.
     *
     * @example 02:00
     *
     * @var string
     */
    public $dataMergeTime;

    /**
     * @description The data replica distribution mode of the cluster. Valid values:
     * > <br>The integer n represents the number of OBServer nodes in each IDC.
     * @example 1-1-1
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The deployment type of the cluster. Valid values:
     * - dual: dual-IDC deployment
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The type of the storage disk where the cluster is deployed.
     *
     * The default value is cloud_essd_pl1, which indicates an ESSD cloud disk.
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Indicates whether the log disk specifications can be upgraded.
     *
     * @example false
     *
     * @var bool
     */
    public $enableUpgradeLogDisk;

    /**
     * @description The time in UTC when the cluster expires.
     *
     * @example 2021-10-17T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The specifications of the cluster.  You can specify one of the following four plans:
     * - 62C400G: indicates 62 CPU cores and 400 GB of memory.
     * @example 14C70G
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the OceanBase cluster.
     *
     * @example ob4test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether the OBServer version is the latest.
     *
     * @example true
     *
     * @var bool
     */
    public $isLatestObVersion;

    /**
     * @description Indicates whether trusted ECS instances are used.
     *
     * @example true
     *
     * @var bool
     */
    public $isTrustEcs;

    /**
     * @description The time period in UTC for the daily routine maintenance of the cluster.
     *
     * @example 19:00Z-20:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The detailed information of the OBServer version.
     *
     * @example 2.2.77-20210526202046
     *
     * @var string
     */
    public $obRpmVersion;

    /**
     * @description The billing method of the OceanBase cluster. Valid values:
     * - POSTPAY: the pay-as-you-go billing method.
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The information about cluster resources.
     *
     * @var resource
     */
    public $resource;

    /**
     * @description The series of the OceanBase cluster. Valid values:
     * - BASIC: the basic edition.
     * @example NORMAL
     *
     * @var string
     */
    public $series;

    /**
     * @description The status of the cluster. Valid values:
     * Generally, the cluster is in the ONLINE state.
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The OBServer version.
     *
     * @example 2.2.77
     *
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
