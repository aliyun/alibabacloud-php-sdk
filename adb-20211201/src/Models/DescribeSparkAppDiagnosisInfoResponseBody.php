<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeSparkAppDiagnosisInfoResponseBody extends Model
{
    /**
     * @example {
     * "PolicyType": "AccountLevelIdentityBasedPolicy",
     * "AuthPrincipalOwnerId": "1*****************7",
     * "AuthPrincipalType": "SubUser",
     * "AuthPrincipalDisplayName": "2***************9",
     * }
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @example s202404141952sz6a1391200****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 100
     *
     * @var float
     */
    public $cpuUtilization;

    /**
     * @var Adb4MysqlSparkDiagnosisInfo[]
     */
    public $diagnosisInfoList;

    /**
     * @example 281063
     *
     * @var int
     */
    public $durationInMillis;

    /**
     * @example 81055
     *
     * @var int
     */
    public $JVMGcCostInMillis;

    /**
     * @example 4096000
     *
     * @var int
     */
    public $peakMemoryInByte;

    /**
     * @example FB5AC339-91F6-5000-8E5A-F47065B01B87
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 4096000
     *
     * @var int
     */
    public $shuffleReadInByte;

    /**
     * @example 4096000
     *
     * @var int
     */
    public $shuffleWriteInByte;

    /**
     * @example 0
     *
     * @var int
     */
    public $spillInByte;

    /**
     * @example 1718329831000
     *
     * @var int
     */
    public $startedTime;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'appId'              => 'AppId',
        'cpuUtilization'     => 'CpuUtilization',
        'diagnosisInfoList'  => 'DiagnosisInfoList',
        'durationInMillis'   => 'DurationInMillis',
        'JVMGcCostInMillis'  => 'JVMGcCostInMillis',
        'peakMemoryInByte'   => 'PeakMemoryInByte',
        'requestId'          => 'RequestId',
        'shuffleReadInByte'  => 'ShuffleReadInByte',
        'shuffleWriteInByte' => 'ShuffleWriteInByte',
        'spillInByte'        => 'SpillInByte',
        'startedTime'        => 'StartedTime',
        'state'              => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cpuUtilization) {
            $res['CpuUtilization'] = $this->cpuUtilization;
        }
        if (null !== $this->diagnosisInfoList) {
            $res['DiagnosisInfoList'] = [];
            if (null !== $this->diagnosisInfoList && \is_array($this->diagnosisInfoList)) {
                $n = 0;
                foreach ($this->diagnosisInfoList as $item) {
                    $res['DiagnosisInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->durationInMillis) {
            $res['DurationInMillis'] = $this->durationInMillis;
        }
        if (null !== $this->JVMGcCostInMillis) {
            $res['JVMGcCostInMillis'] = $this->JVMGcCostInMillis;
        }
        if (null !== $this->peakMemoryInByte) {
            $res['PeakMemoryInByte'] = $this->peakMemoryInByte;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->shuffleReadInByte) {
            $res['ShuffleReadInByte'] = $this->shuffleReadInByte;
        }
        if (null !== $this->shuffleWriteInByte) {
            $res['ShuffleWriteInByte'] = $this->shuffleWriteInByte;
        }
        if (null !== $this->spillInByte) {
            $res['SpillInByte'] = $this->spillInByte;
        }
        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSparkAppDiagnosisInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CpuUtilization'])) {
            $model->cpuUtilization = $map['CpuUtilization'];
        }
        if (isset($map['DiagnosisInfoList'])) {
            if (!empty($map['DiagnosisInfoList'])) {
                $model->diagnosisInfoList = [];
                $n                        = 0;
                foreach ($map['DiagnosisInfoList'] as $item) {
                    $model->diagnosisInfoList[$n++] = null !== $item ? Adb4MysqlSparkDiagnosisInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DurationInMillis'])) {
            $model->durationInMillis = $map['DurationInMillis'];
        }
        if (isset($map['JVMGcCostInMillis'])) {
            $model->JVMGcCostInMillis = $map['JVMGcCostInMillis'];
        }
        if (isset($map['PeakMemoryInByte'])) {
            $model->peakMemoryInByte = $map['PeakMemoryInByte'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShuffleReadInByte'])) {
            $model->shuffleReadInByte = $map['ShuffleReadInByte'];
        }
        if (isset($map['ShuffleWriteInByte'])) {
            $model->shuffleWriteInByte = $map['ShuffleWriteInByte'];
        }
        if (isset($map['SpillInByte'])) {
            $model->spillInByte = $map['SpillInByte'];
        }
        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
