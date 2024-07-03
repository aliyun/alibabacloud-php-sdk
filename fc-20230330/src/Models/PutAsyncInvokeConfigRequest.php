<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class PutAsyncInvokeConfigRequest extends Model
{
    /**
     * @description The configurations of asynchronous function invocation.
     *
     * This parameter is required.
     * @var PutAsyncInvokeConfigInput
     */
    public $body;

    /**
     * @description The version or alias of the function.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'body'      => 'body',
        'qualifier' => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutAsyncInvokeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = PutAsyncInvokeConfigInput::fromMap($map['body']);
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
