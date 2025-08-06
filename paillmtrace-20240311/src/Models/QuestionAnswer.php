<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\QuestionAnswer\answer;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\QuestionAnswer\groundTruth;

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

    public function validate()
    {
        if (null !== $this->answer) {
            $this->answer->validate();
        }
        if (null !== $this->groundTruth) {
            $this->groundTruth->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = null !== $this->answer ? $this->answer->toArray($noStream) : $this->answer;
        }

        if (null !== $this->groundTruth) {
            $res['GroundTruth'] = null !== $this->groundTruth ? $this->groundTruth->toArray($noStream) : $this->groundTruth;
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
