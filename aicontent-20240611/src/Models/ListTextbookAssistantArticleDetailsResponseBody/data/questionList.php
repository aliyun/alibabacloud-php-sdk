<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class questionList extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $questionTranslate;
    protected $_name = [
        'answer' => 'answer',
        'question' => 'question',
        'questionTranslate' => 'questionTranslate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }

        if (null !== $this->question) {
            $res['question'] = $this->question;
        }

        if (null !== $this->questionTranslate) {
            $res['questionTranslate'] = $this->questionTranslate;
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
        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }

        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        if (isset($map['questionTranslate'])) {
            $model->questionTranslate = $map['questionTranslate'];
        }

        return $model;
    }
}
