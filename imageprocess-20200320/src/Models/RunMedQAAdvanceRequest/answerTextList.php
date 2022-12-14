<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAAdvanceRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerText) {
            $res['AnswerText'] = $this->answerText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return answerTextList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerText'])) {
            $model->answerText = $map['AnswerText'];
        }

        return $model;
    }
}
