<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody\agent;

use AlibabaCloud\Dara\Model;

class tools extends Model
{
    /**
     * @var string
     */
    public $builtinName;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string[]
     */
    public $mcpItems;

    /**
     * @var string
     */
    public $mcpServerName;
    protected $_name = [
        'builtinName' => 'BuiltinName',
        'kind' => 'Kind',
        'mcpItems' => 'McpItems',
        'mcpServerName' => 'McpServerName',
    ];

    public function validate()
    {
        if (\is_array($this->mcpItems)) {
            Model::validateArray($this->mcpItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->builtinName) {
            $res['BuiltinName'] = $this->builtinName;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->mcpItems) {
            if (\is_array($this->mcpItems)) {
                $res['McpItems'] = [];
                $n1 = 0;
                foreach ($this->mcpItems as $item1) {
                    $res['McpItems'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mcpServerName) {
            $res['McpServerName'] = $this->mcpServerName;
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
        if (isset($map['BuiltinName'])) {
            $model->builtinName = $map['BuiltinName'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['McpItems'])) {
            if (!empty($map['McpItems'])) {
                $model->mcpItems = [];
                $n1 = 0;
                foreach ($map['McpItems'] as $item1) {
                    $model->mcpItems[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['McpServerName'])) {
            $model->mcpServerName = $map['McpServerName'];
        }

        return $model;
    }
}
