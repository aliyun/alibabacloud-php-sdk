<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content;

use AlibabaCloud\Tea\Model;

class aliyunRouterInfo extends Model
{
    /**
     * @example 169.254.248.30
     *
     * @var string
     */
    public $localGatewayIp;

    /**
     * @example 255.255.255.248
     *
     * @var string
     */
    public $mask;

    /**
     * @example pc-0jlof4bphlsnxbdztkvad
     *
     * @var string
     */
    public $pcId;

    /**
     * @example 169.254.248.28
     *
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @example vbr-2ze4i85p6vb9nwcan5xt0
     *
     * @var string
     */
    public $vbrId;

    /**
     * @example 1042
     *
     * @var string
     */
    public $vlanId;
    protected $_name = [
        'localGatewayIp' => 'LocalGatewayIp',
        'mask'           => 'Mask',
        'pcId'           => 'PcId',
        'peerGatewayIp'  => 'PeerGatewayIp',
        'vbrId'          => 'VbrId',
        'vlanId'         => 'VlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return aliyunRouterInfo
     */
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
