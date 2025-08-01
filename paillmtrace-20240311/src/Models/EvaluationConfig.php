<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig\answer;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig\context;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig\query;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = null !== $this->answer ? $this->answer->toMap() : null;
        }
        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toMap() : null;
        }
        if (null !== $this->query) {
            $res['Query'] = null !== $this->query ? $this->query->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluationConfig
     */
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
