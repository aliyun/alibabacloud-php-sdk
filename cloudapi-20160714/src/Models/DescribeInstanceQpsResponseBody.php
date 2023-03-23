<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceQpsResponseBody\instanceQps;
use AlibabaCloud\Tea\Model;

class DescribeInstanceQpsResponseBody extends Model
{
    /**
     * @description The list of requests sent to the APIs in the instance.
     *
     * @var instanceQps
     */
    public $instanceQps;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceQps' => 'InstanceQps',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceQps) {
            $res['InstanceQps'] = null !== $this->instanceQps ? $this->instanceQps->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceQpsResponseBody
     */
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
