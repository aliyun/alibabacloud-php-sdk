<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateInfoResponseBody\data\designateDetailVos;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $cpuLoad1;

    /**
     * @example 0
     *
     * @var float
     */
    public $cpuLoad5;

    /**
     * @example 1
     *
     * @var int
     */
    public $cpuProcessors;

    /**
     * @example 1024
     *
     * @var int
     */
    public $diskMax;

    /**
     * @example 0.19142496008515167
     *
     * @var float
     */
    public $diskUsage;

    /**
     * @example 148
     *
     * @var int
     */
    public $diskUsed;

    /**
     * @example 56
     *
     * @var int
     */
    public $execCount;

    /**
     * @example 0.06072874493927125
     *
     * @var float
     */
    public $heap1Usage;

    /**
     * @example 14
     *
     * @var float
     */
    public $heap1Used;

    /**
     * @example 0.06477732793522267
     *
     * @var float
     */
    public $heap5Usage;

    /**
     * @example 500
     *
     * @var int
     */
    public $heapMax;

    /**
     * @example 72
     *
     * @var int
     */
    public $sharePoolAvailableSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $sharePoolQueueSize;
    protected $_name = [
        'cpuLoad1' => 'CpuLoad1',
        'cpuLoad5' => 'CpuLoad5',
        'cpuProcessors' => 'CpuProcessors',
        'diskMax' => 'DiskMax',
        'diskUsage' => 'DiskUsage',
        'diskUsed' => 'DiskUsed',
        'execCount' => 'ExecCount',
        'heap1Usage' => 'Heap1Usage',
        'heap1Used' => 'Heap1Used',
        'heap5Usage' => 'Heap5Usage',
        'heapMax' => 'HeapMax',
        'sharePoolAvailableSize' => 'SharePoolAvailableSize',
        'sharePoolQueueSize' => 'SharePoolQueueSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuLoad1) {
            $res['CpuLoad1'] = $this->cpuLoad1;
        }
        if (null !== $this->cpuLoad5) {
            $res['CpuLoad5'] = $this->cpuLoad5;
        }
        if (null !== $this->cpuProcessors) {
            $res['CpuProcessors'] = $this->cpuProcessors;
        }
        if (null !== $this->diskMax) {
            $res['DiskMax'] = $this->diskMax;
        }
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->diskUsed) {
            $res['DiskUsed'] = $this->diskUsed;
        }
        if (null !== $this->execCount) {
            $res['ExecCount'] = $this->execCount;
        }
        if (null !== $this->heap1Usage) {
            $res['Heap1Usage'] = $this->heap1Usage;
        }
        if (null !== $this->heap1Used) {
            $res['Heap1Used'] = $this->heap1Used;
        }
        if (null !== $this->heap5Usage) {
            $res['Heap5Usage'] = $this->heap5Usage;
        }
        if (null !== $this->heapMax) {
            $res['HeapMax'] = $this->heapMax;
        }
        if (null !== $this->sharePoolAvailableSize) {
            $res['SharePoolAvailableSize'] = $this->sharePoolAvailableSize;
        }
        if (null !== $this->sharePoolQueueSize) {
            $res['SharePoolQueueSize'] = $this->sharePoolQueueSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuLoad1'])) {
            $model->cpuLoad1 = $map['CpuLoad1'];
        }
        if (isset($map['CpuLoad5'])) {
            $model->cpuLoad5 = $map['CpuLoad5'];
        }
        if (isset($map['CpuProcessors'])) {
            $model->cpuProcessors = $map['CpuProcessors'];
        }
        if (isset($map['DiskMax'])) {
            $model->diskMax = $map['DiskMax'];
        }
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['DiskUsed'])) {
            $model->diskUsed = $map['DiskUsed'];
        }
        if (isset($map['ExecCount'])) {
            $model->execCount = $map['ExecCount'];
        }
        if (isset($map['Heap1Usage'])) {
            $model->heap1Usage = $map['Heap1Usage'];
        }
        if (isset($map['Heap1Used'])) {
            $model->heap1Used = $map['Heap1Used'];
        }
        if (isset($map['Heap5Usage'])) {
            $model->heap5Usage = $map['Heap5Usage'];
        }
        if (isset($map['HeapMax'])) {
            $model->heapMax = $map['HeapMax'];
        }
        if (isset($map['SharePoolAvailableSize'])) {
            $model->sharePoolAvailableSize = $map['SharePoolAvailableSize'];
        }
        if (isset($map['SharePoolQueueSize'])) {
            $model->sharePoolQueueSize = $map['SharePoolQueueSize'];
        }

        return $model;
    }
}
