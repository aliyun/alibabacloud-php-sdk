<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class ModifyTaskInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorTaskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $successCount;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorTaskId' => 'ErrorTaskId',
        'requestId' => 'RequestId',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
