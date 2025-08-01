<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListInstancesResponseBody extends Model
{
    /**
     * @example SysomOpenAPI.ServerError
     *
     * @var string
     */
    public $code;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @example Requests for llm service failed
     *
     * @var string
     */
    public $message;

    /**
     * @example 9515E5A0-8905-59B0-9BBF-5F0BE568C3A0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 623
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'message' => 'message',
        'requestId' => 'request_id',
        'total' => 'total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
