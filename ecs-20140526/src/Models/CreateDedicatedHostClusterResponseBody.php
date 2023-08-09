<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostClusterResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example dc-bp12wlf6bw0vz9v2****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @example E2A664A6-2933-4C64-88AE-5033D003****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedHostClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
