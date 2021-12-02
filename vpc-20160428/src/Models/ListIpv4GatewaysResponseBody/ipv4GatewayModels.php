<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpv4GatewaysResponseBody;

use AlibabaCloud\Tea\Model;

class ipv4GatewayModels extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $ipv4GatewayDescription;

    /**
     * @var string
     */
    public $ipv4GatewayId;

    /**
     * @var string
     */
    public $ipv4GatewayName;

    /**
     * @var string
     */
    public $ipv4GatewayRouteTableId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'enabled'                 => 'Enabled',
        'gmtCreate'               => 'GmtCreate',
        'ipv4GatewayDescription'  => 'Ipv4GatewayDescription',
        'ipv4GatewayId'           => 'Ipv4GatewayId',
        'ipv4GatewayName'         => 'Ipv4GatewayName',
        'ipv4GatewayRouteTableId' => 'Ipv4GatewayRouteTableId',
        'status'                  => 'Status',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->ipv4GatewayDescription) {
            $res['Ipv4GatewayDescription'] = $this->ipv4GatewayDescription;
        }
        if (null !== $this->ipv4GatewayId) {
            $res['Ipv4GatewayId'] = $this->ipv4GatewayId;
        }
        if (null !== $this->ipv4GatewayName) {
            $res['Ipv4GatewayName'] = $this->ipv4GatewayName;
        }
        if (null !== $this->ipv4GatewayRouteTableId) {
            $res['Ipv4GatewayRouteTableId'] = $this->ipv4GatewayRouteTableId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv4GatewayModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Ipv4GatewayDescription'])) {
            $model->ipv4GatewayDescription = $map['Ipv4GatewayDescription'];
        }
        if (isset($map['Ipv4GatewayId'])) {
            $model->ipv4GatewayId = $map['Ipv4GatewayId'];
        }
        if (isset($map['Ipv4GatewayName'])) {
            $model->ipv4GatewayName = $map['Ipv4GatewayName'];
        }
        if (isset($map['Ipv4GatewayRouteTableId'])) {
            $model->ipv4GatewayRouteTableId = $map['Ipv4GatewayRouteTableId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
