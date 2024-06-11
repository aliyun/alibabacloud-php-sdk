<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RunCommandResponseBody extends Model
{
    /**
     * @example t-gov2ujrk32v4****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @example 440D7342-5E7C-B2DB-D0B4EAC2BDF1****
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
