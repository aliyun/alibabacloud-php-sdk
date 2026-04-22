<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionRequest\params\meta;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionRequest\params\prompt;

class params extends Model
{
    /**
     * @var meta
     */
    public $meta;

    /**
     * @var prompt[]
     */
    public $prompt;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'meta' => 'Meta',
        'prompt' => 'Prompt',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        if (\is_array($this->prompt)) {
            Model::validateArray($this->prompt);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->prompt) {
            if (\is_array($this->prompt)) {
                $res['Prompt'] = [];
                $n1 = 0;
                foreach ($this->prompt as $item1) {
                    $res['Prompt'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }

        if (isset($map['Prompt'])) {
            if (!empty($map['Prompt'])) {
                $model->prompt = [];
                $n1 = 0;
                foreach ($map['Prompt'] as $item1) {
                    $model->prompt[$n1] = prompt::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
