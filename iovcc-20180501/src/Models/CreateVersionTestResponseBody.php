<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateVersionTestResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $testId;
    protected $_name = [
        'requestId' => 'RequestId',
        'testId'    => 'TestId',
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
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVersionTestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }

        return $model;
    }
}
