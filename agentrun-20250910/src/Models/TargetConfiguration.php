<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class TargetConfiguration extends Model
{
    /**
     * @var LLMAPIConfiguration
     */
    public $llmAPIConfig;

    /**
     * @var MCPAPIConfiguration
     */
    public $mcpAPIConfig;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'llmAPIConfig' => 'llmAPIConfig',
        'mcpAPIConfig' => 'mcpAPIConfig',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        if (null !== $this->llmAPIConfig) {
            $this->llmAPIConfig->validate();
        }
        if (null !== $this->mcpAPIConfig) {
            $this->mcpAPIConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmAPIConfig) {
            $res['llmAPIConfig'] = null !== $this->llmAPIConfig ? $this->llmAPIConfig->toArray($noStream) : $this->llmAPIConfig;
        }

        if (null !== $this->mcpAPIConfig) {
            $res['mcpAPIConfig'] = null !== $this->mcpAPIConfig ? $this->mcpAPIConfig->toArray($noStream) : $this->mcpAPIConfig;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['llmAPIConfig'])) {
            $model->llmAPIConfig = LLMAPIConfiguration::fromMap($map['llmAPIConfig']);
        }

        if (isset($map['mcpAPIConfig'])) {
            $model->mcpAPIConfig = MCPAPIConfiguration::fromMap($map['mcpAPIConfig']);
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
