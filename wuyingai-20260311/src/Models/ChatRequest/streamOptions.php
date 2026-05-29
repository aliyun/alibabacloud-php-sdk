<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatRequest;

use AlibabaCloud\Dara\Model;

class streamOptions extends Model
{
    /**
     * @var bool
     */
    public $includeReasoning;

    /**
     * @var bool
     */
    public $includeToolCalls;
    protected $_name = [
        'includeReasoning' => 'IncludeReasoning',
        'includeToolCalls' => 'IncludeToolCalls',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeReasoning) {
            $res['IncludeReasoning'] = $this->includeReasoning;
        }

        if (null !== $this->includeToolCalls) {
            $res['IncludeToolCalls'] = $this->includeToolCalls;
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
        if (isset($map['IncludeReasoning'])) {
            $model->includeReasoning = $map['IncludeReasoning'];
        }

        if (isset($map['IncludeToolCalls'])) {
            $model->includeToolCalls = $map['IncludeToolCalls'];
        }

        return $model;
    }
}
