<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CreateGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var bool
     */
    public $enableInternet;

    /**
     * @var bool
     */
    public $enableIntranet;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $replicas;
    protected $_name = [
        'resourceName' => 'ResourceName',
        'autoRenewal' => 'AutoRenewal',
        'chargeType' => 'ChargeType',
        'enableInternet' => 'EnableInternet',
        'enableIntranet' => 'EnableIntranet',
        'instanceType' => 'InstanceType',
        'name' => 'Name',
        'replicas' => 'Replicas',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->enableInternet) {
            $res['EnableInternet'] = $this->enableInternet;
        }

        if (null !== $this->enableIntranet) {
            $res['EnableIntranet'] = $this->enableIntranet;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
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
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['EnableInternet'])) {
            $model->enableInternet = $map['EnableInternet'];
        }

        if (isset($map['EnableIntranet'])) {
            $model->enableIntranet = $map['EnableIntranet'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        return $model;
    }
}
