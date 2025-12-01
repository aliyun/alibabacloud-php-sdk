<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\autoSpeechConfig\llmPending;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\autoSpeechConfig\userIdle;

class autoSpeechConfig extends Model
{
    /**
     * @var llmPending
     */
    public $llmPending;

    /**
     * @var userIdle
     */
    public $userIdle;
    protected $_name = [
        'llmPending' => 'LlmPending',
        'userIdle' => 'UserIdle',
    ];

    public function validate()
    {
        if (null !== $this->llmPending) {
            $this->llmPending->validate();
        }
        if (null !== $this->userIdle) {
            $this->userIdle->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmPending) {
            $res['LlmPending'] = null !== $this->llmPending ? $this->llmPending->toArray($noStream) : $this->llmPending;
        }

        if (null !== $this->userIdle) {
            $res['UserIdle'] = null !== $this->userIdle ? $this->userIdle->toArray($noStream) : $this->userIdle;
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
        if (isset($map['LlmPending'])) {
            $model->llmPending = llmPending::fromMap($map['LlmPending']);
        }

        if (isset($map['UserIdle'])) {
            $model->userIdle = userIdle::fromMap($map['UserIdle']);
        }

        return $model;
    }
}
