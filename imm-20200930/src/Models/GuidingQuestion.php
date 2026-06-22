<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GuidingQuestion extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $question;
    protected $_name = [
        'answer' => 'Answer',
        'question' => 'Question',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
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
            $model->answer = $map['Answer'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        return $model;
    }
}
