<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarRecordInOutputResponseBody extends Model
{
    /**
     * @description The execution result of the component action.
     *
     * @example {
     * "actionUuid": "3896a25d-4967-493c-942e-4e60f27da1f7-xxxxx",
     * "outputSummary": {
     * "datalist": [
     * {
     * "a": "a"
     * }
     * ],
     * "total_data_successful": 1,
     * "total_data": 1,
     * "total_exe_successful": 1,
     * "total_exe": 1,
     * "total_data_with_dup": 1,
     * "status": true
     * },
     * "outputSchema": {
     * "a": "String",
     * "startTime": "DateTime"
     * },
     * "inputParams": {
     * "inputData": [
     * {
     * "outputFields": {
     * "a": "a"
     * }
     * }
     * ],
     * "totalSize": 1
     * },
     * "startTime": "2023-11-13 17:47:28.645",
     * "taskName": "92af3c79-1754-4646-9366-9ddbxxxxx"
     * }
     *
     * @var string
     */
    public $inOutputInfo;

    /**
     * @description The request ID.
     *
     * @example 372D8B41-AF8D-573A-9B3F-0924950F241F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inOutputInfo' => 'InOutputInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inOutputInfo) {
            $res['InOutputInfo'] = $this->inOutputInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarRecordInOutputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InOutputInfo'])) {
            $model->inOutputInfo = $map['InOutputInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
