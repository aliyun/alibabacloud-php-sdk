<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph\edges\edge;
use AlibabaCloud\Tea\Model;

class edges extends Model
{
    /**
     * @var edge[]
     */
    public $edge;
    protected $_name = [
        'edge' => 'Edge',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edge) {
            $res['Edge'] = [];
            if (null !== $this->edge && \is_array($this->edge)) {
                $n = 0;
                foreach ($this->edge as $item) {
                    $res['Edge'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Edge'])) {
            if (!empty($map['Edge'])) {
                $model->edge = [];
                $n           = 0;
                foreach ($map['Edge'] as $item) {
                    $model->edge[$n++] = null !== $item ? edge::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
