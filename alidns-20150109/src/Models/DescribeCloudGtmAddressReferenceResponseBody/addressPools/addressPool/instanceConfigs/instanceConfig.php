<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools\addressPool\instanceConfigs;

use AlibabaCloud\Tea\Model;

class instanceConfig extends Model
{
    /**
     * @description The policy for load balancing between address pools. Valid values:
     *
     *   round_robin: All address pools are returned for Domain Name System (DNS) requests from any source. All address pools are sorted in round-robin mode each time they are returned.
     *   sequence: The address pool with the smallest sequence number is preferentially returned for DNS requests from any source. The sequence number indicates the priority for returning the address pool. A smaller sequence number indicates a higher priority. If the address pool with the smallest sequence number is unavailable, the address pool with the second smallest sequence number is returned.
     *   weight: You can set a different weight value for each address pool. This way, address pools are returned based on the weight values.
     *   source_nearest: Different address pools are returned based on the sources of DNS requests. This way, users can access nearby address pools.
     *
     * @example round_robin
     *
     * @var string
     */
    public $addressPoolLbStrategy;

    /**
     * @description The availability state of the access domain name. Valid values:
     *
     *   available: If the access domain name is **enabled** and the health state is normal, the access domain name is deemed **available**.
     *   unavailable: If the access domain name is **disabled** or the health state is **abnormal**, the access domain name is deemed **unavailable**.
     *
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @description The configuration ID of the access domain name. Two configuration IDs exist when the access domain name is bound to the same GTM instance but an A record and an AAAA record are configured for the access domain name. The configuration ID uniquely identifies a configuration.
     *
     * @example config-00**01
     *
     * @var string
     */
    public $configId;

    /**
     * @description The enabling state of the access domain name. Valid values:
     *
     *   enable: The access domain name is enabled and the intelligent scheduling policy of the corresponding GTM instance takes effect.
     *   disable: The access domain name is disabled and the intelligent scheduling policy of the corresponding GTM instance does not take effect.
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The health state of the access domain name. Valid values:
     *
     *   ok: The health state of the access domain name is normal and all address pools that are referenced by the access domain name are available.
     *   ok_alert: The health state of the access domain name is warning and some of the address pools that are referenced by the access domain name are unavailable. In this case, only the available address pools are returned for DNS requests.
     *   exceptional: The health state of the access domain name is abnormal and all address pools that are referenced by the access domain name are unavailable. In this case, addresses in the non-empty address pool with the smallest sequence number are preferentially used for fallback resolution. This returns DNS results for clients as much as possible.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID of the GTM 3.0 instance.
     *
     * @example gtm-cn-zz11t58**0k
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Instance name.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Remarks.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The access domain name. The value of this parameter is composed of the value of ScheduleHostname and the value of ScheduleZoneName.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $scheduleDomainName;

    /**
     * @description Host record of the domain accessed by GTM.
     *
     * @example www
     *
     * @var string
     */
    public $scheduleHostname;

    /**
     * @description DNS record types for the scheduling domain:
     * - CNAME: Domain name
     * @example A
     *
     * @var string
     */
    public $scheduleRrType;

    /**
     * @description The zone such as example.com or subzone such as a.example.com of the access domain name. In most cases, the zone or subzone is hosted by the Public Authoritative DNS module of Alibaba Cloud DNS. This zone belongs to the account to which the GTM instance belongs.
     *
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;

    /**
     * @description The mode used if the address pool with the smallest sequence number is recovered. This parameter is returned when AddressPoolLbStrategy is set to sequence. Valid values:
     *
     *   preemptive: The address pool with the smallest sequence number is preferentially used if this address pool is recovered.
     *   non_preemptive: The current address pool is still used even if the address pool with the smallest sequence number is recovered.
     *
     * @example preemptive
     *
     * @var string
     */
    public $sequenceLbStrategyMode;

    /**
     * @description Global TTL (in seconds), the TTL value for domain name resolution to addresses in the address pool, which affects the caching time of DNS records in the ISP\\"s LocalDNS. Custom TTL values are supported.
     *
     * @example 30
     *
     * @var int
     */
    public $ttl;

    /**
     * @description Global Traffic Management version 3.0 instance types:
     * - ultimate: Ultimate Edition
     * @example ultimate
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'addressPoolLbStrategy'  => 'AddressPoolLbStrategy',
        'availableStatus'        => 'AvailableStatus',
        'configId'               => 'ConfigId',
        'enableStatus'           => 'EnableStatus',
        'healthStatus'           => 'HealthStatus',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'remark'                 => 'Remark',
        'scheduleDomainName'     => 'ScheduleDomainName',
        'scheduleHostname'       => 'ScheduleHostname',
        'scheduleRrType'         => 'ScheduleRrType',
        'scheduleZoneName'       => 'ScheduleZoneName',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
        'ttl'                    => 'Ttl',
        'versionCode'            => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolLbStrategy) {
            $res['AddressPoolLbStrategy'] = $this->addressPoolLbStrategy;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scheduleDomainName) {
            $res['ScheduleDomainName'] = $this->scheduleDomainName;
        }
        if (null !== $this->scheduleHostname) {
            $res['ScheduleHostname'] = $this->scheduleHostname;
        }
        if (null !== $this->scheduleRrType) {
            $res['ScheduleRrType'] = $this->scheduleRrType;
        }
        if (null !== $this->scheduleZoneName) {
            $res['ScheduleZoneName'] = $this->scheduleZoneName;
        }
        if (null !== $this->sequenceLbStrategyMode) {
            $res['SequenceLbStrategyMode'] = $this->sequenceLbStrategyMode;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPoolLbStrategy'])) {
            $model->addressPoolLbStrategy = $map['AddressPoolLbStrategy'];
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScheduleDomainName'])) {
            $model->scheduleDomainName = $map['ScheduleDomainName'];
        }
        if (isset($map['ScheduleHostname'])) {
            $model->scheduleHostname = $map['ScheduleHostname'];
        }
        if (isset($map['ScheduleRrType'])) {
            $model->scheduleRrType = $map['ScheduleRrType'];
        }
        if (isset($map['ScheduleZoneName'])) {
            $model->scheduleZoneName = $map['ScheduleZoneName'];
        }
        if (isset($map['SequenceLbStrategyMode'])) {
            $model->sequenceLbStrategyMode = $map['SequenceLbStrategyMode'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
