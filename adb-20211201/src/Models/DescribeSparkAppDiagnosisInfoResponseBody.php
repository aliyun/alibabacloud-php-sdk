<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DescribeSparkAppDiagnosisInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;
    /**
     * @var string
     */
    public $appId;
    /**
     * @var float
     */
    public $cpuUtilization;
    /**
     * @var Adb4MysqlSparkDiagnosisInfo[]
     */
    public $diagnosisInfoList;
    /**
     * @var int
     */
    public $durationInMillis;
    /**
     * @var int
     */
    public $JVMGcCostInMillis;
    /**
     * @var int
     */
    public $peakMemoryInByte;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $shuffleReadInByte;
    /**
     * @var int
     */
    public $shuffleWriteInByte;
    /**
     * @var int
     */
    public $spillInByte;
    /**
     * @var int
     */
    public $startedTime;
    /**
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
        if (\is_array($this->diagnosisInfoList)) {
            Model::validateArray($this->diagnosisInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->diagnosisInfoList)) {
                $res['DiagnosisInfoList'] = [];
                $n1                       = 0;
                foreach ($this->diagnosisInfoList as $item1) {
                    $res['DiagnosisInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                       = 0;
                foreach ($map['DiagnosisInfoList'] as $item1) {
                    $model->diagnosisInfoList[$n1++] = Adb4MysqlSparkDiagnosisInfo::fromMap($item1);
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
