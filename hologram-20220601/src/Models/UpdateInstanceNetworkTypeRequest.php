<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceNetworkTypeRequest extends Model
{
    /**
     * @var string
     */
    public $anyTunnelToSingleTunnel;

    /**
     * @var string
     */
    public $networkTypes;

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
    public $vpcOwnerId;

    /**
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'anyTunnelToSingleTunnel' => 'anyTunnelToSingleTunnel',
        'networkTypes' => 'networkTypes',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
        'vpcOwnerId' => 'vpcOwnerId',
        'vpcRegionId' => 'vpcRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anyTunnelToSingleTunnel) {
            $res['anyTunnelToSingleTunnel'] = $this->anyTunnelToSingleTunnel;
        }

        if (null !== $this->networkTypes) {
            $res['networkTypes'] = $this->networkTypes;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcOwnerId) {
            $res['vpcOwnerId'] = $this->vpcOwnerId;
        }

        if (null !== $this->vpcRegionId) {
            $res['vpcRegionId'] = $this->vpcRegionId;
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
        if (isset($map['anyTunnelToSingleTunnel'])) {
            $model->anyTunnelToSingleTunnel = $map['anyTunnelToSingleTunnel'];
        }

        if (isset($map['networkTypes'])) {
            $model->networkTypes = $map['networkTypes'];
        }

        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['vpcOwnerId'])) {
            $model->vpcOwnerId = $map['vpcOwnerId'];
        }

        if (isset($map['vpcRegionId'])) {
            $model->vpcRegionId = $map['vpcRegionId'];
        }

        return $model;
    }
}
