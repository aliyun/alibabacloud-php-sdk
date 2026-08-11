<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class RefreshNodeGroupNodesRequest extends Model
{
    /**
     * @var string
     */
    public $maxDisruptiveAction;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string[]
     */
    public $nodeIds;
    protected $_name = [
        'maxDisruptiveAction' => 'MaxDisruptiveAction',
        'nodeGroupId' => 'NodeGroupId',
        'nodeIds' => 'NodeIds',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxDisruptiveAction) {
            $res['MaxDisruptiveAction'] = $this->maxDisruptiveAction;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1 = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1] = $item1;
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
        if (isset($map['MaxDisruptiveAction'])) {
            $model->maxDisruptiveAction = $map['MaxDisruptiveAction'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1 = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
