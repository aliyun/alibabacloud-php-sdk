<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneBuildTaskStatusResponseBody\accessDeniedDetail;

class GetSceneBuildTaskStatusResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code' => 'Code',
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'sceneId' => 'SceneId',
        'status' => 'Status',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
