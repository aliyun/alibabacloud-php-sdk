<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSimQuestionResponseBody\simQuestions;

class ListSimQuestionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var simQuestions[]
     */
    public $simQuestions;
    protected $_name = [
        'requestId' => 'RequestId',
        'simQuestions' => 'SimQuestions',
    ];

    public function validate()
    {
        if (\is_array($this->simQuestions)) {
            Model::validateArray($this->simQuestions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->simQuestions) {
            if (\is_array($this->simQuestions)) {
                $res['SimQuestions'] = [];
                $n1 = 0;
                foreach ($this->simQuestions as $item1) {
                    $res['SimQuestions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SimQuestions'])) {
            if (!empty($map['SimQuestions'])) {
                $model->simQuestions = [];
                $n1 = 0;
                foreach ($map['SimQuestions'] as $item1) {
                    $model->simQuestions[$n1] = simQuestions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
