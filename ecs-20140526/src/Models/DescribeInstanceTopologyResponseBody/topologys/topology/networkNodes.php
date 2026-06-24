<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody\topologys\topology;

use AlibabaCloud\Dara\Model;

class networkNodes extends Model
{
    /**
     * @var string[]
     */
    public $networkNodes;
    protected $_name = [
        'networkNodes' => 'NetworkNodes',
    ];

    public function validate()
    {
        if (\is_array($this->networkNodes)) {
            Model::validateArray($this->networkNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkNodes) {
            if (\is_array($this->networkNodes)) {
                $res['NetworkNodes'] = [];
                $n1 = 0;
                foreach ($this->networkNodes as $item1) {
                    $res['NetworkNodes'][$n1] = $item1;
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
        if (isset($map['NetworkNodes'])) {
            if (!empty($map['NetworkNodes'])) {
                $model->networkNodes = [];
                $n1 = 0;
                foreach ($map['NetworkNodes'] as $item1) {
                    $model->networkNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
