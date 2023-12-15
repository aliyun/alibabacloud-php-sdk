<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyTaskInfoResponseBody extends Model
{
    /**
     * @description The error code returned if the request failed.
     *
     * @example mst.errorcode.success.errormessage
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Error taskId.
     *
     * @example t-83br18hlw11ue610yo
     *
     * @var string
     */
    public $errorTaskId;

    /**
     * @description The request ID.
     *
     * @example 18B3000C-2B06-5D4F-AA5B-456D5FBCA55B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of completed tasks.
     *
     * @example 5
     *
     * @var string
     */
    public $successCount;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorTaskId'  => 'ErrorTaskId',
        'requestId'    => 'RequestId',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
    }

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
