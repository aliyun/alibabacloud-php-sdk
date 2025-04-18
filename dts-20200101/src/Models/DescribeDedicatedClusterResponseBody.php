<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeDedicatedClusterResponseBody extends Model
{
    /**
     * @var int
     */
    public $cpuUtilization;

    /**
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @var string
     */
    public $dedicatedClusterName;

    /**
     * @var int
     */
    public $diskUtilization;

    /**
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @var int
     */
    public $du;

    /**
     * @var int
     */
    public $duUtilization;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $gmtFinished;

    /**
     * @var string
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $memUtilization;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $oversoldDu;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $success;

    /**
     * @var int
     */
    public $totalCpuCore;

    /**
     * @var int
     */
    public $totalDiskGBSize;

    /**
     * @var int
     */
    public $totalMemGBSize;

    /**
     * @var int
     */
    public $usedCpuCore;

    /**
     * @var int
     */
    public $usedDiskGBSize;

    /**
     * @var int
     */
    public $usedDu;

    /**
     * @var int
     */
    public $usedMemGBSize;
    protected $_name = [
        'cpuUtilization' => 'CpuUtilization',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'dedicatedClusterName' => 'DedicatedClusterName',
        'diskUtilization' => 'DiskUtilization',
        'dtsInstanceID' => 'DtsInstanceID',
        'du' => 'Du',
        'duUtilization' => 'DuUtilization',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'gmtCreated' => 'GmtCreated',
        'gmtFinished' => 'GmtFinished',
        'httpStatusCode' => 'HttpStatusCode',
        'memUtilization' => 'MemUtilization',
        'nodeCount' => 'NodeCount',
        'oversoldDu' => 'OversoldDu',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'state' => 'State',
        'success' => 'Success',
        'totalCpuCore' => 'TotalCpuCore',
        'totalDiskGBSize' => 'TotalDiskGBSize',
        'totalMemGBSize' => 'TotalMemGBSize',
        'usedCpuCore' => 'UsedCpuCore',
        'usedDiskGBSize' => 'UsedDiskGBSize',
        'usedDu' => 'UsedDu',
        'usedMemGBSize' => 'UsedMemGBSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
