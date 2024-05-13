<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody\instanceList;

use AlibabaCloud\Tea\Model;

class ipAddressConfig extends Model
{
    /**
     * @description The basic protection threshold for the asset. Unit: Mbit/s.
     *
     * @example 5200
     *
     * @var int
     */
    public $blackholeThreshold;

    /**
     * @description The traffic scrubbing threshold for the asset. Unit: Mbit/s.
     *
     * @example 300
     *
     * @var int
     */
    public $defenseBpsThreshold;

    /**
     * @description The packet scrubbing threshold for the asset. Unit: packets per second (pps).
     *
     * @example 70000
     *
     * @var int
     */
    public $defensePpsThreshold;

    /**
     * @description The burstable protection threshold for the asset. Unit: Mbit/s.
     *
     * @example 12310
     *
     * @var int
     */
    public $elasticThreshold;

    /**
     * @description The IP address of the asset.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $instanceIp;

    /**
     * @description The DDoS mitigation status of the asset. Valid values:
     *
     *   **defense**: indicates that traffic scrubbing is performed on the asset.
     *   **blackhole**: indicates that blackhole filtering is triggered for the asset.
     *   **normal**: indicates that no DDoS attacks are launched against the asset.
     *
     * @example normal
     *
     * @var string
     */
    public $ipStatus;

    /**
     * @description The IP protocol that is supported by the asset. Valid values:
     *
     *   **v4**: IPv4
     *   **v6**: IPv6
     *
     * @example v4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description Indicates whether the asset is added to the instance. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $isBgppack;

    /**
     * @var int
     */
    public $isFullProtection;

    /**
     * @description The region code of the asset.
     *
     * @example cn-hangzhou-dg-a01
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'blackholeThreshold'  => 'BlackholeThreshold',
        'defenseBpsThreshold' => 'DefenseBpsThreshold',
        'defensePpsThreshold' => 'DefensePpsThreshold',
        'elasticThreshold'    => 'ElasticThreshold',
        'instanceIp'          => 'InstanceIp',
        'ipStatus'            => 'IpStatus',
        'ipVersion'           => 'IpVersion',
        'isBgppack'           => 'IsBgppack',
        'isFullProtection'    => 'IsFullProtection',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackholeThreshold) {
            $res['BlackholeThreshold'] = $this->blackholeThreshold;
        }
        if (null !== $this->defenseBpsThreshold) {
            $res['DefenseBpsThreshold'] = $this->defenseBpsThreshold;
        }
        if (null !== $this->defensePpsThreshold) {
            $res['DefensePpsThreshold'] = $this->defensePpsThreshold;
        }
        if (null !== $this->elasticThreshold) {
            $res['ElasticThreshold'] = $this->elasticThreshold;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->ipStatus) {
            $res['IpStatus'] = $this->ipStatus;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isBgppack) {
            $res['IsBgppack'] = $this->isBgppack;
        }
        if (null !== $this->isFullProtection) {
            $res['IsFullProtection'] = $this->isFullProtection;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipAddressConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackholeThreshold'])) {
            $model->blackholeThreshold = $map['BlackholeThreshold'];
        }
        if (isset($map['DefenseBpsThreshold'])) {
            $model->defenseBpsThreshold = $map['DefenseBpsThreshold'];
        }
        if (isset($map['DefensePpsThreshold'])) {
            $model->defensePpsThreshold = $map['DefensePpsThreshold'];
        }
        if (isset($map['ElasticThreshold'])) {
            $model->elasticThreshold = $map['ElasticThreshold'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['IpStatus'])) {
            $model->ipStatus = $map['IpStatus'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsBgppack'])) {
            $model->isBgppack = $map['IsBgppack'];
        }
        if (isset($map['IsFullProtection'])) {
            $model->isFullProtection = $map['IsFullProtection'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
