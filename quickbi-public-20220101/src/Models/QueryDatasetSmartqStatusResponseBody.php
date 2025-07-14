<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDatasetSmartqStatusResponseBody extends Model
{
    /**
     * @description Request ID.
     *
     * @example 7c7223ae-****-3c744528014b
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Result of the API execution. Possible values:
     * - true: Request succeeded
     * - false: Request failed
     *
     * @example true
     *
     * @var bool
     */
    public $result;

    /**
     * @description 是否请求成功。取值范围：
     *
     * - true：请求成功
     * - false：请求失败
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'result' => 'Result',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDatasetSmartqStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
