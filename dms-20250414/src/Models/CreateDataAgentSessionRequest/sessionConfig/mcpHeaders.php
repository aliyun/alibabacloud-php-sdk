<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataAgentSessionRequest\sessionConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataAgentSessionRequest\sessionConfig\mcpHeaders\mcpHeader;

class mcpHeaders extends Model
{
    /**
     * @var mcpHeader[]
     */
    public $mcpHeader;

    /**
     * @var string
     */
    public $mcpServerId;
    protected $_name = [
        'mcpHeader' => 'McpHeader',
        'mcpServerId' => 'McpServerId',
    ];

    public function validate()
    {
        if (\is_array($this->mcpHeader)) {
            Model::validateArray($this->mcpHeader);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpHeader) {
            if (\is_array($this->mcpHeader)) {
                $res['McpHeader'] = [];
                $n1 = 0;
                foreach ($this->mcpHeader as $item1) {
                    $res['McpHeader'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mcpServerId) {
            $res['McpServerId'] = $this->mcpServerId;
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
        if (isset($map['McpHeader'])) {
            if (!empty($map['McpHeader'])) {
                $model->mcpHeader = [];
                $n1 = 0;
                foreach ($map['McpHeader'] as $item1) {
                    $model->mcpHeader[$n1] = mcpHeader::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['McpServerId'])) {
            $model->mcpServerId = $map['McpServerId'];
        }

        return $model;
    }
}
