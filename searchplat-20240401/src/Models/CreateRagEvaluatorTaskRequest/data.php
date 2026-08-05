<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateRagEvaluatorTaskRequest;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $modelAnswer;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string[]
     */
    public $recallDocs;

    /**
     * @var string
     */
    public $standardAnswer;
    protected $_name = [
        'modelAnswer' => 'model_answer',
        'question' => 'question',
        'recallDocs' => 'recall_docs',
        'standardAnswer' => 'standard_answer',
    ];

    public function validate()
    {
        if (\is_array($this->recallDocs)) {
            Model::validateArray($this->recallDocs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelAnswer) {
            $res['model_answer'] = $this->modelAnswer;
        }

        if (null !== $this->question) {
            $res['question'] = $this->question;
        }

        if (null !== $this->recallDocs) {
            if (\is_array($this->recallDocs)) {
                $res['recall_docs'] = [];
                $n1 = 0;
                foreach ($this->recallDocs as $item1) {
                    $res['recall_docs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardAnswer) {
            $res['standard_answer'] = $this->standardAnswer;
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
        if (isset($map['model_answer'])) {
            $model->modelAnswer = $map['model_answer'];
        }

        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        if (isset($map['recall_docs'])) {
            if (!empty($map['recall_docs'])) {
                $model->recallDocs = [];
                $n1 = 0;
                foreach ($map['recall_docs'] as $item1) {
                    $model->recallDocs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['standard_answer'])) {
            $model->standardAnswer = $map['standard_answer'];
        }

        return $model;
    }
}
