<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest;

use AlibabaCloud\Dara\Model;

class answerTextList extends Model
{
    /**
     * @var string
     */
    public $answerText;
    protected $_name = [
        'answerText' => 'AnswerText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerText) {
            $res['AnswerText'] = $this->answerText;
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
        if (isset($map['AnswerText'])) {
            $model->answerText = $map['AnswerText'];
        }

        return $model;
    }
}
