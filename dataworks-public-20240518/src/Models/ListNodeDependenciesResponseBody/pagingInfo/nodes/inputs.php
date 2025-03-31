<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\nodeOutputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\tables;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\variables;

class inputs extends Model
{
    /**
     * @var nodeOutputs[]
     */
    public $nodeOutputs;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'nodeOutputs' => 'NodeOutputs',
        'tables' => 'Tables',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        if (\is_array($this->nodeOutputs)) {
            Model::validateArray($this->nodeOutputs);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeOutputs) {
            if (\is_array($this->nodeOutputs)) {
                $res['NodeOutputs'] = [];
                $n1 = 0;
                foreach ($this->nodeOutputs as $item1) {
                    $res['NodeOutputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['Variables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeOutputs'])) {
            if (!empty($map['NodeOutputs'])) {
                $model->nodeOutputs = [];
                $n1 = 0;
                foreach ($map['NodeOutputs'] as $item1) {
                    $model->nodeOutputs[$n1++] = nodeOutputs::fromMap($item1);
                }
            }
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = tables::fromMap($item1);
                }
            }
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['Variables'] as $item1) {
                    $model->variables[$n1++] = variables::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
