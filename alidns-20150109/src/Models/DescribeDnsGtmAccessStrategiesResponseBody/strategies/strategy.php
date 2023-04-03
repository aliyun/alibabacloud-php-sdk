<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy\effectiveAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy\lines;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @description The time when the access policy was created.
     *
     * @example 2018-08-09T00:10Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp that indicates when the access policy was created.
     *
     * @example 1533773400000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The type of the active address pool group. Valid values:
     *
     *   DEFAULT: the primary address pool group
     *   FAILOVER: the secondary address pool group
     *
     * @example default
     *
     * @var string
     */
    public $effectiveAddrPoolGroupType;

    /**
     * @description The type of the active address pools. Valid values:
     *
     *   IPV4
     *   IPV6
     *   DOMAIN
     *
     * @example ipv4
     *
     * @var string
     */
    public $effectiveAddrPoolType;

    /**
     * @description The active address pool groups.
     *
     * @var effectiveAddrPools
     */
    public $effectiveAddrPools;

    /**
     * @description The load balancing policy of the active address pool group. Data is returned when StrategyMode is set to GEO. Valid values:
     *
     * - RATIO: returns addresses by weight.
     * @example all_rr
     *
     * @var string
     */
    public $effectiveLbaStrategy;

    /**
     * @description The source regions. Data is returned when StrategyMode is set to GEO. Valid values:
     *
     * @var lines
     */
    public $lines;

    /**
     * @description The ID of the access policy.
     *
     * @example strategyid1
     *
     * @var string
     */
    public $strategyId;

    /**
     * @description The name of the access policy.
     *
     * @example strategname1
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'createTime'                 => 'CreateTime',
        'createTimestamp'            => 'CreateTimestamp',
        'effectiveAddrPoolGroupType' => 'EffectiveAddrPoolGroupType',
        'effectiveAddrPoolType'      => 'EffectiveAddrPoolType',
        'effectiveAddrPools'         => 'EffectiveAddrPools',
        'effectiveLbaStrategy'       => 'EffectiveLbaStrategy',
        'lines'                      => 'Lines',
        'strategyId'                 => 'StrategyId',
        'strategyName'               => 'StrategyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->effectiveAddrPoolGroupType) {
            $res['EffectiveAddrPoolGroupType'] = $this->effectiveAddrPoolGroupType;
        }
        if (null !== $this->effectiveAddrPoolType) {
            $res['EffectiveAddrPoolType'] = $this->effectiveAddrPoolType;
        }
        if (null !== $this->effectiveAddrPools) {
            $res['EffectiveAddrPools'] = null !== $this->effectiveAddrPools ? $this->effectiveAddrPools->toMap() : null;
        }
        if (null !== $this->effectiveLbaStrategy) {
            $res['EffectiveLbaStrategy'] = $this->effectiveLbaStrategy;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EffectiveAddrPoolGroupType'])) {
            $model->effectiveAddrPoolGroupType = $map['EffectiveAddrPoolGroupType'];
        }
        if (isset($map['EffectiveAddrPoolType'])) {
            $model->effectiveAddrPoolType = $map['EffectiveAddrPoolType'];
        }
        if (isset($map['EffectiveAddrPools'])) {
            $model->effectiveAddrPools = effectiveAddrPools::fromMap($map['EffectiveAddrPools']);
        }
        if (isset($map['EffectiveLbaStrategy'])) {
            $model->effectiveLbaStrategy = $map['EffectiveLbaStrategy'];
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
