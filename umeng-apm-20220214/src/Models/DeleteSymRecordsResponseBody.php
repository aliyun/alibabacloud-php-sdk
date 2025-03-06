<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Tea\Model;

class DeleteSymRecordsResponseBody extends Model
{
    /**
     * @description code
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example succeed in handling request
     *
     * @var string
     */
    public $msg;

    /**
     * @example 1
     *
     * @var int
     */
    public $num;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description traceId
     *
     * @example 210f07c516457690916816858d94ea
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code'    => 'code',
        'msg'     => 'msg',
        'num'     => 'num',
        'success' => 'success',
        'traceId' => 'traceId',
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
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->num) {
            $res['num'] = $this->num;
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
     * @return DeleteSymRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['num'])) {
            $model->num = $map['num'];
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
