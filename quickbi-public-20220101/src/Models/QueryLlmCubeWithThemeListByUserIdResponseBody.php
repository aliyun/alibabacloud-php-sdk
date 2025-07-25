<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryLlmCubeWithThemeListByUserIdResponseBody\result;
use AlibabaCloud\Tea\Model;

class QueryLlmCubeWithThemeListByUserIdResponseBody extends Model
{
    /**
     * @description Request ID.
     *
     * @example 2EE822B***************F-F5B42DDADC12
     *
     * @var string
     */
    public $requestId;

    /**
     * @description List of datasets and analysis themes.
     *
     * @var result
     */
    public $result;

    /**
     * @description Indicates whether the request was successful. Possible values:
     *
     * - true: The request was successful
     * - false: The request failed
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
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLlmCubeWithThemeListByUserIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
