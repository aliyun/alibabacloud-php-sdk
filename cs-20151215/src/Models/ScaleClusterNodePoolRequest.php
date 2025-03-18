<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ScaleClusterNodePoolRequest extends Model
{
    /**
     * @description The number of worker nodes that you want to add. For example, the current node pool contains two nodes. After the two node is scaled out, the node pool contains four nodes. Due to the limit of the node quota, you can add at most 500 nodes in each request.
     *
     * @example 2
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'count' => 'count',
    ];

    public function validate() {}

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
