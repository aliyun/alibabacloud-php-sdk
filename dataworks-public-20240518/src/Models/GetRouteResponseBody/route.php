<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetRouteResponseBody;

use AlibabaCloud\Tea\Model;

class route extends Model
{
    /**
     * @description The time when the route was created. The value is a 64-bit timestamp.
     *
     * @example 1727055811000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The CIDR block of the destination-based route.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $destinationCidr;

    /**
     * @description The route ID.
     *
     * @example 1000
     *
     * @var int
     */
    public $id;

    /**
     * @description The network ID.
     *
     * @example 1000
     *
     * @var int
     */
    public $networkId;

    /**
     * @description The resource group ID.
     *
     * @example Serverless_res_group_524257424564736_6831777003XXXXX
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The network resource ID.
     *
     * @example ns-679XXXXX
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'destinationCidr' => 'DestinationCidr',
        'id' => 'Id',
        'networkId' => 'NetworkId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->destinationCidr) {
            $res['DestinationCidr'] = $this->destinationCidr;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return route
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
