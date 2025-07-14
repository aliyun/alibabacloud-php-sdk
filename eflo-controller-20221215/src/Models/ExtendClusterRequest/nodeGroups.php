<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups\nodes;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups\nodeTag;
use AlibabaCloud\Tea\Model;

class nodeGroups extends Model
{
    /**
     * @description Number of nodes to purchase. Range: 0~500. If the Amount parameter is set to 0, it means no new nodes will be purchased and existing nodes will be used for scaling. If the Amount parameter is set to 1~500, it means a certain number of nodes will be purchased and used for scaling. Default value: 0
     *
     * @example 4
     *
     * @var int
     */
    public $amount;

    /**
     * @description Whether to automatically renew the purchased nodes. This parameter takes effect when the Amount parameter is not 0 and the ChargeType is set to PrePaid. Valid values: True (auto-renewal); False (no auto-renewal). Default value: False
     *
     * @example True
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description Payment method for the nodes. When the Amount parameter is set to 0, this parameter does not take effect. Valid values: PrePaid (Subscription); PostPaid (Pay-As-You-Go). Default value: PrePaid.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Set the hostnames for the purchased nodes. This parameter does not take effect when the Amount parameter is set to 0.
     *
     * @var string[]
     */
    public $hostnames;

    /**
     * @description Set the login password for the purchased nodes. This parameter is not effective when the Amount parameter is set to 0.
     *
     * @example skkO(*89Y
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description Node Group ID
     *
     * @example i16d4883a46cbadeb4bc9
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description Node tags
     *
     * @var nodeTag[]
     */
    public $nodeTag;

    /**
     * @description List of Nodes
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description Duration of the node purchase (in months). Valid values: 1, 6, 12, 24, 36, 48. This parameter takes effect when the Amount parameter is not 0 and the ChargeType is set to PrePaid.
     *
     * @example 6
     *
     * @var int
     */
    public $period;

    /**
     * @description Custom Data
     *
     * @example #!/bin/sh
     * echo "Hello World. The time is now $(date -R)!" | tee /root/userdata_test.txt
     *
     * @var string
     */
    public $userData;

    /**
     * @description VSwitch ID
     *
     * @example vsw-uf65m8xqjgy55xj9jw92n
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID
     *
     * @example vpc-0jl3b0c0ukydlfezr13n6
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Zone ID
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'amount' => 'Amount',
        'autoRenew' => 'AutoRenew',
        'chargeType' => 'ChargeType',
        'hostnames' => 'Hostnames',
        'loginPassword' => 'LoginPassword',
        'nodeGroupId' => 'NodeGroupId',
        'nodeTag' => 'NodeTag',
        'nodes' => 'Nodes',
        'period' => 'Period',
        'userData' => 'UserData',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->hostnames) {
            $res['Hostnames'] = $this->hostnames;
        }
        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeTag) {
            $res['NodeTag'] = [];
            if (null !== $this->nodeTag && \is_array($this->nodeTag)) {
                $n = 0;
                foreach ($this->nodeTag as $item) {
                    $res['NodeTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = $map['Hostnames'];
            }
        }
        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeTag'])) {
            if (!empty($map['NodeTag'])) {
                $model->nodeTag = [];
                $n = 0;
                foreach ($map['NodeTag'] as $item) {
                    $model->nodeTag[$n++] = null !== $item ? nodeTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
