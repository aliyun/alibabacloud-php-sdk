<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageResponseBody\data;
use AlibabaCloud\Tea\Model;

class SendMessageResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example QUERY_ACCOUNT_INFO_ERROR
     *
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'    => 'Code',
        'data'    => 'Data',
        'message' => 'Message',
        'success' => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
