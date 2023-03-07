<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetHybridClusterConfigResponseBody extends Model
{
    /**
     * @description The configurations returned.
     *
     *   If the parameter Node is null, you can obtain the configurations of the hybrid cloud cluster.
     *   If the parameter Node is a specified on-premises compute node, you can obtain the configurations of the on-premises compute node.
     *
     * This parameter is returned in the ini format. You can use this parameter to configure on-premises cluster nodes.
     * @example ClNjaGcyI6W119Cg****
     *
     * @var string
     */
    public $clusterConfig;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterConfig' => 'ClusterConfig',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterConfig) {
            $res['ClusterConfig'] = $this->clusterConfig;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHybridClusterConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterConfig'])) {
            $model->clusterConfig = $map['ClusterConfig'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
