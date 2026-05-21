<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionRequest\toolConfig\mcpServers;

class toolConfig extends Model
{
    /**
     * @var mcpServers[]
     */
    public $mcpServers;
    protected $_name = [
        'mcpServers' => 'McpServers',
    ];

    public function validate()
    {
        if (\is_array($this->mcpServers)) {
            Model::validateArray($this->mcpServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServers) {
            if (\is_array($this->mcpServers)) {
                $res['McpServers'] = [];
                $n1 = 0;
                foreach ($this->mcpServers as $item1) {
                    $res['McpServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['McpServers'])) {
            if (!empty($map['McpServers'])) {
                $model->mcpServers = [];
                $n1 = 0;
                foreach ($map['McpServers'] as $item1) {
                    $model->mcpServers[$n1] = mcpServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
