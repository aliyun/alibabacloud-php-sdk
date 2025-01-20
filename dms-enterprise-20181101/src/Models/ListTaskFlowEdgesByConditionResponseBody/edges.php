<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowEdgesByConditionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowEdgesByConditionResponseBody\edges\edge;

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
        if (\is_array($this->edge)) {
            Model::validateArray($this->edge);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edge) {
            if (\is_array($this->edge)) {
                $res['Edge'] = [];
                $n1          = 0;
                foreach ($this->edge as $item1) {
                    $res['Edge'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Edge'])) {
            if (!empty($map['Edge'])) {
                $model->edge = [];
                $n1          = 0;
                foreach ($map['Edge'] as $item1) {
                    $model->edge[$n1++] = edge::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
