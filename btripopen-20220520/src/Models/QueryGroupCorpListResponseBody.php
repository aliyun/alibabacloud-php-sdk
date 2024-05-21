<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryGroupCorpListResponseBody\module;
use AlibabaCloud\Tea\Model;

class QueryGroupCorpListResponseBody extends Model
{
    /**
     * @example A3F8DCAB-8301-5770-BD9F-71B0BF9E1A6E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var module[]
     */
    public $module;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 21041ce316577904808056433edbb2
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'code',
        'message'   => 'message',
        'module'    => 'module',
        'success'   => 'success',
        'traceId'   => 'trace_id',
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
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->module) {
            $res['module'] = [];
            if (null !== $this->module && \is_array($this->module)) {
                $n = 0;
                foreach ($this->module as $item) {
                    $res['module'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['trace_id'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryGroupCorpListResponseBody
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['module'])) {
            if (!empty($map['module'])) {
                $model->module = [];
                $n             = 0;
                foreach ($map['module'] as $item) {
                    $model->module[$n++] = null !== $item ? module::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['trace_id'])) {
            $model->traceId = $map['trace_id'];
        }

        return $model;
    }
}
