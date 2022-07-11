<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedBlockStorageClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $dedicatedBlockStorageClusterId;

    /**
     * @var string
     */
    public $dedicatedBlockStorageClusterOrderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedBlockStorageClusterId'      => 'DedicatedBlockStorageClusterId',
        'dedicatedBlockStorageClusterOrderId' => 'DedicatedBlockStorageClusterOrderId',
        'requestId'                           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedBlockStorageClusterId) {
            $res['DedicatedBlockStorageClusterId'] = $this->dedicatedBlockStorageClusterId;
        }
        if (null !== $this->dedicatedBlockStorageClusterOrderId) {
            $res['DedicatedBlockStorageClusterOrderId'] = $this->dedicatedBlockStorageClusterOrderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedBlockStorageClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedBlockStorageClusterId'])) {
            $model->dedicatedBlockStorageClusterId = $map['DedicatedBlockStorageClusterId'];
        }
        if (isset($map['DedicatedBlockStorageClusterOrderId'])) {
            $model->dedicatedBlockStorageClusterOrderId = $map['DedicatedBlockStorageClusterOrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
