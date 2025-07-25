<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstanceConfigsResponseBody\instanceConfigs;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstanceConfigsResponseBody\instanceConfigs\instanceConfig\addressPools;
use AlibabaCloud\Tea\Model;

class instanceConfig extends Model
{
    /**
     * @description The policy for load balancing between address pools. Valid values:
     *
     *   round_robin: All address pools are returned for DNS requests from any source. All address pools are sorted in round-robin mode each time they are returned.
     *   sequence: The address pool with the smallest sequence number is preferentially returned for DNS requests from any source. The sequence number indicates the priority for returning the address pool. A smaller sequence number indicates a higher priority. If the address pool with the smallest sequence number is unavailable, the address pool with the second smallest sequence number is returned.
     *   weight: You can set a different weight value for each address pool. This way, address pools are returned based on the weight values.
     *   source_nearest: GTM returns different address pools based on the sources of DNS requests. This way, users can access nearby addresses.
     *
     * @example round_robin
     *
     * @var string
     */
    public $addressPoolLbStrategy;

    /**
     * @description The address pools.
     *
     * @var addressPools
     */
    public $addressPools;

    /**
     * @description The availability state of the access domain name. Valid values:
     *
     *   available: If the access domain name is **enabled** and the health state of the access domain name is **Normal**, the access domain name is deemed **Available**.
     *   unavailable: If the access domain name is **disabled** or the health state of the access domain name is **Abnormal**, the access domain name is deemed **Unavailable**.
     *
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @description The commodity code. Valid values:
     *
     *   dns_gtm_public_cn: the commodity code on the China site (aliyun.com)
     *   dns_gtm_public_intl: the commodity code on the international site (alibabacloud.com)
     *
     * @example dns_gtm_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The configuration ID of the access domain name. Two configuration IDs exist when the access domain name is bound to the same GTM instance but an A record and an AAAA record are configured for the access domain name. The configuration ID uniquely identifies a configuration.
     *
     * @example Config-000**11
     *
     * @var string
     */
    public $configId;

    /**
     * @description Instance configuration creation time.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Instance creation time (timestamp).
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The enabling state of the access domain name. Valid values:
     *
     *   enable: The access domain name is enabled and the intelligent scheduling policy of the GTM instance takes effect.
     *   disable: The access domain name is disabled and the intelligent scheduling policy of the GTM instance does not take effect.
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The health state of the access domain name. Valid values:
     *
     *   ok: The health state of the access domain name is Normal and all address pools that are referenced by the access domain name are available.
     *   ok_alert: The health state of the access domain name is Warning and some of the address pools that are referenced by the access domain name are unavailable. In this case, available address pools are normally used for DNS resolution, but unavailable address pools cannot be used for DNS resolution.
     *   exceptional: The health state of the access domain name is Abnormal and all address pools that are referenced by the access domain name are unavailable. In this case, addresses in the non-empty address pool with the smallest sequence number are preferentially used for fallback resolution. This returns DNS results for clients as much as possible.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID of the GTM 3.0 instance.
     *
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Remarks on the configuration of domain instance.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The GTM access domain name. The value of this parameter is composed of the value of ScheduleHostname and the value of ScheduleZoneName.
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
     * - A: IPv4 address
     * - AAAA: IPv6 address
     * - CNAME: Domain name
     *
     * @example A
     *
     * @var string
     */
    public $scheduleRrType;

    /**
     * @description The allocation mode of the access domain name. Valid values:
     *
     *   custom: custom allocation. You must specify a custom hostname and associate the hostname with a zone within the account to which the GTM instance belongs to generate an access domain name.
     *   sys_assign: system allocation. This mode is not supported. Do not set ScheduleZoneMode to sys_assign.
     *
     * @example custom
     *
     * @var string
     */
    public $scheduleZoneMode;

    /**
     * @description The zone (such as example.com) or subzone (such as a.example.com) of the GTM access domain name. In most cases, the zone or subzone is hosted in Authoritative DNS Resolution of the Alibaba Cloud DNS console within the account to which the GTM instance belongs.
     *
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;

    /**
     * @description The mode used if the address pool with the smallest sequence number is recovered. This parameter is required when AddressPoolLbStrategy is set to sequence. Valid values:
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
     * @description Global TTL (in seconds), the TTL value for domain resolution to addresses in the address pool, affecting the caching time of DNS records in the ISP\\"s LocalDNS. Supports custom TTL values.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The last modified time of the instance configuration.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The last modification time of the instance configuration (timestamp).
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The edition of the GTM 3.0 instance. Valid values:
     *
     *   standard: Standard Edition
     *   ultimate: Ultimate Edition
     *
     * @example ultimate
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'addressPoolLbStrategy' => 'AddressPoolLbStrategy',
        'addressPools' => 'AddressPools',
        'availableStatus' => 'AvailableStatus',
        'commodityCode' => 'CommodityCode',
        'configId' => 'ConfigId',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'enableStatus' => 'EnableStatus',
        'healthStatus' => 'HealthStatus',
        'instanceId' => 'InstanceId',
        'remark' => 'Remark',
        'scheduleDomainName' => 'ScheduleDomainName',
        'scheduleHostname' => 'ScheduleHostname',
        'scheduleRrType' => 'ScheduleRrType',
        'scheduleZoneMode' => 'ScheduleZoneMode',
        'scheduleZoneName' => 'ScheduleZoneName',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
        'ttl' => 'Ttl',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'versionCode' => 'VersionCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolLbStrategy) {
            $res['AddressPoolLbStrategy'] = $this->addressPoolLbStrategy;
        }
        if (null !== $this->addressPools) {
            $res['AddressPools'] = null !== $this->addressPools ? $this->addressPools->toMap() : null;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (null !== $this->scheduleZoneMode) {
            $res['ScheduleZoneMode'] = $this->scheduleZoneMode;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['AddressPools'])) {
            $model->addressPools = addressPools::fromMap($map['AddressPools']);
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
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
        if (isset($map['ScheduleZoneMode'])) {
            $model->scheduleZoneMode = $map['ScheduleZoneMode'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
