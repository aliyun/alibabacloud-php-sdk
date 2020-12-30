<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeInstanceHealthResponseBody\instanceHealth;
use AlibabaCloud\Tea\Model;

class DescribeInstanceHealthResponseBody extends Model
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
     * @var instanceHealth
     */
    public $instanceHealth;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'instanceHealth' => 'InstanceHealth',
        'code'           => 'Code',
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
        if (null !== $this->instanceHealth) {
            $res['InstanceHealth'] = null !== $this->instanceHealth ? $this->instanceHealth->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceHealthResponseBody
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
        if (isset($map['InstanceHealth'])) {
            $model->instanceHealth = instanceHealth::fromMap($map['InstanceHealth']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
