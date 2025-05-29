<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\llmConfig\llmHistory;

class llmConfig extends Model
{
    /**
     * @var string
     */
    public $bailianAppParams;

    /**
     * @var llmHistory[]
     */
    public $llmHistory;

    /**
     * @var int
     */
    public $llmHistoryLimit;

    /**
     * @var string
     */
    public $llmSystemPrompt;
    protected $_name = [
        'bailianAppParams' => 'BailianAppParams',
        'llmHistory' => 'LlmHistory',
        'llmHistoryLimit' => 'LlmHistoryLimit',
        'llmSystemPrompt' => 'LlmSystemPrompt',
    ];

    public function validate()
    {
        if (\is_array($this->llmHistory)) {
            Model::validateArray($this->llmHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bailianAppParams) {
            $res['BailianAppParams'] = $this->bailianAppParams;
        }

        if (null !== $this->llmHistory) {
            if (\is_array($this->llmHistory)) {
                $res['LlmHistory'] = [];
                $n1 = 0;
                foreach ($this->llmHistory as $item1) {
                    $res['LlmHistory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->llmHistoryLimit) {
            $res['LlmHistoryLimit'] = $this->llmHistoryLimit;
        }

        if (null !== $this->llmSystemPrompt) {
            $res['LlmSystemPrompt'] = $this->llmSystemPrompt;
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
        if (isset($map['BailianAppParams'])) {
            $model->bailianAppParams = $map['BailianAppParams'];
        }

        if (isset($map['LlmHistory'])) {
            if (!empty($map['LlmHistory'])) {
                $model->llmHistory = [];
                $n1 = 0;
                foreach ($map['LlmHistory'] as $item1) {
                    $model->llmHistory[$n1++] = llmHistory::fromMap($item1);
                }
            }
        }

        if (isset($map['LlmHistoryLimit'])) {
            $model->llmHistoryLimit = $map['LlmHistoryLimit'];
        }

        if (isset($map['LlmSystemPrompt'])) {
            $model->llmSystemPrompt = $map['LlmSystemPrompt'];
        }

        return $model;
    }
}
