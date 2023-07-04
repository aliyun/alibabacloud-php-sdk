<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpCidrsResponseBody;

use AlibabaCloud\Tea\Model;

class natIpCidrs extends Model
{
    /**
     * @description The time when the CIDR block was created.
     *
     * @example 2021-06-28T20:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the CIDR block is the default CIDR block of the NAT gateway. Valid values:
     *
     *   **true**: The CIDR block is the default CIDR block of the NAT gateway.
     *   **false**: The CIDR block is not the default CIDR block of the NAT gateway.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The ID of the VPC NAT gateway.
     *
     * @example ngw-gw8v16wgvtq26vh59****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The CIDR block of the NAT gateway.
     *
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $natIpCidr;

    /**
     * @description The description of the CIDR block of the NAT gateway.
     *
     * @example test
     *
     * @var string
     */
    public $natIpCidrDescription;

    /**
     * @description The ID of the CIDR block of the NAT gateway.
     *
     * @example vpcnatcidr-gw8ov42ei6xh1jys2****
     *
     * @var string
     */
    public $natIpCidrId;

    /**
     * @description The name of the CIDR block of the NAT gateway.
     *
     * @example Name
     *
     * @var string
     */
    public $natIpCidrName;

    /**
     * @description The status of the CIDR block of the NAT gateway. If **Available** is returned, it indicates that the CIDR block is available.
     *
     * @example Available
     *
     * @var string
     */
    public $natIpCidrStatus;
    protected $_name = [
        'creationTime'         => 'CreationTime',
        'isDefault'            => 'IsDefault',
        'natGatewayId'         => 'NatGatewayId',
        'natIpCidr'            => 'NatIpCidr',
        'natIpCidrDescription' => 'NatIpCidrDescription',
        'natIpCidrId'          => 'NatIpCidrId',
        'natIpCidrName'        => 'NatIpCidrName',
        'natIpCidrStatus'      => 'NatIpCidrStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natIpCidr) {
            $res['NatIpCidr'] = $this->natIpCidr;
        }
        if (null !== $this->natIpCidrDescription) {
            $res['NatIpCidrDescription'] = $this->natIpCidrDescription;
        }
        if (null !== $this->natIpCidrId) {
            $res['NatIpCidrId'] = $this->natIpCidrId;
        }
        if (null !== $this->natIpCidrName) {
            $res['NatIpCidrName'] = $this->natIpCidrName;
        }
        if (null !== $this->natIpCidrStatus) {
            $res['NatIpCidrStatus'] = $this->natIpCidrStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natIpCidrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NatIpCidr'])) {
            $model->natIpCidr = $map['NatIpCidr'];
        }
        if (isset($map['NatIpCidrDescription'])) {
            $model->natIpCidrDescription = $map['NatIpCidrDescription'];
        }
        if (isset($map['NatIpCidrId'])) {
            $model->natIpCidrId = $map['NatIpCidrId'];
        }
        if (isset($map['NatIpCidrName'])) {
            $model->natIpCidrName = $map['NatIpCidrName'];
        }
        if (isset($map['NatIpCidrStatus'])) {
            $model->natIpCidrStatus = $map['NatIpCidrStatus'];
        }

        return $model;
    }
}
