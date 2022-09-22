<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\InnerDescribeNetworkInterfaceInGroupResponseBody\networkInterfaceSets;
use AlibabaCloud\Tea\Model;

class InnerDescribeNetworkInterfaceInGroupResponseBody extends Model
{
    /**
     * @var networkInterfaceSets
     */
    public $networkInterfaceSets;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkInterfaceSets' => 'NetworkInterfaceSets',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceSets) {
            $res['NetworkInterfaceSets'] = null !== $this->networkInterfaceSets ? $this->networkInterfaceSets->toMap() : null;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InnerDescribeNetworkInterfaceInGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceSets'])) {
            $model->networkInterfaceSets = networkInterfaceSets::fromMap($map['NetworkInterfaceSets']);
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
