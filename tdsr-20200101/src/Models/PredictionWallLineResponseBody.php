<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredictionWallLineResponseBody\accessDeniedDetail;

class PredictionWallLineResponseBody extends Model
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
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $subSceneId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'subSceneId' => 'SubSceneId',
        'success' => 'Success',
        'taskId' => 'TaskId',
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

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
