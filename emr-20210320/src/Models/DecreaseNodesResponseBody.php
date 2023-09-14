<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class DecreaseNodesResponseBody extends Model
{
    /**
     * @description Operation ID.
     *
     * @example op-13c37a77c505****
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The ID of the request.
     *
     * @example 44430037-E59A-3E66-A2B0-97D155346F22
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operationId' => 'OperationId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecreaseNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
