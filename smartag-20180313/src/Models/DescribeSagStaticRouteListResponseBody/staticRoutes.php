<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagStaticRouteListResponseBody;

use AlibabaCloud\Dara\Model;

class staticRoutes extends Model
{
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
    public $vlan;
    protected $_name = [
        'destinationCidr' => 'DestinationCidr',
        'nextHop' => 'NextHop',
        'portName' => 'PortName',
        'vlan' => 'Vlan',
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

        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }

        if (null !== $this->vlan) {
            $res['Vlan'] = $this->vlan;
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

        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['Vlan'])) {
            $model->vlan = $map['Vlan'];
        }

        return $model;
    }
}
