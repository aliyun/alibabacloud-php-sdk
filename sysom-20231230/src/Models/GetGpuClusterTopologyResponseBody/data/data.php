<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetGpuClusterTopologyResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed
     */
    public $edges;

    /**
     * @var mixed
     */
    public $nodes;
    protected $_name = [
        'edges' => 'edges',
        'nodes' => 'nodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edges) {
            $res['edges'] = $this->edges;
        }

        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
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
        if (isset($map['edges'])) {
            $model->edges = $map['edges'];
        }

        if (isset($map['nodes'])) {
            $model->nodes = $map['nodes'];
        }

        return $model;
    }
}
