<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCapacityReservationsRequest\deploymentSets;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCapacityReservationsRequest\minimumTransitRouterCapacities;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCapacityReservationsRequest\resetCapacityReservations;

class ModifyTransitRouterCapacityReservationsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var deploymentSets[]
     */
    public $deploymentSets;

    /**
     * @var minimumTransitRouterCapacities[]
     */
    public $minimumTransitRouterCapacities;

    /**
     * @var resetCapacityReservations[]
     */
    public $resetCapacityReservations;

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
        'deploymentSets' => 'DeploymentSets',
        'minimumTransitRouterCapacities' => 'MinimumTransitRouterCapacities',
        'resetCapacityReservations' => 'ResetCapacityReservations',
        'transitRouterId' => 'TransitRouterId',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->deploymentSets)) {
            Model::validateArray($this->deploymentSets);
        }
        if (\is_array($this->minimumTransitRouterCapacities)) {
            Model::validateArray($this->minimumTransitRouterCapacities);
        }
        if (\is_array($this->resetCapacityReservations)) {
            Model::validateArray($this->resetCapacityReservations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deploymentSets) {
            if (\is_array($this->deploymentSets)) {
                $res['DeploymentSets'] = [];
                $n1 = 0;
                foreach ($this->deploymentSets as $item1) {
                    $res['DeploymentSets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minimumTransitRouterCapacities) {
            if (\is_array($this->minimumTransitRouterCapacities)) {
                $res['MinimumTransitRouterCapacities'] = [];
                $n1 = 0;
                foreach ($this->minimumTransitRouterCapacities as $item1) {
                    $res['MinimumTransitRouterCapacities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resetCapacityReservations) {
            if (\is_array($this->resetCapacityReservations)) {
                $res['ResetCapacityReservations'] = [];
                $n1 = 0;
                foreach ($this->resetCapacityReservations as $item1) {
                    $res['ResetCapacityReservations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DeploymentSets'])) {
                $model->deploymentSets = [];
                $n1 = 0;
                foreach ($map['DeploymentSets'] as $item1) {
                    $model->deploymentSets[$n1] = deploymentSets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MinimumTransitRouterCapacities'])) {
            if (!empty($map['MinimumTransitRouterCapacities'])) {
                $model->minimumTransitRouterCapacities = [];
                $n1 = 0;
                foreach ($map['MinimumTransitRouterCapacities'] as $item1) {
                    $model->minimumTransitRouterCapacities[$n1] = minimumTransitRouterCapacities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResetCapacityReservations'])) {
            if (!empty($map['ResetCapacityReservations'])) {
                $model->resetCapacityReservations = [];
                $n1 = 0;
                foreach ($map['ResetCapacityReservations'] as $item1) {
                    $model->resetCapacityReservations[$n1] = resetCapacityReservations::fromMap($item1);
                    ++$n1;
                }
            }
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
