<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionQpsGroupByInstanceResponseBody\instanceQps;
use AlibabaCloud\Tea\Model;

class DescribeRegionQpsGroupByInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceQps
     */
    public $instanceQps;
    protected $_name = [
        'requestId'   => 'RequestId',
        'instanceQps' => 'InstanceQps',
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
        if (null !== $this->instanceQps) {
            $res['InstanceQps'] = null !== $this->instanceQps ? $this->instanceQps->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionQpsGroupByInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceQps'])) {
            $model->instanceQps = instanceQps::fromMap($map['InstanceQps']);
        }

        return $model;
    }
}
