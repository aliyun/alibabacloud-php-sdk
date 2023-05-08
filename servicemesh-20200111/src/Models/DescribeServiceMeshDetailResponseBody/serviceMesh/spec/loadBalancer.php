<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec;

use AlibabaCloud\Tea\Model;

class loadBalancer extends Model
{
    /**
     * @description The ID of the SLB instance that is used when the API server is exposed to the Internet.
     *
     * @example lb-2zekaak10uxds44vx****
     *
     * @var string
     */
    public $apiServerLoadbalancerId;

    /**
     * @description Indicates whether the API server is exposed to the Internet. Valid values:
     *
     *   `true`: The API server is exposed to the Internet.
     *   `false`: The API server is not exposed to the Internet.
     *
     * @example true
     *
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @description Indicates whether Istio Pilot is exposed to the Internet. Valid values:
     *
     *   `true`: Istio Pilot is exposed to the Internet.
     *   `false`: Istio Pilot is not exposed to the Internet.
     *
     * @example true
     *
     * @var bool
     */
    public $pilotPublicEip;

    /**
     * @description The ID of the Server Load Balancer (SLB) instance that is used when Istio Pilot is exposed to the Internet.
     *
     * @example lb-2zesa8qs8kbkj9jkl****
     *
     * @var string
     */
    public $pilotPublicLoadbalancerId;
    protected $_name = [
        'apiServerLoadbalancerId'   => 'ApiServerLoadbalancerId',
        'apiServerPublicEip'        => 'ApiServerPublicEip',
        'pilotPublicEip'            => 'PilotPublicEip',
        'pilotPublicLoadbalancerId' => 'PilotPublicLoadbalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerLoadbalancerId) {
            $res['ApiServerLoadbalancerId'] = $this->apiServerLoadbalancerId;
        }
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }
        if (null !== $this->pilotPublicEip) {
            $res['PilotPublicEip'] = $this->pilotPublicEip;
        }
        if (null !== $this->pilotPublicLoadbalancerId) {
            $res['PilotPublicLoadbalancerId'] = $this->pilotPublicLoadbalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerLoadbalancerId'])) {
            $model->apiServerLoadbalancerId = $map['ApiServerLoadbalancerId'];
        }
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }
        if (isset($map['PilotPublicEip'])) {
            $model->pilotPublicEip = $map['PilotPublicEip'];
        }
        if (isset($map['PilotPublicLoadbalancerId'])) {
            $model->pilotPublicLoadbalancerId = $map['PilotPublicLoadbalancerId'];
        }

        return $model;
    }
}
