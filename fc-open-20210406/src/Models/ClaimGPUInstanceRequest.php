<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ClaimGPUInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $diskPerformanceLevel;

    /**
     * @var string
     */
    public $diskSizeGigabytes;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetBandwidthOut;

    /**
     * @var string
     */
    public $password;

    /**
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
    protected $_name = [
        'diskPerformanceLevel' => 'diskPerformanceLevel',
        'diskSizeGigabytes'    => 'diskSizeGigabytes',
        'imageId'              => 'imageId',
        'instanceType'         => 'instanceType',
        'internetBandwidthOut' => 'internetBandwidthOut',
        'password'             => 'password',
        'sourceCidrIp'         => 'sourceCidrIp',
        'tcpPortRange'         => 'tcpPortRange',
        'udpPortRange'         => 'udpPortRange',
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
        if (null !== $this->sourceCidrIp) {
            $res['sourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->tcpPortRange) {
            $res['tcpPortRange'] = $this->tcpPortRange;
        }
        if (null !== $this->udpPortRange) {
            $res['udpPortRange'] = $this->udpPortRange;
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

        return $model;
    }
}
