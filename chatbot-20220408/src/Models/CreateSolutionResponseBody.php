<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateSolutionResponseBody extends Model
{
    /**
     * @example F55D90C1-31BE-4B2A-AA3F-25EFC36F9419
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100001089003
     *
     * @var int
     */
    public $solutionId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'solutionId' => 'SolutionId',
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
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSolutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        return $model;
    }
}
