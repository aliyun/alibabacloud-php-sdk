<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class RunCommandResponseBody extends Model
{
    /**
     * @example t-7d2a745b412b4601b2d47f6a768d*
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description Id of the request
     *
     * @example 2FE2B22C-CF9D-59DE-BF63-DC9B9B33A9D1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invokeId'  => 'InvokeId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
