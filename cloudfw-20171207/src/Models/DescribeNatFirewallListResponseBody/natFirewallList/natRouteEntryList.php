<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponseBody\natFirewallList;

use AlibabaCloud\Dara\Model;

class natRouteEntryList extends Model
{
    /**
     * @var string
     */
    public $destinationCidr;

    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'destinationCidr' => 'DestinationCidr',
        'nextHopId' => 'NextHopId',
        'nextHopType' => 'NextHopType',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
