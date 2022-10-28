<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateTaskFlowEdgesRequest\edges;
use AlibabaCloud\Tea\Model;

class UpdateTaskFlowEdgesRequest extends Model
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
        'tid'   => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->edges) {
            $res['Edges'] = [];
            if (null !== $this->edges && \is_array($this->edges)) {
                $n = 0;
                foreach ($this->edges as $item) {
                    $res['Edges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowEdgesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['Edges'])) {
            if (!empty($map['Edges'])) {
                $model->edges = [];
                $n            = 0;
                foreach ($map['Edges'] as $item) {
                    $model->edges[$n++] = null !== $item ? edges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
