<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\components;

use AlibabaCloud\Tea\Model;

class componentConfig extends Model
{
    /**
     * @description Basic component parameters
     *
     * @example {
     * "EndpointPublicAccess": false,
     * "ContainerCidr": "10.4.0.0/24",
     * "KeyPair": "test",
     * "NodeCidrMask": "25",
     * "ResourceGroupId": "rg-axsadm3sdzsdvdsndstdisd",
     * "WorkerSystemDiskCategory": "da",
     * "WorkerSystemDiskSize": 40,
     * "DeletionProtection": false,
     * "KubeProxy": "iptables",
     * "Name": "da",
     * "LoadBalancerSpec": "slb.s1.small",
     * "Runtime": {
     * "Version": "19.03.15",
     * "Name": "docker"
     * },
     * "IsEnterpriseSecurityGroup": true,
     * "Vpcid": "192.168.23.0/24",
     * "NumOfNodes": 1,
     * "VswitchIds": [
     * "dad"
     * ],
     * "ServiceCidr": "10.0.0.0/16",
     * "SnatEntry": false,
     * "kubernetesVersion": "1.20.11-aliyunedge.1",
     * "WorkerInstanceTypes": [
     * "da"
     * ]
     * }
     *
     * @var mixed
     */
    public $basicArgs;

    /**
     * @description Node pool configuration, used to establish the correspondence between node groups and node pools. Required when ComponentType is "ACKEdge", otherwise it can be empty.
     *
     * @var mixed[]
     */
    public $nodeUnits;
    protected $_name = [
        'basicArgs' => 'BasicArgs',
        'nodeUnits' => 'NodeUnits',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicArgs) {
            $res['BasicArgs'] = $this->basicArgs;
        }
        if (null !== $this->nodeUnits) {
            $res['NodeUnits'] = $this->nodeUnits;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicArgs'])) {
            $model->basicArgs = $map['BasicArgs'];
        }
        if (isset($map['NodeUnits'])) {
            if (!empty($map['NodeUnits'])) {
                $model->nodeUnits = $map['NodeUnits'];
            }
        }

        return $model;
    }
}
