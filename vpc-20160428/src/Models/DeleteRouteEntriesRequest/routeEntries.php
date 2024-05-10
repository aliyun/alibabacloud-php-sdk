<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntriesRequest;

use AlibabaCloud\Tea\Model;

class routeEntries extends Model
{
    /**
     * @description The destination CIDR block of the route that you want to delete. IPv4 and IPv6 CIDR blocks are supported. You can specify up to 50 destination CIDR blocks.
     *
     * >  If **RouteEntryId** is not specified, **DstCidrBlock** and **NextHop** are required.
     * @example 47.100.XX.XX/24
     *
     * @var string
     */
    public $dstCidrBlock;

    /**
     * @description The ID of the next hop that you want to delete. You can specify up to 50 next hop IDs.
     *
     * >  If **RouteEntryId** is not specified, **DstCidrBlock** and **NextHop** are required.
     * @example i-j6c2fp57q8rr4jlu****
     *
     * @var string
     */
    public $nextHop;

    /**
     * @description The ID of the route that you want to delete. You can specify up to 50 route IDs.
     *
     * >  If **RouteEntryId** is not specified, **DstCidrBlock** and **NextHop** are required.
     * @example rte-bp1mnnr2al0naomnpv****
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description The ID of the route table to which the routes to be deleted belongs. You can specify up to 50 route table IDs.
     *
     * This parameter is required.
     * @example vtb-2ze3jgygk9bmsj23s****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'dstCidrBlock' => 'DstCidrBlock',
        'nextHop'      => 'NextHop',
        'routeEntryId' => 'RouteEntryId',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstCidrBlock) {
            $res['DstCidrBlock'] = $this->dstCidrBlock;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstCidrBlock'])) {
            $model->dstCidrBlock = $map['DstCidrBlock'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
