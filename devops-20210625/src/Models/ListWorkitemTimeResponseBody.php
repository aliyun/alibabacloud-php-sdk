<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemTimeResponseBody\workitemTime;
use AlibabaCloud\Tea\Model;

class ListWorkitemTimeResponseBody extends Model
{
    /**
     * @description 接口返回code
     *
     * @var int
     */
    public $code;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description true或者false
     *
     * @var bool
     */
    public $success;

    /**
     * @description 工时信息
     *
     * @var workitemTime[]
     */
    public $workitemTime;
    protected $_name = [
        'code'         => 'code',
        'errorCode'    => 'errorCode',
        'errorMsg'     => 'errorMsg',
        'requestId'    => 'requestId',
        'success'      => 'success',
        'workitemTime' => 'workitemTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->workitemTime) {
            $res['workitemTime'] = [];
            if (null !== $this->workitemTime && \is_array($this->workitemTime)) {
                $n = 0;
                foreach ($this->workitemTime as $item) {
                    $res['workitemTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkitemTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['workitemTime'])) {
            if (!empty($map['workitemTime'])) {
                $model->workitemTime = [];
                $n                   = 0;
                foreach ($map['workitemTime'] as $item) {
                    $model->workitemTime[$n++] = null !== $item ? workitemTime::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
