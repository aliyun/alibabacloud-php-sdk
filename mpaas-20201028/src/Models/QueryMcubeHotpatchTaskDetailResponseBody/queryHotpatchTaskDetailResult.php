<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeHotpatchTaskDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeHotpatchTaskDetailResponseBody\queryHotpatchTaskDetailResult\hotpatchTaskDetail;

class queryHotpatchTaskDetailResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var hotpatchTaskDetail
     */
    public $hotpatchTaskDetail;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'hotpatchTaskDetail' => 'HotpatchTaskDetail',
        'requestId' => 'RequestId',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->hotpatchTaskDetail) {
            $this->hotpatchTaskDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->hotpatchTaskDetail) {
            $res['HotpatchTaskDetail'] = null !== $this->hotpatchTaskDetail ? $this->hotpatchTaskDetail->toArray($noStream) : $this->hotpatchTaskDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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

        if (isset($map['HotpatchTaskDetail'])) {
            $model->hotpatchTaskDetail = hotpatchTaskDetail::fromMap($map['HotpatchTaskDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
