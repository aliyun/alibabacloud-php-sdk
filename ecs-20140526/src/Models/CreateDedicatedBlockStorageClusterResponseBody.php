<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedBlockStorageClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $dedicatedBlockStorageClusterOrderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $dedicatedBlockStorageClusterId;
    protected $_name = [
        'dedicatedBlockStorageClusterOrderId' => 'DedicatedBlockStorageClusterOrderId',
        'requestId'                           => 'RequestId',
        'dedicatedBlockStorageClusterId'      => 'DedicatedBlockStorageClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedBlockStorageClusterOrderId) {
            $res['DedicatedBlockStorageClusterOrderId'] = $this->dedicatedBlockStorageClusterOrderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dedicatedBlockStorageClusterId) {
            $res['DedicatedBlockStorageClusterId'] = $this->dedicatedBlockStorageClusterId;
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
        if (isset($map['DedicatedBlockStorageClusterOrderId'])) {
            $model->dedicatedBlockStorageClusterOrderId = $map['DedicatedBlockStorageClusterOrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicatedBlockStorageClusterId'])) {
            $model->dedicatedBlockStorageClusterId = $map['DedicatedBlockStorageClusterId'];
        }

        return $model;
    }
}
