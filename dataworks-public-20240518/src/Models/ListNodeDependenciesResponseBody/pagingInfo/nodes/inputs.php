<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\nodeOutputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\tables;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\variables;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @description The node outputs.
     *
     * @var nodeOutputs[]
     */
    public $nodeOutputs;

    /**
     * @description The tables.
     *
     * @var tables[]
     */
    public $tables;

    /**
     * @description The variables.
     *
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'nodeOutputs' => 'NodeOutputs',
        'tables'      => 'Tables',
        'variables'   => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeOutputs) {
            $res['NodeOutputs'] = [];
            if (null !== $this->nodeOutputs && \is_array($this->nodeOutputs)) {
                $n = 0;
                foreach ($this->nodeOutputs as $item) {
                    $res['NodeOutputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeOutputs'])) {
            if (!empty($map['NodeOutputs'])) {
                $model->nodeOutputs = [];
                $n                  = 0;
                foreach ($map['NodeOutputs'] as $item) {
                    $model->nodeOutputs[$n++] = null !== $item ? nodeOutputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
