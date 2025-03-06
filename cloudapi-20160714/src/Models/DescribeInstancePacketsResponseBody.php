<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancePacketsResponseBody\instancePackets;
use AlibabaCloud\Tea\Model;

class DescribeInstancePacketsResponseBody extends Model
{
    /**
     * @description The list of inbound and outbound data packets in the instance.
     *
     * @var instancePackets
     */
    public $instancePackets;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instancePackets' => 'InstancePackets',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancePackets) {
            $res['InstancePackets'] = null !== $this->instancePackets ? $this->instancePackets->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancePacketsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancePackets'])) {
            $model->instancePackets = instancePackets::fromMap($map['InstancePackets']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
