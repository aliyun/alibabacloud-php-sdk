<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsResponseBody\result;

use AlibabaCloud\Tea\Model;

class dialogs extends Model
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
        'answer'   => 'Answer',
        'question' => 'Question',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dialogs
     */
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
