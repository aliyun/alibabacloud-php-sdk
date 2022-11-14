<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CreateAsyncPredictResponseBody extends Model
{
    /**
     * @var int
     */
    public $asyncPredictId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'asyncPredictId' => 'AsyncPredictId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncPredictId) {
            $res['AsyncPredictId'] = $this->asyncPredictId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAsyncPredictResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncPredictId'])) {
            $model->asyncPredictId = $map['AsyncPredictId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
