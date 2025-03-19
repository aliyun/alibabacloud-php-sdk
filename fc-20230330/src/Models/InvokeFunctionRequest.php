<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class InvokeFunctionRequest extends Model
{
    /**
     * @description The request parameters of function invocation.
     *
     * @example event
     *
     * @var Stream
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
        'body' => 'body',
        'qualifier' => 'qualifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
