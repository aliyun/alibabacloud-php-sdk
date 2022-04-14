<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AttachClusterToHubResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $managedClusterIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'managedClusterIds' => 'ManagedClusterIds',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->managedClusterIds) {
            $res['ManagedClusterIds'] = $this->managedClusterIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachClusterToHubResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ManagedClusterIds'])) {
            if (!empty($map['ManagedClusterIds'])) {
                $model->managedClusterIds = $map['ManagedClusterIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
