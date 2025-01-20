<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody\data\interveneRuleDetail;

use AlibabaCloud\Dara\Model;

class answerConfig extends Model
{
    /**
     * @var int
     */
    public $answerType;
    /**
     * @var string
     */
    public $message;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
