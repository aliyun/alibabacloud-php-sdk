<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ModifyTransitRouterCapacityReservationsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deploymentSetsShrink;

    /**
     * @var string
     */
    public $minimumTransitRouterCapacitiesShrink;

    /**
     * @var string
     */
    public $resetCapacityReservationsShrink;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'deploymentSetsShrink' => 'DeploymentSets',
        'minimumTransitRouterCapacitiesShrink' => 'MinimumTransitRouterCapacities',
        'resetCapacityReservationsShrink' => 'ResetCapacityReservations',
        'transitRouterId' => 'TransitRouterId',
        'version' => 'Version',
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

        if (null !== $this->deploymentSetsShrink) {
            $res['DeploymentSets'] = $this->deploymentSetsShrink;
        }

        if (null !== $this->minimumTransitRouterCapacitiesShrink) {
            $res['MinimumTransitRouterCapacities'] = $this->minimumTransitRouterCapacitiesShrink;
        }

        if (null !== $this->resetCapacityReservationsShrink) {
            $res['ResetCapacityReservations'] = $this->resetCapacityReservationsShrink;
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['DeploymentSets'])) {
            $model->deploymentSetsShrink = $map['DeploymentSets'];
        }

        if (isset($map['MinimumTransitRouterCapacities'])) {
            $model->minimumTransitRouterCapacitiesShrink = $map['MinimumTransitRouterCapacities'];
        }

        if (isset($map['ResetCapacityReservations'])) {
            $model->resetCapacityReservationsShrink = $map['ResetCapacityReservations'];
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
