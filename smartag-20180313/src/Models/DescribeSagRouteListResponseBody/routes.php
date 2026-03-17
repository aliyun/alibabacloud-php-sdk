<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteListResponseBody;

use AlibabaCloud\Dara\Model;

class routes extends Model
{
    /**
     * @var string[]
     */
    public $conflictCidrs;

    /**
     * @var string
     */
    public $cost;

    /**
     * @var string
     */
    public $destinationCidr;

    /**
     * @var string
     */
    public $nextHop;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $routeProtocol;
    protected $_name = [
        'conflictCidrs' => 'ConflictCidrs',
        'cost' => 'Cost',
        'destinationCidr' => 'DestinationCidr',
        'nextHop' => 'NextHop',
        'portName' => 'PortName',
        'routeProtocol' => 'RouteProtocol',
    ];

    public function validate()
    {
        if (\is_array($this->conflictCidrs)) {
            Model::validateArray($this->conflictCidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflictCidrs) {
            if (\is_array($this->conflictCidrs)) {
                $res['ConflictCidrs'] = [];
                $n1 = 0;
                foreach ($this->conflictCidrs as $item1) {
                    $res['ConflictCidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }

        if (null !== $this->destinationCidr) {
            $res['DestinationCidr'] = $this->destinationCidr;
        }

        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }

        if (null !== $this->routeProtocol) {
            $res['RouteProtocol'] = $this->routeProtocol;
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
        if (isset($map['ConflictCidrs'])) {
            if (!empty($map['ConflictCidrs'])) {
                $model->conflictCidrs = [];
                $n1 = 0;
                foreach ($map['ConflictCidrs'] as $item1) {
                    $model->conflictCidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }

        if (isset($map['DestinationCidr'])) {
            $model->destinationCidr = $map['DestinationCidr'];
        }

        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['RouteProtocol'])) {
            $model->routeProtocol = $map['RouteProtocol'];
        }

        return $model;
    }
}
