<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceResponseBody\instanceList;

use AlibabaCloud\Tea\Model;

class instance extends Model
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
     * @description The ID of the asset.
     *
     * @example i-bp1cb6x80tfgocid****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the asset.
     *
     * @example 121.199.XX.XX
     *
     * @var string
     */
    public $instanceIp;

    /**
     * @description The name of the asset.
     *
     * @example launch-advisor-2021****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The DDoS mitigation status of the asset. Valid values:
     *
     *   **mitigating**: indicates that traffic scrubbing is triggered for the asset.
     *   **blackholed**: indicates that blackhole filtering is triggered for the asset.
     *   **normal**: indicates that the instance is normal.
     *
     * @example normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **ecs**: ECS instance
     *   **slb**: SLB instance
     *   **eip**: EIP
     *
     * @example ecs
     *
     * @var string
     */
    public $instanceType;

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
     * @description Indicates whether the asset is associated with an Anti-DDoS Origin Basic instance. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $isBgppack;
    protected $_name = [
        'blackholeThreshold'  => 'BlackholeThreshold',
        'defenseBpsThreshold' => 'DefenseBpsThreshold',
        'defensePpsThreshold' => 'DefensePpsThreshold',
        'elasticThreshold'    => 'ElasticThreshold',
        'instanceId'          => 'InstanceId',
        'instanceIp'          => 'InstanceIp',
        'instanceName'        => 'InstanceName',
        'instanceStatus'      => 'InstanceStatus',
        'instanceType'        => 'InstanceType',
        'ipVersion'           => 'IpVersion',
        'isBgppack'           => 'IsBgppack',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isBgppack) {
            $res['IsBgppack'] = $this->isBgppack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsBgppack'])) {
            $model->isBgppack = $map['IsBgppack'];
        }

        return $model;
    }
}
