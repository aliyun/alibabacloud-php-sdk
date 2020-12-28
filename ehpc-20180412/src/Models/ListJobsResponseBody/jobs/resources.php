<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var int
     */
    public $nodes;

    /**
     * @var int
     */
    public $cores;
    protected $_name = [
        'nodes' => 'Nodes',
        'cores' => 'Cores',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
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
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }

        return $model;
    }
}
