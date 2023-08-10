<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponseBody\dedicatedClusterStatusList;

use AlibabaCloud\Tea\Model;

class dedicatedClusterStatus extends Model
{
    /**
     * @description The CPU utilization, in percentage.
     *
     * @example 30
     *
     * @var int
     */
    public $cpuUtilization;

    /**
     * @description The ID of the cluster.
     *
     * @example dtscluster*******
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The name of the cluster.
     *
     * @example daily_test
     *
     * @var string
     */
    public $dedicatedClusterName;

    /**
     * @description The disk usage.
     *
     * @example 50
     *
     * @var int
     */
    public $diskUtilization;

    /**
     * @description The ID of the DTS instance.
     *
     * @example dtsi03e3zty16i****
     *
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @description The number of DTS units (DUs).
     *
     * @example 30
     *
     * @var int
     */
    public $du;

    /**
     * @description The DU usage, in percentage.
     *
     * @example 16.6667
     *
     * @var int
     */
    public $duUtilization;

    /**
     * @description The time when the cluster was created.
     *
     * @example 1647424384606
     *
     * @var int
     */
    public $gmtCreated;

    /**
     * @description The memory usage.
     *
     * @example 20
     *
     * @var int
     */
    public $memUtilization;

    /**
     * @description The number of nodes in the cluster.
     *
     * @example 5
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description The number of over-provisioned DUs.
     *
     * @example 60
     *
     * @var int
     */
    public $oversoldDu;

    /**
     * @description The ID of the region in which the DTS instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   **init**: The cluster is being initialized.
     *   **schedule**: The cluster is pending scheduling.
     *   **running**: The cluster is running.
     *   **upgrade**: The cluster is being upgraded.
     *   **downgrade**: The cluster is being downgraded.
     *   **locked**: The cluster is locked.
     *   **releasing**: The cluster is being released.
     *   **released**: The cluster is released.
     *
     * @example init
     *
     * @var string
     */
    public $state;

    /**
     * @description The total number of CPU cores.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCpuCore;

    /**
     * @description The total disk capacity. Unit: GB.
     *
     * @example 2048
     *
     * @var int
     */
    public $totalDiskGBSize;

    /**
     * @description The total memory capacity. Unit: GB.
     *
     * @example 256
     *
     * @var int
     */
    public $totalMemGBSize;

    /**
     * @description The number of used CPU cores.
     *
     * @example 30
     *
     * @var int
     */
    public $usedCpuCore;

    /**
     * @description The used disk capacity. Unit: GB.
     *
     * @example 1024
     *
     * @var int
     */
    public $usedDiskGBSize;

    /**
     * @description The number of used DUs.
     *
     * @example 5
     *
     * @var int
     */
    public $usedDu;

    /**
     * @description The used memory capacity. Unit: GB.
     *
     * @example 128
     *
     * @var int
     */
    public $usedMemGBSize;
    protected $_name = [
        'cpuUtilization'       => 'CpuUtilization',
        'dedicatedClusterId'   => 'DedicatedClusterId',
        'dedicatedClusterName' => 'DedicatedClusterName',
        'diskUtilization'      => 'DiskUtilization',
        'dtsInstanceID'        => 'DtsInstanceID',
        'du'                   => 'Du',
        'duUtilization'        => 'DuUtilization',
        'gmtCreated'           => 'GmtCreated',
        'memUtilization'       => 'MemUtilization',
        'nodeCount'            => 'NodeCount',
        'oversoldDu'           => 'OversoldDu',
        'regionId'             => 'RegionId',
        'state'                => 'State',
        'totalCpuCore'         => 'TotalCpuCore',
        'totalDiskGBSize'      => 'TotalDiskGBSize',
        'totalMemGBSize'       => 'TotalMemGBSize',
        'usedCpuCore'          => 'UsedCpuCore',
        'usedDiskGBSize'       => 'UsedDiskGBSize',
        'usedDu'               => 'UsedDu',
        'usedMemGBSize'        => 'UsedMemGBSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuUtilization) {
            $res['CpuUtilization'] = $this->cpuUtilization;
        }
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->dedicatedClusterName) {
            $res['DedicatedClusterName'] = $this->dedicatedClusterName;
        }
        if (null !== $this->diskUtilization) {
            $res['DiskUtilization'] = $this->diskUtilization;
        }
        if (null !== $this->dtsInstanceID) {
            $res['DtsInstanceID'] = $this->dtsInstanceID;
        }
        if (null !== $this->du) {
            $res['Du'] = $this->du;
        }
        if (null !== $this->duUtilization) {
            $res['DuUtilization'] = $this->duUtilization;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->memUtilization) {
            $res['MemUtilization'] = $this->memUtilization;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->oversoldDu) {
            $res['OversoldDu'] = $this->oversoldDu;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->totalCpuCore) {
            $res['TotalCpuCore'] = $this->totalCpuCore;
        }
        if (null !== $this->totalDiskGBSize) {
            $res['TotalDiskGBSize'] = $this->totalDiskGBSize;
        }
        if (null !== $this->totalMemGBSize) {
            $res['TotalMemGBSize'] = $this->totalMemGBSize;
        }
        if (null !== $this->usedCpuCore) {
            $res['UsedCpuCore'] = $this->usedCpuCore;
        }
        if (null !== $this->usedDiskGBSize) {
            $res['UsedDiskGBSize'] = $this->usedDiskGBSize;
        }
        if (null !== $this->usedDu) {
            $res['UsedDu'] = $this->usedDu;
        }
        if (null !== $this->usedMemGBSize) {
            $res['UsedMemGBSize'] = $this->usedMemGBSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedClusterStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuUtilization'])) {
            $model->cpuUtilization = $map['CpuUtilization'];
        }
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DedicatedClusterName'])) {
            $model->dedicatedClusterName = $map['DedicatedClusterName'];
        }
        if (isset($map['DiskUtilization'])) {
            $model->diskUtilization = $map['DiskUtilization'];
        }
        if (isset($map['DtsInstanceID'])) {
            $model->dtsInstanceID = $map['DtsInstanceID'];
        }
        if (isset($map['Du'])) {
            $model->du = $map['Du'];
        }
        if (isset($map['DuUtilization'])) {
            $model->duUtilization = $map['DuUtilization'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['MemUtilization'])) {
            $model->memUtilization = $map['MemUtilization'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['OversoldDu'])) {
            $model->oversoldDu = $map['OversoldDu'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TotalCpuCore'])) {
            $model->totalCpuCore = $map['TotalCpuCore'];
        }
        if (isset($map['TotalDiskGBSize'])) {
            $model->totalDiskGBSize = $map['TotalDiskGBSize'];
        }
        if (isset($map['TotalMemGBSize'])) {
            $model->totalMemGBSize = $map['TotalMemGBSize'];
        }
        if (isset($map['UsedCpuCore'])) {
            $model->usedCpuCore = $map['UsedCpuCore'];
        }
        if (isset($map['UsedDiskGBSize'])) {
            $model->usedDiskGBSize = $map['UsedDiskGBSize'];
        }
        if (isset($map['UsedDu'])) {
            $model->usedDu = $map['UsedDu'];
        }
        if (isset($map['UsedMemGBSize'])) {
            $model->usedMemGBSize = $map['UsedMemGBSize'];
        }

        return $model;
    }
}
