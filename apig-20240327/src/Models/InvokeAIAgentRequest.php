<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\InvokeAIAgentRequest\history;

class InvokeAIAgentRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string[]
     */
    public $bizParams;

    /**
     * @var history[]
     */
    public $history;

    /**
     * @var string
     */
    public $outputLanguage;

    /**
     * @var string
     */
    public $prompt;
    protected $_name = [
        'agentName' => 'agentName',
        'bizParams' => 'bizParams',
        'history' => 'history',
        'outputLanguage' => 'outputLanguage',
        'prompt' => 'prompt',
    ];

    public function validate()
    {
        if (\is_array($this->bizParams)) {
            Model::validateArray($this->bizParams);
        }
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
        }

        if (null !== $this->bizParams) {
            if (\is_array($this->bizParams)) {
                $res['bizParams'] = [];
                foreach ($this->bizParams as $key1 => $value1) {
                    $res['bizParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['history'] = [];
                $n1 = 0;
                foreach ($this->history as $item1) {
                    $res['history'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outputLanguage) {
            $res['outputLanguage'] = $this->outputLanguage;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
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
        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
        }

        if (isset($map['bizParams'])) {
            if (!empty($map['bizParams'])) {
                $model->bizParams = [];
                foreach ($map['bizParams'] as $key1 => $value1) {
                    $model->bizParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['history'])) {
            if (!empty($map['history'])) {
                $model->history = [];
                $n1 = 0;
                foreach ($map['history'] as $item1) {
                    $model->history[$n1] = history::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['outputLanguage'])) {
            $model->outputLanguage = $map['outputLanguage'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        return $model;
    }
}
