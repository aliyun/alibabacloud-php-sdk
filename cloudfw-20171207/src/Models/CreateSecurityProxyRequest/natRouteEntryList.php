<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSecurityProxyRequest;

use AlibabaCloud\Tea\Model;

class natRouteEntryList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destinationCidr;

    /**
     * @description This parameter is required.
     *
     * @example ngw-bp1okz6k7s4n4mnk5f1g3
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description This parameter is required.
     *
     * @example NatGateway
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description This parameter is required.
     *
     * @example vtb-2ze13wrgz7wsu9yiqeffg
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'destinationCidr' => 'DestinationCidr',
        'nextHopId'       => 'NextHopId',
        'nextHopType'     => 'NextHopType',
        'routeTableId'    => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidr) {
            $res['DestinationCidr'] = $this->destinationCidr;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natRouteEntryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
