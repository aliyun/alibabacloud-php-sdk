<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec;

use AlibabaCloud\Tea\Model;

class loadBalancer extends Model
{
    /**
     * @var bool
     */
    public $pilotPublicEip;

    /**
     * @var string
     */
    public $pilotPublicLoadbalancerId;

    /**
     * @var string
     */
    public $apiServerLoadbalancerId;

    /**
     * @var bool
     */
    public $apiServerPublicEip;
    protected $_name = [
        'pilotPublicEip'            => 'PilotPublicEip',
        'pilotPublicLoadbalancerId' => 'PilotPublicLoadbalancerId',
        'apiServerLoadbalancerId'   => 'ApiServerLoadbalancerId',
        'apiServerPublicEip'        => 'ApiServerPublicEip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pilotPublicEip) {
            $res['PilotPublicEip'] = $this->pilotPublicEip;
        }
        if (null !== $this->pilotPublicLoadbalancerId) {
            $res['PilotPublicLoadbalancerId'] = $this->pilotPublicLoadbalancerId;
        }
        if (null !== $this->apiServerLoadbalancerId) {
            $res['ApiServerLoadbalancerId'] = $this->apiServerLoadbalancerId;
        }
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
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
        if (isset($map['PilotPublicEip'])) {
            $model->pilotPublicEip = $map['PilotPublicEip'];
        }
        if (isset($map['PilotPublicLoadbalancerId'])) {
            $model->pilotPublicLoadbalancerId = $map['PilotPublicLoadbalancerId'];
        }
        if (isset($map['ApiServerLoadbalancerId'])) {
            $model->apiServerLoadbalancerId = $map['ApiServerLoadbalancerId'];
        }
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }

        return $model;
    }
}
