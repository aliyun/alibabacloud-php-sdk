<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpsResponseBody;

use AlibabaCloud\Tea\Model;

class natIps extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example ngw-gw8v16wgvtq26vh59****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @example 192.168.0.126
     *
     * @var string
     */
    public $natIp;

    /**
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $natIpCidr;

    /**
     * @example default
     *
     * @var string
     */
    public $natIpDescription;

    /**
     * @example vpcnatip-gw8a863sut1zijxh0****
     *
     * @var string
     */
    public $natIpId;

    /**
     * @example default
     *
     * @var string
     */
    public $natIpName;

    /**
     * @example Available
     *
     * @var string
     */
    public $natIpStatus;
    protected $_name = [
        'isDefault'        => 'IsDefault',
        'natGatewayId'     => 'NatGatewayId',
        'natIp'            => 'NatIp',
        'natIpCidr'        => 'NatIpCidr',
        'natIpDescription' => 'NatIpDescription',
        'natIpId'          => 'NatIpId',
        'natIpName'        => 'NatIpName',
        'natIpStatus'      => 'NatIpStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->natIpCidr) {
            $res['NatIpCidr'] = $this->natIpCidr;
        }
        if (null !== $this->natIpDescription) {
            $res['NatIpDescription'] = $this->natIpDescription;
        }
        if (null !== $this->natIpId) {
            $res['NatIpId'] = $this->natIpId;
        }
        if (null !== $this->natIpName) {
            $res['NatIpName'] = $this->natIpName;
        }
        if (null !== $this->natIpStatus) {
            $res['NatIpStatus'] = $this->natIpStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natIps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['NatIpCidr'])) {
            $model->natIpCidr = $map['NatIpCidr'];
        }
        if (isset($map['NatIpDescription'])) {
            $model->natIpDescription = $map['NatIpDescription'];
        }
        if (isset($map['NatIpId'])) {
            $model->natIpId = $map['NatIpId'];
        }
        if (isset($map['NatIpName'])) {
            $model->natIpName = $map['NatIpName'];
        }
        if (isset($map['NatIpStatus'])) {
            $model->natIpStatus = $map['NatIpStatus'];
        }

        return $model;
    }
}
