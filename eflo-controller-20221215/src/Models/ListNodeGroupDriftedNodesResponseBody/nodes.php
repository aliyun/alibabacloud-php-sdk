<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNodeGroupDriftedNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNodeGroupDriftedNodesResponseBody\nodes\propertyDrifts;

class nodes extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var propertyDrifts[]
     */
    public $propertyDrifts;
    protected $_name = [
        'nodeId' => 'NodeId',
        'propertyDrifts' => 'PropertyDrifts',
    ];

    public function validate()
    {
        if (\is_array($this->propertyDrifts)) {
            Model::validateArray($this->propertyDrifts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->propertyDrifts) {
            if (\is_array($this->propertyDrifts)) {
                $res['PropertyDrifts'] = [];
                $n1 = 0;
                foreach ($this->propertyDrifts as $item1) {
                    $res['PropertyDrifts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PropertyDrifts'])) {
            if (!empty($map['PropertyDrifts'])) {
                $model->propertyDrifts = [];
                $n1 = 0;
                foreach ($map['PropertyDrifts'] as $item1) {
                    $model->propertyDrifts[$n1] = propertyDrifts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
