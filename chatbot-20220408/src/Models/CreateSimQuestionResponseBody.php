<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateSimQuestionResponseBody extends Model
{
    /**
     * @example 16AC1B3C-66E0-438B-BB7C-71B692407B67
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1000002788
     *
     * @var int
     */
    public $simQuestionId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'simQuestionId' => 'SimQuestionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->simQuestionId) {
            $res['SimQuestionId'] = $this->simQuestionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimQuestionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SimQuestionId'])) {
            $model->simQuestionId = $map['SimQuestionId'];
        }

        return $model;
    }
}
