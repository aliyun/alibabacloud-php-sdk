<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsWithFiltersResponseBody\jobs;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The number of CPUs that were used to run the job.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The number of nodes that were used to run the job.
     *
     * @example 0
     *
     * @var int
     */
    public $nodes;
    protected $_name = [
        'cores' => 'Cores',
        'nodes' => 'Nodes',
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
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }

        return $model;
    }
}
