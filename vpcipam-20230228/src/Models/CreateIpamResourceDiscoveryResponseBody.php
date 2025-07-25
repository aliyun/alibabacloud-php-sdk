<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class CreateIpamResourceDiscoveryResponseBody extends Model
{
    /**
     * @description The ID of the instance for resource discovery.
     *
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @description The request ID.
     *
     * @example BB2C39DE-CEB8-595A-981A-F2EFCBE7324E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipamResourceDiscoveryId' => 'IpamResourceDiscoveryId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamResourceDiscoveryId) {
            $res['IpamResourceDiscoveryId'] = $this->ipamResourceDiscoveryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpamResourceDiscoveryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamResourceDiscoveryId'])) {
            $model->ipamResourceDiscoveryId = $map['IpamResourceDiscoveryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
