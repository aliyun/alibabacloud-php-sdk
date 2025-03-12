<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SubmitOperationTaskResponseBody extends Model
{
    /**
     * @description The handling result code. Valid values:
     *
     *   Insufficient authorization: AuthorizationExhaust
     *   Unauthorized: ActionTrialUnauthorized
     *
     * @example AuthorizationExhaust
     *
     * @var string
     */
    public $operateCode;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 0C8487EF-50C2-54BB-8634-10F8C35D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The main task ID that is returned when the task is submitted.
     *
     * @example 89f5d7813bd59dd237580a8664b3xxxx
     *
     * @var string
     */
    public $rootTaskId;
    protected $_name = [
        'operateCode' => 'OperateCode',
        'requestId'   => 'RequestId',
        'rootTaskId'  => 'RootTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitOperationTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }

        return $model;
    }
}
