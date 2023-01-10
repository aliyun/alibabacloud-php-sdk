<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class InvokeFunctionRequest extends Model
{
    /**
     * @description The event to be processed by the function. Set this parameter to a binary string. Function Compute passes the event to the function for processing.
     *
     * @example {"key":"value"}
     *
     * @var int[]
     */
    public $body;

    /**
     * @description The version or alias of the service.
     *
     * @example demoQualifier
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
