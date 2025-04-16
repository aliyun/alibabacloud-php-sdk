<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody\topologys\topology;

class topologys extends Model
{
    /**
     * @var topology[]
     */
    public $topology;
    protected $_name = [
        'topology' => 'Topology',
    ];

    public function validate()
    {
        if (\is_array($this->topology)) {
            Model::validateArray($this->topology);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topology) {
            if (\is_array($this->topology)) {
                $res['Topology'] = [];
                $n1 = 0;
                foreach ($this->topology as $item1) {
                    $res['Topology'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Topology'])) {
            if (!empty($map['Topology'])) {
                $model->topology = [];
                $n1 = 0;
                foreach ($map['Topology'] as $item1) {
                    $model->topology[$n1++] = topology::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
