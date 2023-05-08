<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshUpgradeStatusRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example istio-system:ingressgateway1,istio-system:ingressgateway2
     *
     * @var string
     */
    public $allIstioGatewayFullNames;

    /**
     * @description The fully qualified names of ingress gateways in the ASM instance. Separate multiple names with commas (,).
     *
     * @example caeac85a793c94afbbb0a4bb20320****
     *
     * @var string
     */
    public $guestClusterIds;

    /**
     * @description The IDs of the clusters on the data plane of the ASM instance. Separate multiple clusters with commas (,).
     *
     * @example 11fd0027-c27e-41bb-a565-75583054****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'allIstioGatewayFullNames' => 'AllIstioGatewayFullNames',
        'guestClusterIds'          => 'GuestClusterIds',
        'serviceMeshId'            => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allIstioGatewayFullNames) {
            $res['AllIstioGatewayFullNames'] = $this->allIstioGatewayFullNames;
        }
        if (null !== $this->guestClusterIds) {
            $res['GuestClusterIds'] = $this->guestClusterIds;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshUpgradeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllIstioGatewayFullNames'])) {
            $model->allIstioGatewayFullNames = $map['AllIstioGatewayFullNames'];
        }
        if (isset($map['GuestClusterIds'])) {
            $model->guestClusterIds = $map['GuestClusterIds'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
