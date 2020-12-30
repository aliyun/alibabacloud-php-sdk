<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteListResponseBody;

use AlibabaCloud\Tea\Model;

class routes extends Model
{
    /**
     * @var string
     */
    public $nextHop;

    /**
     * @var string
     */
    public $destinationCidr;

    /**
     * @var string
     */
    public $cost;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string[]
     */
    public $conflictCidrs;

    /**
     * @var string
     */
    public $routeProtocol;
    protected $_name = [
        'nextHop'         => 'NextHop',
        'destinationCidr' => 'DestinationCidr',
        'cost'            => 'Cost',
        'portName'        => 'PortName',
        'conflictCidrs'   => 'ConflictCidrs',
        'routeProtocol'   => 'RouteProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->destinationCidr) {
            $res['DestinationCidr'] = $this->destinationCidr;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->conflictCidrs) {
            $res['ConflictCidrs'] = $this->conflictCidrs;
        }
        if (null !== $this->routeProtocol) {
            $res['RouteProtocol'] = $this->routeProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['ConflictCidrs'])) {
            if (!empty($map['ConflictCidrs'])) {
                $model->conflictCidrs = $map['ConflictCidrs'];
            }
        }
        if (isset($map['RouteProtocol'])) {
            $model->routeProtocol = $map['RouteProtocol'];
        }

        return $model;
    }
}
