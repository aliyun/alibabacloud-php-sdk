<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryGroupCorpListResponseBody\module;

class QueryGroupCorpListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'requestId' => 'RequestId',
        'code' => 'code',
        'message' => 'message',
        'module' => 'module',
        'success' => 'success',
        'traceId' => 'trace_id',
    ];

    public function validate()
    {
        if (\is_array($this->module)) {
            Model::validateArray($this->module);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->module)) {
                $res['module'] = [];
                $n1 = 0;
                foreach ($this->module as $item1) {
                    $res['module'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['module'] as $item1) {
                    $model->module[$n1] = module::fromMap($item1);
                    ++$n1;
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
