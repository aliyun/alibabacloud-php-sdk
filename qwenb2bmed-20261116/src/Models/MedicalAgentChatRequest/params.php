<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalAgentChatRequest;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $deepthink;

    /**
     * @var string
     */
    public $directAgent;

    /**
     * @var bool
     */
    public $responseStreaming;
    protected $_name = [
        'deepthink' => 'deepthink',
        'directAgent' => 'directAgent',
        'responseStreaming' => 'responseStreaming',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deepthink) {
            $res['deepthink'] = $this->deepthink;
        }

        if (null !== $this->directAgent) {
            $res['directAgent'] = $this->directAgent;
        }

        if (null !== $this->responseStreaming) {
            $res['responseStreaming'] = $this->responseStreaming;
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
        if (isset($map['deepthink'])) {
            $model->deepthink = $map['deepthink'];
        }

        if (isset($map['directAgent'])) {
            $model->directAgent = $map['directAgent'];
        }

        if (isset($map['responseStreaming'])) {
            $model->responseStreaming = $map['responseStreaming'];
        }

        return $model;
    }
}
