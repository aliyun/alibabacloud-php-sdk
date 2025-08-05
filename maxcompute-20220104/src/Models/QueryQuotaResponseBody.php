<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryQuotaResponseBody extends Model
{
    /**
     * @description The data returned.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error code.
     *
     * @example success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example Exception information
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description The request ID.
     *
     * @example 0bc1eeed16675342848904412e08dd
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'data',
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'httpCode' => 'httpCode',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->httpCode) {
            $res['httpCode'] = $this->httpCode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['httpCode'])) {
            $model->httpCode = $map['httpCode'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
