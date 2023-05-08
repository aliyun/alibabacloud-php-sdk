<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeReusableSlbRequest extends Model
{
    /**
     * @description The ID of the Kubernetes cluster on the data plane.
     *
     * @example ca2cfe41fefeb489d9b9dba18a7c5****
     *
     * @var string
     */
    public $k8sClusterId;

    /**
     * @description The network type of the SLB instance. Valid values:
     *
     *   `intranet`
     *   `internet`
     *
     * @example internet
     *
     * @var string
     */
    public $networkType;
    protected $_name = [
        'k8sClusterId' => 'K8sClusterId',
        'networkType'  => 'NetworkType',
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReusableSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}
