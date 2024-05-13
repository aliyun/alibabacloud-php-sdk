<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddTaskFlowEdgesRequest;

use AlibabaCloud\Tea\Model;

class edges extends Model
{
    /**
     * @description The ID of the node where the end node of the edge is located.
     *
     * This parameter is required.
     * @example 44***
     *
     * @var int
     */
    public $nodeEnd;

    /**
     * @description The ID of the node where the start node of the edge is located.
     *
     * This parameter is required.
     * @example 44***
     *
     * @var int
     */
    public $nodeFrom;
    protected $_name = [
        'nodeEnd'  => 'NodeEnd',
        'nodeFrom' => 'NodeFrom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeEnd) {
            $res['NodeEnd'] = $this->nodeEnd;
        }
        if (null !== $this->nodeFrom) {
            $res['NodeFrom'] = $this->nodeFrom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeEnd'])) {
            $model->nodeEnd = $map['NodeEnd'];
        }
        if (isset($map['NodeFrom'])) {
            $model->nodeFrom = $map['NodeFrom'];
        }

        return $model;
    }
}
