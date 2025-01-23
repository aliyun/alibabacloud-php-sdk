<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeParentsResponseBody\data\nodes;

class data extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'nodes' => 'Nodes',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1           = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1           = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
