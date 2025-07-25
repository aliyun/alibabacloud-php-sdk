<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCloudGtmInstanceConfigLbStrategyRequest extends Model
{
    /**
     * @description The language in which the returned results are displayed. Valid values:
     *
     *   **zh-CN**: Chinese
     *   **en-US** (default): English
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The new policy for load balancing between address pools. Valid values:
     *
     *   round_robin: All address pools are returned for Domain Name System (DNS) requests from any source. All address pools are sorted in round-robin mode each time they are returned.
     *   sequence: The address pool with the smallest sequence number is preferentially returned for DNS requests from any source. The sequence number indicates the priority for returning the address pool. A smaller sequence number indicates a higher priority. If the address pool with the smallest sequence number is unavailable, the address pool with the second smallest sequence number is returned.
     *   weight: You can set a different weight value for each address pool. This way, address pools are returned based on the weight values.
     *   source_nearest: GTM returns different address pools based on the sources of DNS requests. This way, users can access nearby address pools.
     *
     * @example sequence
     *
     * @var string
     */
    public $addressPoolLbStrategy;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configuration ID of the access domain name. Two configuration IDs exist when the access domain name is bound to the same GTM instance but an A record and an AAAA record are configured for the access domain name. The configuration ID uniquely identifies a configuration.
     *
     * You can call the [ListCloudGtmInstanceConfigs](~~ListCloudGtmInstanceConfigs~~) operation to query the configuration ID of the desired access domain name.
     *
     * @example Config-000**11
     *
     * @var string
     */
    public $configId;

    /**
     * @description The ID of the GTM 3.0 instance for which you want to modify the load balancing policy.
     *
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;

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
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressPoolLbStrategy' => 'AddressPoolLbStrategy',
        'clientToken' => 'ClientToken',
        'configId' => 'ConfigId',
        'instanceId' => 'InstanceId',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->addressPoolLbStrategy) {
            $res['AddressPoolLbStrategy'] = $this->addressPoolLbStrategy;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sequenceLbStrategyMode) {
            $res['SequenceLbStrategyMode'] = $this->sequenceLbStrategyMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCloudGtmInstanceConfigLbStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AddressPoolLbStrategy'])) {
            $model->addressPoolLbStrategy = $map['AddressPoolLbStrategy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SequenceLbStrategyMode'])) {
            $model->sequenceLbStrategyMode = $map['SequenceLbStrategyMode'];
        }

        return $model;
    }
}
