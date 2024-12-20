<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class parseQaResults extends Model
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
        'answer'   => 'answer',
        'question' => 'question',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }
        if (null !== $this->question) {
            $res['question'] = $this->question;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parseQaResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }
        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        return $model;
    }
}
