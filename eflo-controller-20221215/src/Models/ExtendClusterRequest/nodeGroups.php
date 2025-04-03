<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups\nodes;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups\nodeTag;

class nodeGroups extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string[]
     */
    public $hostnames;

    /**
     * @var string
     */
    public $loginPassword;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var nodeTag[]
     */
    public $nodeTag;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
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

    public function validate()
    {
        if (\is_array($this->hostnames)) {
            Model::validateArray($this->hostnames);
        }
        if (\is_array($this->nodeTag)) {
            Model::validateArray($this->nodeTag);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->hostnames)) {
                $res['Hostnames'] = [];
                $n1 = 0;
                foreach ($this->hostnames as $item1) {
                    $res['Hostnames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeTag) {
            if (\is_array($this->nodeTag)) {
                $res['NodeTag'] = [];
                $n1 = 0;
                foreach ($this->nodeTag as $item1) {
                    $res['NodeTag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->hostnames = [];
                $n1 = 0;
                foreach ($map['Hostnames'] as $item1) {
                    $model->hostnames[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['NodeTag'] as $item1) {
                    $model->nodeTag[$n1++] = nodeTag::fromMap($item1);
                }
            }
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
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
