<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class RectifyImageResponseBody extends Model
{
    /**
     * @description 返回码
     *
     * @var int
     */
    public $code;

    /**
     * @description 错误消息
     *
     * @var string
     */
    public $message;

    /**
     * @description 请求ID，与入参requestId对应
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;

    /**
     * @description 是否请求成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description 任务ID
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'subSceneId' => 'SubSceneId',
        'success'    => 'Success',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return RectifyImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
