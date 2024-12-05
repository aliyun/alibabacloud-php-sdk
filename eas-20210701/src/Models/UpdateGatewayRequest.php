<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRequest extends Model
{
    /**
     * @description Specifies whether to enable Internet access. Default value: false.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $enableInternet;

    /**
     * @description Specifies whether to enable internal network access. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIntranet;

    /**
     * @var bool
     */
    public $enableSSLRedirection;

    /**
     * @description The instance type used for the private gateway.
     *
     * @example ecs.c6.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Indicates whether it is the default private gateway.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The private gateway alias.
     *
     * @example mygateway1
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of nodes in the private gateway.
     *
     * @example 2
     *
     * @var int
     */
    public $replicas;
    protected $_name = [
        'enableInternet'       => 'EnableInternet',
        'enableIntranet'       => 'EnableIntranet',
        'enableSSLRedirection' => 'EnableSSLRedirection',
        'instanceType'         => 'InstanceType',
        'isDefault'            => 'IsDefault',
        'name'                 => 'Name',
        'replicas'             => 'Replicas',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateGatewayRequest
     */
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
