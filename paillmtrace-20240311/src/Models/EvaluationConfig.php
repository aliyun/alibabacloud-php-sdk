<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig\answer;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig\context;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig\query;

class EvaluationConfig extends Model
{
    /**
     * @var answer
     */
    public $answer;

    /**
     * @var context
     */
    public $context;

    /**
     * @var query
     */
    public $query;
    protected $_name = [
        'answer' => 'Answer',
        'context' => 'Context',
        'query' => 'Query',
    ];

    public function validate()
    {
        if (null !== $this->answer) {
            $this->answer->validate();
        }
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (null !== $this->query) {
            $this->query->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = null !== $this->answer ? $this->answer->toArray($noStream) : $this->answer;
        }

        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->query) {
            $res['Query'] = null !== $this->query ? $this->query->toArray($noStream) : $this->query;
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
        if (isset($map['Answer'])) {
            $model->answer = answer::fromMap($map['Answer']);
        }

        if (isset($map['Context'])) {
            $model->context = context::fromMap($map['Context']);
        }

        if (isset($map['Query'])) {
            $model->query = query::fromMap($map['Query']);
        }

        return $model;
    }
}
