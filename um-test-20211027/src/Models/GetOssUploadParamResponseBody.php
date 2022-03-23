<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umtest\V20211027\Models;

use AlibabaCloud\SDK\Umtest\V20211027\Models\GetOssUploadParamResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetOssUploadParamResponseBody extends Model
{
    /**
     * @description 请求唯一ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description code
     *
     * @var int
     */
    public $code;

    /**
     * @description data
     *
     * @var data
     */
    public $data;

    /**
     * @description 异常描述
     *
     * @var string
     */
    public $msg;

    /**
     * @description 是否成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description traceId
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'code',
        'data'      => 'data',
        'msg'       => 'msg',
        'success'   => 'success',
        'traceId'   => 'traceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssUploadParamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
