<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvInstanceHealthResponseBody\envInstanceHealth;
use AlibabaCloud\Tea\Model;

class DescribeAppEnvInstanceHealthResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var envInstanceHealth
     */
    public $envInstanceHealth;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'code'              => 'Code',
        'envInstanceHealth' => 'EnvInstanceHealth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->envInstanceHealth) {
            $res['EnvInstanceHealth'] = null !== $this->envInstanceHealth ? $this->envInstanceHealth->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppEnvInstanceHealthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnvInstanceHealth'])) {
            $model->envInstanceHealth = envInstanceHealth::fromMap($map['EnvInstanceHealth']);
        }

        return $model;
    }
}
