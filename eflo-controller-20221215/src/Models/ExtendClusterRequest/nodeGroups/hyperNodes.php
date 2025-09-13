<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups\hyperNodes\dataDisk;

class hyperNodes extends Model
{
    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $hyperNodeId;

    /**
     * @var string
     */
    public $loginPassword;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'dataDisk' => 'DataDisk',
        'hostname' => 'Hostname',
        'hyperNodeId' => 'HyperNodeId',
        'loginPassword' => 'LoginPassword',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisk)) {
            Model::validateArray($this->dataDisk);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDisk) {
            if (\is_array($this->dataDisk)) {
                $res['DataDisk'] = [];
                $n1 = 0;
                foreach ($this->dataDisk as $item1) {
                    $res['DataDisk'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->hyperNodeId) {
            $res['HyperNodeId'] = $this->hyperNodeId;
        }

        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n1 = 0;
                foreach ($map['DataDisk'] as $item1) {
                    $model->dataDisk[$n1] = dataDisk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['HyperNodeId'])) {
            $model->hyperNodeId = $map['HyperNodeId'];
        }

        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
