<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ContextualAnswerResponseBody extends Model
{
    /**
     * @var Answer
     */
    public $answer;

    /**
     * @example 22F081FB-90D7-525A-BFE4-D28DC906A28F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'answer'    => 'Answer',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = null !== $this->answer ? $this->answer->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContextualAnswerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answer'])) {
            $model->answer = Answer::fromMap($map['Answer']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
