<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordResponseBody\data;
use AlibabaCloud\Tea\Model;

class UpdateFuncSwitchRecordResponseBody extends Model
{
    /**
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @example result: code=1 msg=(Request failed, status_code != 200)
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 2D693121-C925-5154-8DF6-C09A8B369822
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'message' => 'message',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFuncSwitchRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
