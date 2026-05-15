<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\knowledgeConfig\knowledgeIds;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\knowledgeConfig\ragConfig;

class knowledgeConfig extends Model
{
    /**
     * @var knowledgeIds[]
     */
    public $knowledgeIds;

    /**
     * @var ragConfig
     */
    public $ragConfig;
    protected $_name = [
        'knowledgeIds' => 'KnowledgeIds',
        'ragConfig' => 'RagConfig',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeIds)) {
            Model::validateArray($this->knowledgeIds);
        }
        if (null !== $this->ragConfig) {
            $this->ragConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeIds) {
            if (\is_array($this->knowledgeIds)) {
                $res['KnowledgeIds'] = [];
                $n1 = 0;
                foreach ($this->knowledgeIds as $item1) {
                    $res['KnowledgeIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ragConfig) {
            $res['RagConfig'] = null !== $this->ragConfig ? $this->ragConfig->toArray($noStream) : $this->ragConfig;
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
        if (isset($map['KnowledgeIds'])) {
            if (!empty($map['KnowledgeIds'])) {
                $model->knowledgeIds = [];
                $n1 = 0;
                foreach ($map['KnowledgeIds'] as $item1) {
                    $model->knowledgeIds[$n1] = knowledgeIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RagConfig'])) {
            $model->ragConfig = ragConfig::fromMap($map['RagConfig']);
        }

        return $model;
    }
}
