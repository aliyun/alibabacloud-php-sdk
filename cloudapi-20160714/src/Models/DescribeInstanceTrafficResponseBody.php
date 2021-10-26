<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceTrafficResponseBody\instanceTraffic;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTrafficResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceTraffic
     */
    public $instanceTraffic;
    protected $_name = [
        'requestId'       => 'RequestId',
        'instanceTraffic' => 'InstanceTraffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceTraffic) {
            $res['InstanceTraffic'] = null !== $this->instanceTraffic ? $this->instanceTraffic->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTrafficResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceTraffic'])) {
            $model->instanceTraffic = instanceTraffic::fromMap($map['InstanceTraffic']);
        }

        return $model;
    }
}
