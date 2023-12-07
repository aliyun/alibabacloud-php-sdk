<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models;

use AlibabaCloud\SDK\Antirisk\V20221128\Models\ListUninstallDetailResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListUninstallDetailResponseBody extends Model
{
    /**
     * @description msg
     *
     * @var string
     */
    public $msg;

    /**
     * @description success
     *
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @description code
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @description requestId
     *
     * @example 8797ddc1857a66deb6b5d14
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'msg'       => 'Msg',
        'success'   => 'Success',
        'code'      => 'code',
        'data'      => 'data',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUninstallDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
