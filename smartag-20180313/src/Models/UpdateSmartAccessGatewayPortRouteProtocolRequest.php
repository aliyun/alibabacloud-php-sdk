<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class UpdateSmartAccessGatewayPortRouteProtocolRequest extends Model
{
    /**
     * @var bool
     */
    public $crossAccount;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remoteAs;

    /**
     * @var string
     */
    public $remoteIp;

    /**
     * @var string
     */
    public $resourceUid;

    /**
     * @var string
     */
    public $routeProtocol;

    /**
     * @var string
     */
    public $sagInsId;

    /**
     * @var string
     */
    public $sagSn;

    /**
     * @var string
     */
    public $vlan;
    protected $_name = [
        'crossAccount' => 'CrossAccount',
        'portName' => 'PortName',
        'regionId' => 'RegionId',
        'remoteAs' => 'RemoteAs',
        'remoteIp' => 'RemoteIp',
        'resourceUid' => 'ResourceUid',
        'routeProtocol' => 'RouteProtocol',
        'sagInsId' => 'SagInsId',
        'sagSn' => 'SagSn',
        'vlan' => 'Vlan',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossAccount) {
            $res['CrossAccount'] = $this->crossAccount;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remoteAs) {
            $res['RemoteAs'] = $this->remoteAs;
        }

        if (null !== $this->remoteIp) {
            $res['RemoteIp'] = $this->remoteIp;
        }

        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }

        if (null !== $this->routeProtocol) {
            $res['RouteProtocol'] = $this->routeProtocol;
        }

        if (null !== $this->sagInsId) {
            $res['SagInsId'] = $this->sagInsId;
        }

        if (null !== $this->sagSn) {
            $res['SagSn'] = $this->sagSn;
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
        if (isset($map['CrossAccount'])) {
            $model->crossAccount = $map['CrossAccount'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemoteAs'])) {
            $model->remoteAs = $map['RemoteAs'];
        }

        if (isset($map['RemoteIp'])) {
            $model->remoteIp = $map['RemoteIp'];
        }

        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }

        if (isset($map['RouteProtocol'])) {
            $model->routeProtocol = $map['RouteProtocol'];
        }

        if (isset($map['SagInsId'])) {
            $model->sagInsId = $map['SagInsId'];
        }

        if (isset($map['SagSn'])) {
            $model->sagSn = $map['SagSn'];
        }

        if (isset($map['Vlan'])) {
            $model->vlan = $map['Vlan'];
        }

        return $model;
    }
}
