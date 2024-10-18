<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateJobRequest\jobSpec;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The number of vCPUs to be allocated to each compute node.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The number of GPUs to be allocated to each compute node.
     *
     * @example 1
     *
     * @var int
     */
    public $gpus;

    /**
     * @description The memory size to be allocated to each compute node. The memory size is in string format. Unit: MB or GB.
     *
     * @example 4gb
     *
     * @var string
     */
    public $memory;

    /**
     * @description The number of compute nodes to be allocated to the job.
     *
     * @example 2
     *
     * @var int
     */
    public $nodes;
    protected $_name = [
        'cores'  => 'Cores',
        'gpus'   => 'Gpus',
        'memory' => 'Memory',
        'nodes'  => 'Nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->gpus) {
            $res['Gpus'] = $this->gpus;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Gpus'])) {
            $model->gpus = $map['Gpus'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }

        return $model;
    }
}
