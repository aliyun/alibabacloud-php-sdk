<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAccessStrategyRequest\defaultAddrPool;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAccessStrategyRequest\failoverAddrPool;
use AlibabaCloud\Tea\Model;

class AddDnsGtmAccessStrategyRequest extends Model
{
    /**
     * @description The address pools in the primary address pool set.
     *
     * This parameter is required.
     *
     * @var defaultAddrPool[]
     */
    public $defaultAddrPool;

    /**
     * @description The type of the primary address pool. Valid values:
     *
     *   IPV4
     *   IPV6
     *   DOMAIN
     *
     * This parameter is required.
     *
     * @example ipv4
     *
     * @var string
     */
    public $defaultAddrPoolType;

    /**
     * @description Specifies whether to enable DNS resolution with optimal latency for the primary address pool set. Valid values:
     *
     *   OPEN
     *   CLOSE
     *
     * @example open
     *
     * @var string
     */
    public $defaultLatencyOptimization;

    /**
     * @description The load balancing policy of the primary address pool set. Valid values:
     *
     *   ALL_RR: returns all addresses.
     *   RATIO: returns addresses by weight.
     *
     * @example all_rr
     *
     * @var string
     */
    public $defaultLbaStrategy;

    /**
     * @description The maximum number of addresses returned from the primary address pool set.
     *
     * @example 3
     *
     * @var int
     */
    public $defaultMaxReturnAddrNum;

    /**
     * @description The minimum number of available addresses in the primary address pool set.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultMinAvailableAddrNum;

    /**
     * @description The address pools in the secondary address pool set. If no address pool exists in the secondary address pool set, set this parameter to EMPTY.
     *
     * @var failoverAddrPool[]
     */
    public $failoverAddrPool;

    /**
     * @description The type of the secondary address pool. Valid values:
     *
     *   IPV4
     *   IPV6
     *   DOMAIN
     *
     * @example ipv4
     *
     * @var string
     */
    public $failoverAddrPoolType;

    /**
     * @description Specifies whether to enable DNS resolution with optimal latency for the secondary address pool set. Valid values:
     *
     *   OPEN
     *   CLOSE
     *
     * @example open
     *
     * @var string
     */
    public $failoverLatencyOptimization;

    /**
     * @description The load balancing policy of the secondary address pool set. Valid values:
     *
     *   ALL_RR: returns all addresses.
     *   RATIO: returns addresses by weight.
     *
     * @example all_rr
     *
     * @var string
     */
    public $failoverLbaStrategy;

    /**
     * @description The maximum number of addresses returned from the secondary address pool set.
     *
     * @example 1
     *
     * @var int
     */
    public $failoverMaxReturnAddrNum;

    /**
     * @description The minimum number of available addresses in the secondary address pool set.
     *
     * @example 1
     *
     * @var int
     */
    public $failoverMinAvailableAddrNum;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the values for specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The Domain Name System (DNS) request source. For example: `["default", "drpeng"]` indicates Global and Dr. Peng Group.
     *
     * @example ["default", "drpeng"]
     *
     * @var string
     */
    public $lines;

    /**
     * @description The type of the access policy. Valid values:
     *
     *   GEO: geographical location-based access policy
     *   LATENCY: latency-based access policy
     *
     * This parameter is required.
     *
     * @example geo
     *
     * @var string
     */
    public $strategyMode;

    /**
     * @description The name of the access policy.
     *
     * This parameter is required.
     *
     * @example testStrategyName
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'defaultAddrPool' => 'DefaultAddrPool',
        'defaultAddrPoolType' => 'DefaultAddrPoolType',
        'defaultLatencyOptimization' => 'DefaultLatencyOptimization',
        'defaultLbaStrategy' => 'DefaultLbaStrategy',
        'defaultMaxReturnAddrNum' => 'DefaultMaxReturnAddrNum',
        'defaultMinAvailableAddrNum' => 'DefaultMinAvailableAddrNum',
        'failoverAddrPool' => 'FailoverAddrPool',
        'failoverAddrPoolType' => 'FailoverAddrPoolType',
        'failoverLatencyOptimization' => 'FailoverLatencyOptimization',
        'failoverLbaStrategy' => 'FailoverLbaStrategy',
        'failoverMaxReturnAddrNum' => 'FailoverMaxReturnAddrNum',
        'failoverMinAvailableAddrNum' => 'FailoverMinAvailableAddrNum',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'lines' => 'Lines',
        'strategyMode' => 'StrategyMode',
        'strategyName' => 'StrategyName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultAddrPool) {
            $res['DefaultAddrPool'] = [];
            if (null !== $this->defaultAddrPool && \is_array($this->defaultAddrPool)) {
                $n = 0;
                foreach ($this->defaultAddrPool as $item) {
                    $res['DefaultAddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultAddrPoolType) {
            $res['DefaultAddrPoolType'] = $this->defaultAddrPoolType;
        }
        if (null !== $this->defaultLatencyOptimization) {
            $res['DefaultLatencyOptimization'] = $this->defaultLatencyOptimization;
        }
        if (null !== $this->defaultLbaStrategy) {
            $res['DefaultLbaStrategy'] = $this->defaultLbaStrategy;
        }
        if (null !== $this->defaultMaxReturnAddrNum) {
            $res['DefaultMaxReturnAddrNum'] = $this->defaultMaxReturnAddrNum;
        }
        if (null !== $this->defaultMinAvailableAddrNum) {
            $res['DefaultMinAvailableAddrNum'] = $this->defaultMinAvailableAddrNum;
        }
        if (null !== $this->failoverAddrPool) {
            $res['FailoverAddrPool'] = [];
            if (null !== $this->failoverAddrPool && \is_array($this->failoverAddrPool)) {
                $n = 0;
                foreach ($this->failoverAddrPool as $item) {
                    $res['FailoverAddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failoverAddrPoolType) {
            $res['FailoverAddrPoolType'] = $this->failoverAddrPoolType;
        }
        if (null !== $this->failoverLatencyOptimization) {
            $res['FailoverLatencyOptimization'] = $this->failoverLatencyOptimization;
        }
        if (null !== $this->failoverLbaStrategy) {
            $res['FailoverLbaStrategy'] = $this->failoverLbaStrategy;
        }
        if (null !== $this->failoverMaxReturnAddrNum) {
            $res['FailoverMaxReturnAddrNum'] = $this->failoverMaxReturnAddrNum;
        }
        if (null !== $this->failoverMinAvailableAddrNum) {
            $res['FailoverMinAvailableAddrNum'] = $this->failoverMinAvailableAddrNum;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDnsGtmAccessStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultAddrPool'])) {
            if (!empty($map['DefaultAddrPool'])) {
                $model->defaultAddrPool = [];
                $n = 0;
                foreach ($map['DefaultAddrPool'] as $item) {
                    $model->defaultAddrPool[$n++] = null !== $item ? defaultAddrPool::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultAddrPoolType'])) {
            $model->defaultAddrPoolType = $map['DefaultAddrPoolType'];
        }
        if (isset($map['DefaultLatencyOptimization'])) {
            $model->defaultLatencyOptimization = $map['DefaultLatencyOptimization'];
        }
        if (isset($map['DefaultLbaStrategy'])) {
            $model->defaultLbaStrategy = $map['DefaultLbaStrategy'];
        }
        if (isset($map['DefaultMaxReturnAddrNum'])) {
            $model->defaultMaxReturnAddrNum = $map['DefaultMaxReturnAddrNum'];
        }
        if (isset($map['DefaultMinAvailableAddrNum'])) {
            $model->defaultMinAvailableAddrNum = $map['DefaultMinAvailableAddrNum'];
        }
        if (isset($map['FailoverAddrPool'])) {
            if (!empty($map['FailoverAddrPool'])) {
                $model->failoverAddrPool = [];
                $n = 0;
                foreach ($map['FailoverAddrPool'] as $item) {
                    $model->failoverAddrPool[$n++] = null !== $item ? failoverAddrPool::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailoverAddrPoolType'])) {
            $model->failoverAddrPoolType = $map['FailoverAddrPoolType'];
        }
        if (isset($map['FailoverLatencyOptimization'])) {
            $model->failoverLatencyOptimization = $map['FailoverLatencyOptimization'];
        }
        if (isset($map['FailoverLbaStrategy'])) {
            $model->failoverLbaStrategy = $map['FailoverLbaStrategy'];
        }
        if (isset($map['FailoverMaxReturnAddrNum'])) {
            $model->failoverMaxReturnAddrNum = $map['FailoverMaxReturnAddrNum'];
        }
        if (isset($map['FailoverMinAvailableAddrNum'])) {
            $model->failoverMinAvailableAddrNum = $map['FailoverMinAvailableAddrNum'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
