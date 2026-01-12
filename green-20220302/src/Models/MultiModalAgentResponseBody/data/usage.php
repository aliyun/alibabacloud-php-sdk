<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var mixed[]
     */
    public $agentDetail;

    /**
     * @var int
     */
    public $contentLength;

    /**
     * @var int
     */
    public $promptLength;
    protected $_name = [
        'agentDetail' => 'AgentDetail',
        'contentLength' => 'ContentLength',
        'promptLength' => 'PromptLength',
    ];

    public function validate()
    {
        if (\is_array($this->agentDetail)) {
            Model::validateArray($this->agentDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDetail) {
            if (\is_array($this->agentDetail)) {
                $res['AgentDetail'] = [];
                foreach ($this->agentDetail as $key1 => $value1) {
                    $res['AgentDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->contentLength) {
            $res['ContentLength'] = $this->contentLength;
        }

        if (null !== $this->promptLength) {
            $res['PromptLength'] = $this->promptLength;
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
        if (isset($map['AgentDetail'])) {
            if (!empty($map['AgentDetail'])) {
                $model->agentDetail = [];
                foreach ($map['AgentDetail'] as $key1 => $value1) {
                    $model->agentDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['ContentLength'])) {
            $model->contentLength = $map['ContentLength'];
        }

        if (isset($map['PromptLength'])) {
            $model->promptLength = $map['PromptLength'];
        }

        return $model;
    }
}
