<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\nodeGroups;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var string
     */
    public $loginPassword;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'hostname'      => 'Hostname',
        'loginPassword' => 'LoginPassword',
        'nodeId'        => 'NodeId',
        'vSwitchId'     => 'VSwitchId',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
