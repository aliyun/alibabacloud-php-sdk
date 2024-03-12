<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig;

use AlibabaCloud\Tea\Model;

class answerConfig extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $answerType;

    /**
     * @var string
     */
    public $message;

    /**
     * @example namespace_qa_query
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'answerType' => 'AnswerType',
        'message'    => 'Message',
        'namespace'  => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerType) {
            $res['AnswerType'] = $this->answerType;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return answerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerType'])) {
            $model->answerType = $map['AnswerType'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
