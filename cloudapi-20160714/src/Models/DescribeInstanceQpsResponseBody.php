<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceQpsResponseBody\instanceQps;

class DescribeInstanceQpsResponseBody extends Model
{
    /**
     * @var instanceQps
     */
    public $instanceQps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceQps' => 'InstanceQps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceQps) {
            $this->instanceQps->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceQps) {
            $res['InstanceQps'] = null !== $this->instanceQps ? $this->instanceQps->toArray($noStream) : $this->instanceQps;
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
        if (isset($map['InstanceQps'])) {
            $model->instanceQps = instanceQps::fromMap($map['InstanceQps']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
