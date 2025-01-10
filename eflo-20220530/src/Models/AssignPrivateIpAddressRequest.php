<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class AssignPrivateIpAddressRequest extends Model
{
    /**
     * @description Specifies whether to assign a mac address.
     *
     * @example true
     *
     * @var bool
     */
    public $assignMac;

    /**
     * @description By default, popApi is not ignored and idempotent
     *
     * @example 3fd79d62-ab1d-11ec-9a53-0242ac110004
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the variable.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the network interface controller.
     *
     * This parameter is required.
     * @example lni-bp18exxqa2rvfn45e5pz
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The secondary private IP address.
     *
     * @example 10.0.6.194
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The default value is false. If you set the value to true, the secondary private IP address application process can be accelerated.
     *
     * >  For more information, submit a ticket.
     * @example false
     *
     * @var bool
     */
    public $skipConfig;

    /**
     * @description It belongs to the Lingjun subnet.
     *
     * This parameter is required.
     * @example subnet-f3zfzmnc
     *
     * @var string
     */
    public $subnetId;
    protected $_name = [
        'assignMac'          => 'AssignMac',
        'clientToken'        => 'ClientToken',
        'description'        => 'Description',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpAddress'   => 'PrivateIpAddress',
        'regionId'           => 'RegionId',
        'skipConfig'         => 'SkipConfig',
        'subnetId'           => 'SubnetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignMac) {
            $res['AssignMac'] = $this->assignMac;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->skipConfig) {
            $res['SkipConfig'] = $this->skipConfig;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPrivateIpAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignMac'])) {
            $model->assignMac = $map['AssignMac'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SkipConfig'])) {
            $model->skipConfig = $map['SkipConfig'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        return $model;
    }
}
