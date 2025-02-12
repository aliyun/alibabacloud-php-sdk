<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceTrafficResponseBody\instanceTraffic;

class DescribeInstanceTrafficResponseBody extends Model
{
    /**
     * @var instanceTraffic
     */
    public $instanceTraffic;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTraffic' => 'InstanceTraffic',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceTraffic) {
            $this->instanceTraffic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTraffic) {
            $res['InstanceTraffic'] = null !== $this->instanceTraffic ? $this->instanceTraffic->toArray($noStream) : $this->instanceTraffic;
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
        if (isset($map['InstanceTraffic'])) {
            $model->instanceTraffic = instanceTraffic::fromMap($map['InstanceTraffic']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
