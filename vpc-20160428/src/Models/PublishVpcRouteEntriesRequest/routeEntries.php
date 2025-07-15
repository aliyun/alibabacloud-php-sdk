<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\PublishVpcRouteEntriesRequest;

use AlibabaCloud\Tea\Model;

class routeEntries extends Model
{
    /**
     * @description The destination CIDR block for the route entry.
     *
     * This parameter is required.
     *
     * @example 121.41.165.123/32
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the route table for the route entry.
     *
     * This parameter is required.
     *
     * @example vtb-2ze3jgygk9bmsj23s****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
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
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
