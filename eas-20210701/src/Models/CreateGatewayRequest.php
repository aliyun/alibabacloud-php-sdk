<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayRequest extends Model
{
    /**
     * @description The name of the resource group.
     *
     * @example eas-r-4gt8twzwllfo******
     *
     * @var string
     */
    public $resourceName;

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
     * @description The instance type used for the private gateway.
     *
     * This parameter is required.
     * @example ecs.c6.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The private gateway alias.
     *
     * @example mygateway1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'resourceName'   => 'ResourceName',
        'enableInternet' => 'EnableInternet',
        'enableIntranet' => 'EnableIntranet',
        'instanceType'   => 'InstanceType',
        'name'           => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
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

        return $model;
    }
}
