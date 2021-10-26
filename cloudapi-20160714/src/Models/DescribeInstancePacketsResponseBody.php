<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancePacketsResponseBody\instancePackets;
use AlibabaCloud\Tea\Model;

class DescribeInstancePacketsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instancePackets
     */
    public $instancePackets;
    protected $_name = [
        'requestId'       => 'RequestId',
        'instancePackets' => 'InstancePackets',
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
        if (null !== $this->instancePackets) {
            $res['InstancePackets'] = null !== $this->instancePackets ? $this->instancePackets->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstancePackets'])) {
            $model->instancePackets = instancePackets::fromMap($map['InstancePackets']);
        }

        return $model;
    }
}
