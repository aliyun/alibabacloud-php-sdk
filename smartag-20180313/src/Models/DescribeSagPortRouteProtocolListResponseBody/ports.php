<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagPortRouteProtocolListResponseBody;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $remoteIp;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $neighborIp;

    /**
     * @var string
     */
    public $routeProtocol;

    /**
     * @var string
     */
    public $remoteAs;

    /**
     * @var string
     */
    public $vlan;
    protected $_name = [
        'status'        => 'Status',
        'remoteIp'      => 'RemoteIp',
        'portName'      => 'PortName',
        'neighborIp'    => 'NeighborIp',
        'routeProtocol' => 'RouteProtocol',
        'remoteAs'      => 'RemoteAs',
        'vlan'          => 'Vlan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->remoteIp) {
            $res['RemoteIp'] = $this->remoteIp;
        }
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->neighborIp) {
            $res['NeighborIp'] = $this->neighborIp;
        }
        if (null !== $this->routeProtocol) {
            $res['RouteProtocol'] = $this->routeProtocol;
        }
        if (null !== $this->remoteAs) {
            $res['RemoteAs'] = $this->remoteAs;
        }
        if (null !== $this->vlan) {
            $res['Vlan'] = $this->vlan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RemoteIp'])) {
            $model->remoteIp = $map['RemoteIp'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['NeighborIp'])) {
            $model->neighborIp = $map['NeighborIp'];
        }
        if (isset($map['RouteProtocol'])) {
            $model->routeProtocol = $map['RouteProtocol'];
        }
        if (isset($map['RemoteAs'])) {
            $model->remoteAs = $map['RemoteAs'];
        }
        if (isset($map['Vlan'])) {
            $model->vlan = $map['Vlan'];
        }

        return $model;
    }
}
