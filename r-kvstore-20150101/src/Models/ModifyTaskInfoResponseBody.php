<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyTaskInfoResponseBody extends Model
{
    /**
     * @description The error code returned if a task fails.
     *
     * @example mst.errorcode.success.errormessage
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the failed task. This parameter is returned if a task fails.
     *
     * @example t-0mqaj5hnyofczv****
     *
     * @var string
     */
    public $errorTaskId;

    /**
     * @description The request ID.
     *
     * @example 2B98499B-E62B-56D4-8D7F-3D6D4DB260F2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of completed tasks.
     *
     * @example 2
     *
     * @var string
     */
    public $successCount;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorTaskId' => 'ErrorTaskId',
        'requestId' => 'RequestId',
        'successCount' => 'SuccessCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorTaskId) {
            $res['ErrorTaskId'] = $this->errorTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTaskInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorTaskId'])) {
            $model->errorTaskId = $map['ErrorTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
