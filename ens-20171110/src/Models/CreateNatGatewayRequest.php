<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateNatGatewayRequest extends Model
{
    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * This parameter is required.
     * @example cn-suzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The instance type of the NAT gateway. Set the value to **enat.default**.
     *
     * @example enat.default
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of the NAT gateway. The name must be 1 to 128 characters in length. The name cannot start with `http://` or `https://`.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the network.
     *
     * This parameter is required.
     * @example n-5qj7ykuxmjn7k96l090sp****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The ID of the vSwitch.
     *
     * This parameter is required.
     * @example vsw-5savh5ngxh8sbj14bu7n****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ensRegionId'  => 'EnsRegionId',
        'instanceType' => 'InstanceType',
        'name'         => 'Name',
        'networkId'    => 'NetworkId',
        'vSwitchId'    => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
