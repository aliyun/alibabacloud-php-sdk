<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaTaskDetailResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaTaskDetailResponseBody\getMcubeNebulaTaskDetailResult\nebulaTaskDetail;
use AlibabaCloud\Tea\Model;

class getMcubeNebulaTaskDetailResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var nebulaTaskDetail
     */
    public $nebulaTaskDetail;

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
        'errorCode'        => 'ErrorCode',
        'nebulaTaskDetail' => 'NebulaTaskDetail',
        'requestId'        => 'RequestId',
        'resultMsg'        => 'ResultMsg',
        'success'          => 'Success',
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
        if (null !== $this->nebulaTaskDetail) {
            $res['NebulaTaskDetail'] = null !== $this->nebulaTaskDetail ? $this->nebulaTaskDetail->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return getMcubeNebulaTaskDetailResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['NebulaTaskDetail'])) {
            $model->nebulaTaskDetail = nebulaTaskDetail::fromMap($map['NebulaTaskDetail']);
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
