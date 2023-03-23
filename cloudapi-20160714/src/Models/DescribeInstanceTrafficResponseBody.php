<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceTrafficResponseBody\instanceTraffic;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTrafficResponseBody extends Model
{
    /**
     * @description The traffic consumed by the requests and responses in the instance.
     *
     * @var instanceTraffic
     */
    public $instanceTraffic;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTraffic' => 'InstanceTraffic',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTraffic) {
            $res['InstanceTraffic'] = null !== $this->instanceTraffic ? $this->instanceTraffic->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceTraffic'])) {
            $model->instanceTraffic = instanceTraffic::fromMap($map['InstanceTraffic']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
