<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateVersionTestResponseBody extends Model
{
    /**
     * @var string
     */
    public $testId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'testId'    => 'TestId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
