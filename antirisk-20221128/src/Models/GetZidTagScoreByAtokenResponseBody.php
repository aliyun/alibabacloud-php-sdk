<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models;

use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagScoreByAtokenResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetZidTagScoreByAtokenResponseBody extends Model
{
    /**
     * @description code
     *
     * @example OK
     *
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var data
     */
    public $data;

    /**
     * @description requestId
     *
     * @example 2343535353DF8984565
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'msg'       => 'Msg',
        'data'      => 'data',
        'requestId' => 'requestId',
        'success'   => 'success',
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
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetZidTagScoreByAtokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
