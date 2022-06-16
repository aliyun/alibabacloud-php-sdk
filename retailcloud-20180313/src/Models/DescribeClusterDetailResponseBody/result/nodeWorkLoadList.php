<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeWorkLoadList extends Model
{
    /**
     * @var int
     */
    public $appPodCount;

    /**
     * @var string
     */
    public $cpuRequest;

    /**
     * @var string
     */
    public $cpuTotal;

    /**
     * @var string
     */
    public $cpuUse;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $memRequest;

    /**
     * @var string
     */
    public $memTotal;

    /**
     * @var string
     */
    public $memUse;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $podCount;

    /**
     * @var bool
     */
    public $ready;

    /**
     * @var bool
     */
    public $unschedulable;
    protected $_name = [
        'appPodCount'   => 'AppPodCount',
        'cpuRequest'    => 'CpuRequest',
        'cpuTotal'      => 'CpuTotal',
        'cpuUse'        => 'CpuUse',
        'instanceId'    => 'InstanceId',
        'memRequest'    => 'MemRequest',
        'memTotal'      => 'MemTotal',
        'memUse'        => 'MemUse',
        'nodeName'      => 'NodeName',
        'podCount'      => 'PodCount',
        'ready'         => 'Ready',
        'unschedulable' => 'Unschedulable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appPodCount) {
            $res['AppPodCount'] = $this->appPodCount;
        }
        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
        }
        if (null !== $this->cpuTotal) {
            $res['CpuTotal'] = $this->cpuTotal;
        }
        if (null !== $this->cpuUse) {
            $res['CpuUse'] = $this->cpuUse;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memRequest) {
            $res['MemRequest'] = $this->memRequest;
        }
        if (null !== $this->memTotal) {
            $res['MemTotal'] = $this->memTotal;
        }
        if (null !== $this->memUse) {
            $res['MemUse'] = $this->memUse;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }
        if (null !== $this->unschedulable) {
            $res['Unschedulable'] = $this->unschedulable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeWorkLoadList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppPodCount'])) {
            $model->appPodCount = $map['AppPodCount'];
        }
        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
        }
        if (isset($map['CpuTotal'])) {
            $model->cpuTotal = $map['CpuTotal'];
        }
        if (isset($map['CpuUse'])) {
            $model->cpuUse = $map['CpuUse'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MemRequest'])) {
            $model->memRequest = $map['MemRequest'];
        }
        if (isset($map['MemTotal'])) {
            $model->memTotal = $map['MemTotal'];
        }
        if (isset($map['MemUse'])) {
            $model->memUse = $map['MemUse'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }
        if (isset($map['Unschedulable'])) {
            $model->unschedulable = $map['Unschedulable'];
        }

        return $model;
    }
}
