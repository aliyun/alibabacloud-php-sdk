<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateDetailResponseBody\data\designateDetailVos;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var float
     */
    public $cpuLoad1;

    /**
     * @var float
     */
    public $cpuLoad5;

    /**
     * @var int
     */
    public $cpuProcessors;

    /**
     * @var int
     */
    public $diskMax;

    /**
     * @var float
     */
    public $diskUsage;

    /**
     * @var int
     */
    public $diskUsed;

    /**
     * @var int
     */
    public $execCount;

    /**
     * @var float
     */
    public $heap1Usage;

    /**
     * @var float
     */
    public $heap1Used;

    /**
     * @var float
     */
    public $heap5Usage;

    /**
     * @var int
     */
    public $heapMax;

    /**
     * @var int
     */
    public $sharePoolAvailableSize;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
