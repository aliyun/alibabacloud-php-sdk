<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpCidrsResponseBody;

use AlibabaCloud\Tea\Model;

class natIpCidrs extends Model
{
    /**
     * @example 2021-06-28T20:50Z
     *
     * @var string
     */
    public $creationTime;

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
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $natIpCidr;

    /**
     * @example test
     *
     * @var string
     */
    public $natIpCidrDescription;

    /**
     * @example vpcnatcidr-gw8ov42ei6xh1jys2****
     *
     * @var string
     */
    public $natIpCidrId;

    /**
     * @example Name
     *
     * @var string
     */
    public $natIpCidrName;

    /**
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
