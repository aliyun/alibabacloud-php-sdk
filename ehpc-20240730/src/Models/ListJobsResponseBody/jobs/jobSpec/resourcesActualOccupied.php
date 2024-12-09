<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs\jobSpec;

use AlibabaCloud\Tea\Model;

class resourcesActualOccupied extends Model
{
    /**
     * @var string
     */
    public $cores;

    /**
     * @var string
     */
    public $gpus;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
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
     * @return resourcesActualOccupied
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
