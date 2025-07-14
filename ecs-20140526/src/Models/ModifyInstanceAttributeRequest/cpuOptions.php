<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest;

use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @description The number of CPU cores. This parameter cannot be specified but only uses its default value.
     *
     * @example 2
     *
     * @var int
     */
    public $core;

    /**
     * @description The number of threads per CPU core. The following formula is used to calculate the number of vCPUs of the instance: `CpuOptions.Core` value × `CpuOptions.ThreadsPerCore` value.
     *
     *   If `CpuOptionsThreadPerCore` is set to 1, Hyper-Threading (HT) is disabled.
     *   This parameter is applicable only to specific instance types.
     *
     * @example 2
     *
     * @var int
     */
    public $threadsPerCore;

    /**
     * @description The CPU topology type of the instance. Valid values:
     *
     *   ContinuousCoreToHTMapping: The Hyper-Threading (HT) technology allows continuous threads to run on the same core in the CPU topology of the instance.
     *   DiscreteCoreToHTMapping: The HT technology allows discrete threads to run on the same core.
     *
     * This parameter is left empty by default.
     *
     * Take note of the following items:
     *
     *   The instance must be in the Stopped (`Stopped`) state.
     *
     * >  This parameter is supported only for specific instance families. For information about the supported instance families, see [View and modify CPU topologies](https://help.aliyun.com/document_detail/2636059.html).
     *
     * @example DiscreteCoreToHTMapping
     *
     * @var string
     */
    public $topologyType;
    protected $_name = [
        'core' => 'Core',
        'threadsPerCore' => 'ThreadsPerCore',
        'topologyType' => 'TopologyType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }
        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }
        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
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
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }
        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }
        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
        }

        return $model;
    }
}
