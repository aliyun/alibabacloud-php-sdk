<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest\nodeGroups\hyperNodes;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest\nodeGroups\nodes;

class nodeGroups extends Model
{
    /**
     * @var hyperNodes[]
     */
    public $hyperNodes;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'hyperNodes' => 'HyperNodes',
        'nodeGroupId' => 'NodeGroupId',
        'nodes' => 'Nodes',
    ];

    public function validate()
    {
        if (\is_array($this->hyperNodes)) {
            Model::validateArray($this->hyperNodes);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hyperNodes) {
            if (\is_array($this->hyperNodes)) {
                $res['HyperNodes'] = [];
                $n1 = 0;
                foreach ($this->hyperNodes as $item1) {
                    $res['HyperNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['HyperNodes'])) {
            if (!empty($map['HyperNodes'])) {
                $model->hyperNodes = [];
                $n1 = 0;
                foreach ($map['HyperNodes'] as $item1) {
                    $model->hyperNodes[$n1] = hyperNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1] = nodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
