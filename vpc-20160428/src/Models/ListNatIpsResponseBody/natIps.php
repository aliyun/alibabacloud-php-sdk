<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpsResponseBody;

use AlibabaCloud\Dara\Model;

class natIps extends Model
{
    /**
     * @var string
     */
    public $ipv4Prefix;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $natIpCidr;

    /**
     * @var string
     */
    public $natIpDescription;

    /**
     * @var string
     */
    public $natIpId;

    /**
     * @var string
     */
    public $natIpName;

    /**
     * @var string
     */
    public $natIpStatus;
    protected $_name = [
        'ipv4Prefix' => 'Ipv4Prefix',
        'isDefault' => 'IsDefault',
        'natGatewayId' => 'NatGatewayId',
        'natIp' => 'NatIp',
        'natIpCidr' => 'NatIpCidr',
        'natIpDescription' => 'NatIpDescription',
        'natIpId' => 'NatIpId',
        'natIpName' => 'NatIpName',
        'natIpStatus' => 'NatIpStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4Prefix) {
            $res['Ipv4Prefix'] = $this->ipv4Prefix;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4Prefix'])) {
            $model->ipv4Prefix = $map['Ipv4Prefix'];
        }

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
