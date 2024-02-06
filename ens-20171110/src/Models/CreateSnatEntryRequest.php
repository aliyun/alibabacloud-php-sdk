<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateSnatEntryRequest extends Model
{
    /**
     * @description The ID of the Network Address Translation (NAT) gateway.
     *
     * @example nat-5tawjw5j7sgd2deujxuk0****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The name of the SNAT entry. The name must be 1 to 128 characters in length. The name cannot start with `http://` or `https://`.
     *
     * @example test0
     *
     * @var string
     */
    public $snatEntryName;

    /**
     * @description The elastic IP address (EIP) in the SNAT entry. Separate multiple EIPs with commas (,).
     *
     * @example 120.XXX.XXX.71
     *
     * @var string
     */
    public $snatIp;

    /**
     * @description The CIDR block. You can specify the CIDR block of a network, a vSwitch, or an instance. You can also specify a custom CIDR block. All instances within the CIDR block can access the Internet or external networks by using SNAT.
     *
     * >  If you specify **SourceVSwitchId** and **SourceCIDR**, **SourceVSwitchId** does not take effect. The value that you specified for **SourceCIDR** takes precedence.
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $sourceCIDR;

    /**
     * @description The ID of the network. This parameter specifies that all ENS instances in the network can use the SNAT entry to access the Internet.
     *
     * >  If you specify **SourceNetworkId** and **SourceVSwitchId** or **SourceCIDR**, **SourceNetworkId** does not take effect. The value that you specified for **SourceCIDR** takes precedence. Priority: **SourceCIDR** > **SourceVSwitchId** > **SourceNetworkId**.
     * @example n-2zeuphj08tt7q3brd****
     *
     * @var string
     */
    public $sourceNetworkId;

    /**
     * @description The ID of the vSwitch that you need to access over the Internet. This parameter specifies that Edge Node Service (ENS) instances in the vSwitch can use the SNAT entry to access the Internet.
     *
     * >  If you specify **SourceVSwitchId** and **SourceCIDR**, **SourceVSwitchId** does not take effect. The value that you specified for **SourceCIDR** takes precedence.
     * @example vsw-bp1hwx7gi495q260p****
     *
     * @var string
     */
    public $sourceVSwitchId;

    /**
     * @description The secondary EIP in the SNAT entry. Separate multiple secondary EIPs with commas (,).
     *
     * @example 101.XXX.XXX.7
     *
     * @var string
     */
    public $standbySnatIp;
    protected $_name = [
        'natGatewayId'    => 'NatGatewayId',
        'snatEntryName'   => 'SnatEntryName',
        'snatIp'          => 'SnatIp',
        'sourceCIDR'      => 'SourceCIDR',
        'sourceNetworkId' => 'SourceNetworkId',
        'sourceVSwitchId' => 'SourceVSwitchId',
        'standbySnatIp'   => 'StandbySnatIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }
        if (null !== $this->sourceNetworkId) {
            $res['SourceNetworkId'] = $this->sourceNetworkId;
        }
        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }
        if (null !== $this->standbySnatIp) {
            $res['StandbySnatIp'] = $this->standbySnatIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnatEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }
        if (isset($map['SourceNetworkId'])) {
            $model->sourceNetworkId = $map['SourceNetworkId'];
        }
        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }
        if (isset($map['StandbySnatIp'])) {
            $model->standbySnatIp = $map['StandbySnatIp'];
        }

        return $model;
    }
}
