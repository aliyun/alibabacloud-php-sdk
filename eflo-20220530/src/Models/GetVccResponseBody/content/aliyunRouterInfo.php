<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content;

use AlibabaCloud\Dara\Model;

class aliyunRouterInfo extends Model
{
    /**
     * @var string
     */
    public $localGatewayIp;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $pcId;

    /**
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @var string
     */
    public $vbrId;

    /**
     * @var string
     */
    public $vlanId;
    protected $_name = [
        'localGatewayIp' => 'LocalGatewayIp',
        'mask' => 'Mask',
        'pcId' => 'PcId',
        'peerGatewayIp' => 'PeerGatewayIp',
        'vbrId' => 'VbrId',
        'vlanId' => 'VlanId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->pcId) {
            $res['PcId'] = $this->pcId;
        }

        if (null !== $this->peerGatewayIp) {
            $res['PeerGatewayIp'] = $this->peerGatewayIp;
        }

        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }

        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
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
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['PcId'])) {
            $model->pcId = $map['PcId'];
        }

        if (isset($map['PeerGatewayIp'])) {
            $model->peerGatewayIp = $map['PeerGatewayIp'];
        }

        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }

        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
