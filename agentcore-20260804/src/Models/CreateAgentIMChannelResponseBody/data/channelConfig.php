<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentIMChannelResponseBody\data;

use AlibabaCloud\Dara\Model;

class channelConfig extends Model
{
    /**
     * @var bool
     */
    public $showThinking;

    /**
     * @var bool
     */
    public $showToolCalls;
    protected $_name = [
        'showThinking' => 'showThinking',
        'showToolCalls' => 'showToolCalls',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->showThinking) {
            $res['showThinking'] = $this->showThinking;
        }

        if (null !== $this->showToolCalls) {
            $res['showToolCalls'] = $this->showToolCalls;
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
        if (isset($map['showThinking'])) {
            $model->showThinking = $map['showThinking'];
        }

        if (isset($map['showToolCalls'])) {
            $model->showToolCalls = $map['showToolCalls'];
        }

        return $model;
    }
}
