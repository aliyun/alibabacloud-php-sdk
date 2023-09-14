<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class GetOperationResponseBody extends Model
{
    /**
     * @description The operation that is performed.
     *
     * @var Operation
     */
    public $operation;

    /**
     * @description The ID of the request.
     *
     * @example 9E3A7161-EB7B-172B-8D18-FFB06BA3896A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operation' => 'Operation',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = null !== $this->operation ? $this->operation->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOperationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operation'])) {
            $model->operation = Operation::fromMap($map['Operation']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
