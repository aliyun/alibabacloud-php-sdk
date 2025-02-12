<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceHttpCodeResponseBody\instanceHttpCode;

class DescribeInstanceHttpCodeResponseBody extends Model
{
    /**
     * @var instanceHttpCode
     */
    public $instanceHttpCode;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceHttpCode' => 'InstanceHttpCode',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceHttpCode) {
            $this->instanceHttpCode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceHttpCode) {
            $res['InstanceHttpCode'] = null !== $this->instanceHttpCode ? $this->instanceHttpCode->toArray($noStream) : $this->instanceHttpCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceHttpCode'])) {
            $model->instanceHttpCode = instanceHttpCode::fromMap($map['InstanceHttpCode']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
