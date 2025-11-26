<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeCreatedNatFirewallResponseBody;

use AlibabaCloud\Dara\Model;

class createdNatFirewalls extends Model
{
    /**
     * @var string
     */
    public $natFirewallId;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natGatewayName;
    protected $_name = [
        'natFirewallId' => 'NatFirewallId',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natFirewallId) {
            $res['NatFirewallId'] = $this->natFirewallId;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
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
        if (isset($map['NatFirewallId'])) {
            $model->natFirewallId = $map['NatFirewallId'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
        }

        return $model;
    }
}
