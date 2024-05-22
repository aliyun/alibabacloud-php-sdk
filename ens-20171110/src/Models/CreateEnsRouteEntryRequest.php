<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateEnsRouteEntryRequest extends Model
{
    /**
     * @description The description of the custom route entry.
     *
     * @example example
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block of the custom route entry. Make sure that the destination CIDR block meets the following requirements:
     *
     *   The destination CIDR block is not 100.64.0.0/10 or a subset of 100.64.0.0/10.
     *   The destination CIDR block of the custom route entry is different from the destination CIDR blocks of other route entries in the same route table.
     *   0.0.0.0/0 indicates the default CIDR block.
     *
     * This parameter is required.
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the next hop of the custom route entry.
     *
     * This parameter is required.
     * @example i-5vb7leks9z4mxy1ay258
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The type of next hop of the custom route entry. Valid values:
     *
     *   Instance (default): an ENS instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The name of the custom route entry that you want to add. The name must be 1 to 128 characters in length. It cannot start with http:// or https://.
     *
     * @example test
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description The ID of the route table to which you want to add a custom route entry.
     *
     * This parameter is required.
     * @example vtb-bp1cifr72dioje82lse2j
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'description'          => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
        'routeEntryName'       => 'RouteEntryName',
        'routeTableId'         => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnsRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
