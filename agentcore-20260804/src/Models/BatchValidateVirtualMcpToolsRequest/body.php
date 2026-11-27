<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\BatchValidateVirtualMcpToolsRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string[]
     */
    public $mcpIds;
    protected $_name = [
        'mcpIds' => 'mcpIds',
    ];

    public function validate()
    {
        if (\is_array($this->mcpIds)) {
            Model::validateArray($this->mcpIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpIds) {
            if (\is_array($this->mcpIds)) {
                $res['mcpIds'] = [];
                $n1 = 0;
                foreach ($this->mcpIds as $item1) {
                    $res['mcpIds'][$n1] = $item1;
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
        if (isset($map['mcpIds'])) {
            if (!empty($map['mcpIds'])) {
                $model->mcpIds = [];
                $n1 = 0;
                foreach ($map['mcpIds'] as $item1) {
                    $model->mcpIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
