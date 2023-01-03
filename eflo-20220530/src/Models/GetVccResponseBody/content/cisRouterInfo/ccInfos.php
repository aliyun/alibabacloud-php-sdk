<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\cisRouterInfo;

use AlibabaCloud\Tea\Model;

class ccInfos extends Model
{
    /**
     * @example cc-73aeex5o
     *
     * @var string
     */
    public $ccId;

    /**
     * @example 169.254.248.26
     *
     * @var string
     */
    public $localGatewayIp;

    /**
     * @example 169.254.248.30
     *
     * @var string
     */
    public $remoteGatewayIp;

    /**
     * @example Established
     *
     * @var string
     */
    public $status;

    /**
     * @example 255.255.255.248
     *
     * @var string
     */
    public $subnetMask;

    /**
     * @description vlanid
     *
     * @example Ethernet1042
     *
     * @var string
     */
    public $vlanId;
    protected $_name = [
        'ccId'            => 'CcId',
        'localGatewayIp'  => 'LocalGatewayIp',
        'remoteGatewayIp' => 'RemoteGatewayIp',
        'status'          => 'Status',
        'subnetMask'      => 'SubnetMask',
        'vlanId'          => 'VlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ccId) {
            $res['CcId'] = $this->ccId;
        }
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }
        if (null !== $this->remoteGatewayIp) {
            $res['RemoteGatewayIp'] = $this->remoteGatewayIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subnetMask) {
            $res['SubnetMask'] = $this->subnetMask;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ccInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CcId'])) {
            $model->ccId = $map['CcId'];
        }
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }
        if (isset($map['RemoteGatewayIp'])) {
            $model->remoteGatewayIp = $map['RemoteGatewayIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubnetMask'])) {
            $model->subnetMask = $map['SubnetMask'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
