<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UpdateVirtualPhysicalConnectionRequest extends Model
{
    /**
     * @description The region ID of the hosted connection.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the request.
     *
     * @example 50M
     *
     * @var string
     */
    public $expectSpec;

    /**
     * @description Specifies whether to check the request without performing the operation. Valid values:
     *
     *   **true**: checks the request without performing the operation. The VLAN ID of the hosted connection is not changed. The system checks the required parameters, request syntax, and instance status. If the check fails, the corresponding error message is returned. If the request passes the check, the system returns the ID of the request.
     *   **false** (default): sends the request. If the request passes the check, the VLAN ID of the hosted connection is changed.
     *
     * @example pc-bp1mrgfbtmc9brre7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the VLAN ID of the hosted connection is changed. Valid values:
     *
     *   **true**: The VLAN ID of the hosted connection is changed.
     *   **false**: The VLAN ID of the hosted connection is not changed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The estimated bandwidth value of the hosted connection. The estimated bandwidth value takes effect after the payment is completed.
     *
     * Valid values: **50M**, **100M**, **200M**, **300M**, **400M**, **500M**, **1G**, **2G**, **5G**, **8G**, and **10G**.
     *
     * >  By default, the values of **2G**, **5G**, **8G**, and **10G** are unavailable. If you want to specify these values, contact your customer manager.
     *
     **M** indicates Mbit/s and **G** indicates Gbit/s.
     *
     * @example CBCE910E-D396-4944-8****
     *
     * @var string
     */
    public $token;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses **RequestId** as **ClientToken**. The value of **RequestId** in each API request may be different.
     * @example 1
     *
     * @var int
     */
    public $vlanId;
    protected $_name = [
        'dryRun'     => 'DryRun',
        'expectSpec' => 'ExpectSpec',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'token'      => 'Token',
        'vlanId'     => 'VlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->expectSpec) {
            $res['ExpectSpec'] = $this->expectSpec;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVirtualPhysicalConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ExpectSpec'])) {
            $model->expectSpec = $map['ExpectSpec'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
