<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @description The number of physical CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $coreCount;

    /**
     * @var bool
     */
    public $enableVISST;

    /**
     * @var bool
     */
    public $enableVRDT;

    /**
     * @description >  This parameter is deprecated.
     *
     * @example 2
     *
     * @var string
     */
    public $numa;

    /**
     * @description The number of threads per CPU core.
     *
     * @example 2
     *
     * @var int
     */
    public $threadsPerCore;

    /**
     * @description The CPU topology type of the instance. Valid values:
     *
     *   ContinuousCoreToHTMapping: Hyper-Threading (HT) continuous CPU topology
     *   DiscreteCoreToHTMapping: HT discrete CPU topology
     *
     * @example ContinuousCoreToHTMapping
     *
     * @var string
     */
    public $topologyType;

    /**
     * @var string
     */
    public $turboMode;
    protected $_name = [
        'coreCount' => 'CoreCount',
        'enableVISST' => 'EnableVISST',
        'enableVRDT' => 'EnableVRDT',
        'numa' => 'Numa',
        'threadsPerCore' => 'ThreadsPerCore',
        'topologyType' => 'TopologyType',
        'turboMode' => 'TurboMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreCount) {
            $res['CoreCount'] = $this->coreCount;
        }
        if (null !== $this->enableVISST) {
            $res['EnableVISST'] = $this->enableVISST;
        }
        if (null !== $this->enableVRDT) {
            $res['EnableVRDT'] = $this->enableVRDT;
        }
        if (null !== $this->numa) {
            $res['Numa'] = $this->numa;
        }
        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }
        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
        }
        if (null !== $this->turboMode) {
            $res['TurboMode'] = $this->turboMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreCount'])) {
            $model->coreCount = $map['CoreCount'];
        }
        if (isset($map['EnableVISST'])) {
            $model->enableVISST = $map['EnableVISST'];
        }
        if (isset($map['EnableVRDT'])) {
            $model->enableVRDT = $map['EnableVRDT'];
        }
        if (isset($map['Numa'])) {
            $model->numa = $map['Numa'];
        }
        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }
        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
        }
        if (isset($map['TurboMode'])) {
            $model->turboMode = $map['TurboMode'];
        }

        return $model;
    }
}
