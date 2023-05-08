<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeGuestClusterAccessLogDashboardsRequest extends Model
{
    /**
     * @description The ID of the cluster on the data plane.
     *
     * @example ce3c25e247da24f3aab9b7edfae83****
     *
     * @var string
     */
    public $k8sClusterId;
    protected $_name = [
        'k8sClusterId' => 'K8sClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGuestClusterAccessLogDashboardsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }

        return $model;
    }
}
