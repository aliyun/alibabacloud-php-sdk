<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ModifyNatGatewayCapacityReservationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $natGatewayCapacityShrink;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resetCapacityReservation;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'natGatewayCapacityShrink' => 'NatGatewayCapacity',
        'natGatewayId' => 'NatGatewayId',
        'regionId' => 'RegionId',
        'resetCapacityReservation' => 'ResetCapacityReservation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->natGatewayCapacityShrink) {
            $res['NatGatewayCapacity'] = $this->natGatewayCapacityShrink;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resetCapacityReservation) {
            $res['ResetCapacityReservation'] = $this->resetCapacityReservation;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['NatGatewayCapacity'])) {
            $model->natGatewayCapacityShrink = $map['NatGatewayCapacity'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResetCapacityReservation'])) {
            $model->resetCapacityReservation = $map['ResetCapacityReservation'];
        }

        return $model;
    }
}
