<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody\jobInfo;

use AlibabaCloud\Tea\Model;

class resourcesUsed extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $cores;

    /**
     * @example 512mb
     *
     * @var string
     */
    public $memory;

    /**
     * @example 2
     *
     * @var string
     */
    public $nodes;
    protected $_name = [
        'cores'  => 'Cores',
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
     * @return resourcesUsed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
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
