<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ClaimGPUInstanceRequest extends Model
{
    /**
     * @example PL0
     *
     * @var string
     */
    public $diskPerformanceLevel;

    /**
     * @example 100
     *
     * @var string
     */
    public $diskSizeGigabytes;

    /**
     * @example m-foobar
     *
     * @var string
     */
    public $imageId;

    /**
     * @example ecs.gn7i-c8g1.2xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 100
     *
     * @var string
     */
    public $internetBandwidthOut;

    /**
     * @example MyPassword
     *
     * @var string
     */
    public $password;

    /**
     * @example acs:ram::1234567890:role/fc-test
     *
     * @var string
     */
    public $role;

    /**
     * @example sg-xxxx
     *
     * @var string
     */
    public $sgId;

    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string[]
     */
    public $tcpPortRange;

    /**
     * @var string[]
     */
    public $udpPortRange;

    /**
     * @example v-xxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-xxxx
     *
     * @var string
     */
    public $vswId;
    protected $_name = [
        'diskPerformanceLevel' => 'diskPerformanceLevel',
        'diskSizeGigabytes'    => 'diskSizeGigabytes',
        'imageId'              => 'imageId',
        'instanceType'         => 'instanceType',
        'internetBandwidthOut' => 'internetBandwidthOut',
        'password'             => 'password',
        'role'                 => 'role',
        'sgId'                 => 'sgId',
        'sourceCidrIp'         => 'sourceCidrIp',
        'tcpPortRange'         => 'tcpPortRange',
        'udpPortRange'         => 'udpPortRange',
        'vpcId'                => 'vpcId',
        'vswId'                => 'vswId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskPerformanceLevel) {
            $res['diskPerformanceLevel'] = $this->diskPerformanceLevel;
        }
        if (null !== $this->diskSizeGigabytes) {
            $res['diskSizeGigabytes'] = $this->diskSizeGigabytes;
        }
        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->internetBandwidthOut) {
            $res['internetBandwidthOut'] = $this->internetBandwidthOut;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->sgId) {
            $res['sgId'] = $this->sgId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['sourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->tcpPortRange) {
            $res['tcpPortRange'] = $this->tcpPortRange;
        }
        if (null !== $this->udpPortRange) {
            $res['udpPortRange'] = $this->udpPortRange;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->vswId) {
            $res['vswId'] = $this->vswId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClaimGPUInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['diskPerformanceLevel'])) {
            $model->diskPerformanceLevel = $map['diskPerformanceLevel'];
        }
        if (isset($map['diskSizeGigabytes'])) {
            $model->diskSizeGigabytes = $map['diskSizeGigabytes'];
        }
        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['internetBandwidthOut'])) {
            $model->internetBandwidthOut = $map['internetBandwidthOut'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['sgId'])) {
            $model->sgId = $map['sgId'];
        }
        if (isset($map['sourceCidrIp'])) {
            $model->sourceCidrIp = $map['sourceCidrIp'];
        }
        if (isset($map['tcpPortRange'])) {
            if (!empty($map['tcpPortRange'])) {
                $model->tcpPortRange = $map['tcpPortRange'];
            }
        }
        if (isset($map['udpPortRange'])) {
            if (!empty($map['udpPortRange'])) {
                $model->udpPortRange = $map['udpPortRange'];
            }
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['vswId'])) {
            $model->vswId = $map['vswId'];
        }

        return $model;
    }
}
