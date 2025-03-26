<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpv4GatewaysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpv4GatewaysResponseBody\ipv4GatewayModels\tags;

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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'enabled' => 'Enabled',
        'gmtCreate' => 'GmtCreate',
        'ipv4GatewayDescription' => 'Ipv4GatewayDescription',
        'ipv4GatewayId' => 'Ipv4GatewayId',
        'ipv4GatewayName' => 'Ipv4GatewayName',
        'ipv4GatewayRouteTableId' => 'Ipv4GatewayRouteTableId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
