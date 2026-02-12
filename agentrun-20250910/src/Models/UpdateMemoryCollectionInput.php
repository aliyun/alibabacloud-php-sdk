<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateMemoryCollectionInput extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var EmbedderConfig
     */
    public $embedderConfig;

    /**
     * @var bool
     */
    public $enableConversationHistory;

    /**
     * @var bool
     */
    public $enableConversationState;

    /**
     * @var string
     */
    public $executionRoleArn;

    /**
     * @var LLMConfig
     */
    public $llmConfig;

    /**
     * @var NetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var VectorStoreConfig
     */
    public $vectorStoreConfig;
    protected $_name = [
        'description' => 'description',
        'embedderConfig' => 'embedderConfig',
        'enableConversationHistory' => 'enableConversationHistory',
        'enableConversationState' => 'enableConversationState',
        'executionRoleArn' => 'executionRoleArn',
        'llmConfig' => 'llmConfig',
        'networkConfiguration' => 'networkConfiguration',
        'vectorStoreConfig' => 'vectorStoreConfig',
    ];

    public function validate()
    {
        if (null !== $this->embedderConfig) {
            $this->embedderConfig->validate();
        }
        if (null !== $this->llmConfig) {
            $this->llmConfig->validate();
        }
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        if (null !== $this->vectorStoreConfig) {
            $this->vectorStoreConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->embedderConfig) {
            $res['embedderConfig'] = null !== $this->embedderConfig ? $this->embedderConfig->toArray($noStream) : $this->embedderConfig;
        }

        if (null !== $this->enableConversationHistory) {
            $res['enableConversationHistory'] = $this->enableConversationHistory;
        }

        if (null !== $this->enableConversationState) {
            $res['enableConversationState'] = $this->enableConversationState;
        }

        if (null !== $this->executionRoleArn) {
            $res['executionRoleArn'] = $this->executionRoleArn;
        }

        if (null !== $this->llmConfig) {
            $res['llmConfig'] = null !== $this->llmConfig ? $this->llmConfig->toArray($noStream) : $this->llmConfig;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->vectorStoreConfig) {
            $res['vectorStoreConfig'] = null !== $this->vectorStoreConfig ? $this->vectorStoreConfig->toArray($noStream) : $this->vectorStoreConfig;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['embedderConfig'])) {
            $model->embedderConfig = EmbedderConfig::fromMap($map['embedderConfig']);
        }

        if (isset($map['enableConversationHistory'])) {
            $model->enableConversationHistory = $map['enableConversationHistory'];
        }

        if (isset($map['enableConversationState'])) {
            $model->enableConversationState = $map['enableConversationState'];
        }

        if (isset($map['executionRoleArn'])) {
            $model->executionRoleArn = $map['executionRoleArn'];
        }

        if (isset($map['llmConfig'])) {
            $model->llmConfig = LLMConfig::fromMap($map['llmConfig']);
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = NetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['vectorStoreConfig'])) {
            $model->vectorStoreConfig = VectorStoreConfig::fromMap($map['vectorStoreConfig']);
        }

        return $model;
    }
}
