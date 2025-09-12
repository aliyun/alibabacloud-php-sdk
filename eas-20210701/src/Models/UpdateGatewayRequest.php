<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class UpdateGatewayRequest extends Model
{
    /**
     * @var bool
     */
    public $enableInternet;

    /**
     * @var bool
     */
    public $enableIntranet;

    /**
     * @var bool
     */
    public $enableSSLRedirection;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $replicas;
    protected $_name = [
        'enableInternet' => 'EnableInternet',
        'enableIntranet' => 'EnableIntranet',
        'enableSSLRedirection' => 'EnableSSLRedirection',
        'instanceType' => 'InstanceType',
        'isDefault' => 'IsDefault',
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
        if (null !== $this->enableInternet) {
            $res['EnableInternet'] = $this->enableInternet;
        }

        if (null !== $this->enableIntranet) {
            $res['EnableIntranet'] = $this->enableIntranet;
        }

        if (null !== $this->enableSSLRedirection) {
            $res['EnableSSLRedirection'] = $this->enableSSLRedirection;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
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
        if (isset($map['EnableInternet'])) {
            $model->enableInternet = $map['EnableInternet'];
        }

        if (isset($map['EnableIntranet'])) {
            $model->enableIntranet = $map['EnableIntranet'];
        }

        if (isset($map['EnableSSLRedirection'])) {
            $model->enableSSLRedirection = $map['EnableSSLRedirection'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
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
