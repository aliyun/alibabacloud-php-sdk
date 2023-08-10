<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedClusterResponseBody extends Model
{
    /**
     * @description The CPU utilization. Unit: percentage.
     *
     * @example 30
     *
     * @var int
     */
    public $cpuUtilization;

    /**
     * @description The ID of the cluster.
     *
     * @example dtsCluster****
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
     * @description The ID of the instance.
     *
     * @example dtsb8r****
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
     * @description The DU usage. Unit: percentage.
     *
     * @example 16
     *
     * @var int
     */
    public $duUtilization;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The time when the cluster was created.
     *
     * @example 1642476144000
     *
     * @var int
     */
    public $gmtCreated;

    /**
     * @description The time when the cluster stopped.
     *
     * @example 1645200000000
     *
     * @var int
     */
    public $gmtFinished;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

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
     * @description The number of DUs that exceeds the upper limit.
     *
     * @example 60
     *
     * @var int
     */
    public $oversoldDu;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 621BB4F8-3016-4FAA-8D5A-5D3163CC****
     *
     * @var string
     */
    public $requestId;

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
     * @example inti
     *
     * @var string
     */
    public $state;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The total number of CPU cores.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCpuCore;

    /**
     * @description The total disk size. Unit: GB.
     *
     * @example 2048
     *
     * @var int
     */
    public $totalDiskGBSize;

    /**
     * @description The total amount of memory. Unit: GB.
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
     * @description The used disk size. Unit: GB.
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
     * @description The amount of used memory. Unit: GB.
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
        'errCode'              => 'ErrCode',
        'errMessage'           => 'ErrMessage',
        'gmtCreated'           => 'GmtCreated',
        'gmtFinished'          => 'GmtFinished',
        'httpStatusCode'       => 'HttpStatusCode',
        'memUtilization'       => 'MemUtilization',
        'nodeCount'            => 'NodeCount',
        'oversoldDu'           => 'OversoldDu',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'state'                => 'State',
        'success'              => 'Success',
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
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtFinished) {
            $res['GmtFinished'] = $this->gmtFinished;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
     * @return DescribeDedicatedClusterResponseBody
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
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtFinished'])) {
            $model->gmtFinished = $map['GmtFinished'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
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
