<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetIpv4GatewayAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetIpv4GatewayAttributeResponseBody extends Model
{
    /**
     * @description The time when the IPv4 gateway was created.
     *
     * @example 2022-02-24T09:02:36Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the IPv4 gateway is activated. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The description of the IPv4 gateway.
     *
     * @example new
     *
     * @var string
     */
    public $ipv4GatewayDescription;

    /**
     * @description The ID of the IPv4 gateway.
     *
     * @example ipv4gw-5tsnc6s4ogsedtp3k****
     *
     * @var string
     */
    public $ipv4GatewayId;

    /**
     * @description The name of the IPv4 gateway.
     *
     * @example name
     *
     * @var string
     */
    public $ipv4GatewayName;

    /**
     * @description The ID of the route table associated with the IPv4 gateway.
     *
     * @example vtb-5ts0ohchwkp3dydt2****
     *
     * @var string
     */
    public $ipv4GatewayRouteTableId;

    /**
     * @description The ID of the request.
     *
     * @example 7F79A919-6FE9-50C4-967B-45705E1F9C38
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the IPv4 gateway belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the IPv4 gateway. Valid values:
     *
     *   **Creating**
     *   **Created**
     *   **Modifying**
     *   **Deleting**
     *   **Deleted**
     *   **Activating**
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the virtual private cloud (VPC) with which the IPv4 gateway is associated.
     *
     * @example vpc-5tsrxlw7dv074gci4****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'createTime'              => 'CreateTime',
        'enabled'                 => 'Enabled',
        'ipv4GatewayDescription'  => 'Ipv4GatewayDescription',
        'ipv4GatewayId'           => 'Ipv4GatewayId',
        'ipv4GatewayName'         => 'Ipv4GatewayName',
        'ipv4GatewayRouteTableId' => 'Ipv4GatewayRouteTableId',
        'requestId'               => 'RequestId',
        'resourceGroupId'         => 'ResourceGroupId',
        'status'                  => 'Status',
        'tags'                    => 'Tags',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIpv4GatewayAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
