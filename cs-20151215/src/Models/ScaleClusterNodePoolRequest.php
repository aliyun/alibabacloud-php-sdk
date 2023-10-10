<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ScaleClusterNodePoolRequest extends Model
{
    /**
     * @description The number of worker nodes that you want to add. You can add at most 500 nodes in one API call. The maximum number of nodes that can be added is limited by the quota of nodes in the cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'count' => 'count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleClusterNodePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        return $model;
    }
}
