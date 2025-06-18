<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddTaskFlowEdgesRequest\edges;

class AddTaskFlowEdgesRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;

    /**
     * @var edges[]
     */
    public $edges;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId' => 'DagId',
        'edges' => 'Edges',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->edges)) {
            Model::validateArray($this->edges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }

        if (null !== $this->edges) {
            if (\is_array($this->edges)) {
                $res['Edges'] = [];
                $n1 = 0;
                foreach ($this->edges as $item1) {
                    $res['Edges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        if (isset($map['Edges'])) {
            if (!empty($map['Edges'])) {
                $model->edges = [];
                $n1 = 0;
                foreach ($map['Edges'] as $item1) {
                    $model->edges[$n1] = edges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
