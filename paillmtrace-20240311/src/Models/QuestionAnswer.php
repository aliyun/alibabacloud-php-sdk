<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\QuestionAnswer\answer;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\QuestionAnswer\groundTruth;
use AlibabaCloud\Tea\Model;

class QuestionAnswer extends Model
{
    /**
     * @var answer
     */
    public $answer;

    /**
     * @var groundTruth
     */
    public $groundTruth;

    /**
     * @var string
     */
    public $question;
    protected $_name = [
        'answer' => 'Answer',
        'groundTruth' => 'GroundTruth',
        'question' => 'Question',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = null !== $this->answer ? $this->answer->toMap() : null;
        }
        if (null !== $this->groundTruth) {
            $res['GroundTruth'] = null !== $this->groundTruth ? $this->groundTruth->toMap() : null;
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuestionAnswer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answer'])) {
            $model->answer = answer::fromMap($map['Answer']);
        }
        if (isset($map['GroundTruth'])) {
            $model->groundTruth = groundTruth::fromMap($map['GroundTruth']);
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        return $model;
    }
}
