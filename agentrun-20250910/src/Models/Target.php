<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class Target extends Model
{
    /**
     * @var LLMAPIConfiguration
     */
    public $llmConfig;

    /**
     * @var MCPAPI
     */
    public $mcpAPI;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'llmConfig' => 'llmConfig',
        'mcpAPI' => 'mcpAPI',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        if (null !== $this->llmConfig) {
            $this->llmConfig->validate();
        }
        if (null !== $this->mcpAPI) {
            $this->mcpAPI->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmConfig) {
            $res['llmConfig'] = null !== $this->llmConfig ? $this->llmConfig->toArray($noStream) : $this->llmConfig;
        }

        if (null !== $this->mcpAPI) {
            $res['mcpAPI'] = null !== $this->mcpAPI ? $this->mcpAPI->toArray($noStream) : $this->mcpAPI;
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
        if (isset($map['llmConfig'])) {
            $model->llmConfig = LLMAPIConfiguration::fromMap($map['llmConfig']);
        }

        if (isset($map['mcpAPI'])) {
            $model->mcpAPI = MCPAPI::fromMap($map['mcpAPI']);
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
