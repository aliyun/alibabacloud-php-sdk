<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The status of the microsegmentation switch. Valid values:
     *
     *   **0**: off.
     *   **1**: on.
     *
     * @example 1
     *
     * @var int
     */
    public $cnnfSwitch;

    /**
     * @description The ID of the node.
     *
     * @example cfeb7a9f99ce740e98c5595d0fe37****
     *
     * @var string
     */
    public $id;

    /**
     * @description The network type. Valid values:
     *
     *   **0**: classic network.
     *   **1**: virtual private cloud (VPC).
     *
     * @example 1
     *
     * @var int
     */
    public $interceptionType;

    /**
     * @description The name of the node.
     *
     * @example testwww
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the network topology switch. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * @example ON
     *
     * @var string
     */
    public $netTopoSwitch;

    /**
     * @description The risk level. Valid values:
     *
     *   **3**: high.
     *   **2**: medium.
     *   **1**: low.
     *   **0**: secure.
     *   **-1**: unknown.
     *
     * @example 3
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The type of the node. Valid values:
     *
     *   **cluster**: a cluster.
     *   **internet**: a network node outside the cluster.
     *
     * @example cluster
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cnnfSwitch'       => 'CnnfSwitch',
        'id'               => 'Id',
        'interceptionType' => 'InterceptionType',
        'name'             => 'Name',
        'netTopoSwitch'    => 'NetTopoSwitch',
        'riskLevel'        => 'RiskLevel',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnnfSwitch) {
            $res['CnnfSwitch'] = $this->cnnfSwitch;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->interceptionType) {
            $res['InterceptionType'] = $this->interceptionType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netTopoSwitch) {
            $res['NetTopoSwitch'] = $this->netTopoSwitch;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnnfSwitch'])) {
            $model->cnnfSwitch = $map['CnnfSwitch'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InterceptionType'])) {
            $model->interceptionType = $map['InterceptionType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetTopoSwitch'])) {
            $model->netTopoSwitch = $map['NetTopoSwitch'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
