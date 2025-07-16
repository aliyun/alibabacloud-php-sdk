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
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $enableInternet;

    /**
     * @description Specifies whether to enable private access. Default value: true.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableIntranet;

    /**
     * @description Specifies whether to enable HTTP to HTTPS redirection. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSSLRedirection;

    /**
     * @description The instance type used by the private gateway. Valid values:
     *
     *   2c4g
     *   4c8g
     *   8c16g
     *   16c32g
     *
     * @example ecs.c6.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether it is the default private gateway.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The alias of the private gateway.
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
        'enableInternet' => 'EnableInternet',
        'enableIntranet' => 'EnableIntranet',
        'enableSSLRedirection' => 'EnableSSLRedirection',
        'instanceType' => 'InstanceType',
        'isDefault' => 'IsDefault',
        'name' => 'Name',
        'replicas' => 'Replicas',
    ];

    public function validate() {}

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
