<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshAdditionalStatusRequest extends Model
{
    /**
     * @description The check mode of the ASM instance. Valid values:
     *
     *   `normal`: checks the Server Load Balancer (SLB) instances created for exposing the API server and Istio Pilot, audit logs, and installation of Logtail for clusters on the data plane.
     *   `full`: checks control plane logs, access logs, security groups, and the elastic IP addresses (EIPs) of the API server in addition to the check items in normal mode.
     *
     * @example full
     *
     * @var string
     */
    public $checkMode;

    /**
     * @description The ID of the ASM instance.
     *
     * @example ca04bc38979214bf2882be79d39b4****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'checkMode'     => 'CheckMode',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkMode) {
            $res['CheckMode'] = $this->checkMode;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshAdditionalStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckMode'])) {
            $model->checkMode = $map['CheckMode'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
