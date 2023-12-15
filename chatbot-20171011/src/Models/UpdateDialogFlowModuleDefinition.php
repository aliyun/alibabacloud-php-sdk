<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateDialogFlowModuleDefinition extends Model
{
    /**
     * @var PaasEdgeDTO[]
     */
    public $edges;

    /**
     * @var PaasNodeDTO[]
     */
    public $nodes;
    protected $_name = [
        'edges' => 'Edges',
        'nodes' => 'Nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edges) {
            $res['Edges'] = [];
            if (null !== $this->edges && \is_array($this->edges)) {
                $n = 0;
                foreach ($this->edges as $item) {
                    $res['Edges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDialogFlowModuleDefinition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edges'])) {
            if (!empty($map['Edges'])) {
                $model->edges = [];
                $n            = 0;
                foreach ($map['Edges'] as $item) {
                    $model->edges[$n++] = null !== $item ? PaasEdgeDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? PaasNodeDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
