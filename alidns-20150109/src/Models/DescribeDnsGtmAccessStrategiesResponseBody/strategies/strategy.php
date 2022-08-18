<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy\effectiveAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy\lines;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $effectiveAddrPoolGroupType;

    /**
     * @var string
     */
    public $effectiveAddrPoolType;

    /**
     * @var effectiveAddrPools
     */
    public $effectiveAddrPools;

    /**
     * @var string
     */
    public $effectiveLbaStrategy;

    /**
     * @var lines
     */
    public $lines;

    /**
     * @var string
     */
    public $strategyId;

    /**
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
