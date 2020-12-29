<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\effectiveAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\lines;
use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @var string
     */
    public $effectiveLbaStrategy;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $effectiveAddrPoolGroupType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var effectiveAddrPools[]
     */
    public $effectiveAddrPools;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $effectiveAddrPoolType;

    /**
     * @var lines[]
     */
    public $lines;
    protected $_name = [
        'effectiveLbaStrategy'       => 'EffectiveLbaStrategy',
        'strategyId'                 => 'StrategyId',
        'strategyName'               => 'StrategyName',
        'effectiveAddrPoolGroupType' => 'EffectiveAddrPoolGroupType',
        'createTime'                 => 'CreateTime',
        'effectiveAddrPools'         => 'EffectiveAddrPools',
        'createTimestamp'            => 'CreateTimestamp',
        'effectiveAddrPoolType'      => 'EffectiveAddrPoolType',
        'lines'                      => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveLbaStrategy) {
            $res['EffectiveLbaStrategy'] = $this->effectiveLbaStrategy;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->effectiveAddrPoolGroupType) {
            $res['EffectiveAddrPoolGroupType'] = $this->effectiveAddrPoolGroupType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->effectiveAddrPools) {
            $res['EffectiveAddrPools'] = [];
            if (null !== $this->effectiveAddrPools && \is_array($this->effectiveAddrPools)) {
                $n = 0;
                foreach ($this->effectiveAddrPools as $item) {
                    $res['EffectiveAddrPools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->effectiveAddrPoolType) {
            $res['EffectiveAddrPoolType'] = $this->effectiveAddrPoolType;
        }
        if (null !== $this->lines) {
            $res['Lines'] = [];
            if (null !== $this->lines && \is_array($this->lines)) {
                $n = 0;
                foreach ($this->lines as $item) {
                    $res['Lines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveLbaStrategy'])) {
            $model->effectiveLbaStrategy = $map['EffectiveLbaStrategy'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['EffectiveAddrPoolGroupType'])) {
            $model->effectiveAddrPoolGroupType = $map['EffectiveAddrPoolGroupType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EffectiveAddrPools'])) {
            if (!empty($map['EffectiveAddrPools'])) {
                $model->effectiveAddrPools = [];
                $n                         = 0;
                foreach ($map['EffectiveAddrPools'] as $item) {
                    $model->effectiveAddrPools[$n++] = null !== $item ? effectiveAddrPools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EffectiveAddrPoolType'])) {
            $model->effectiveAddrPoolType = $map['EffectiveAddrPoolType'];
        }
        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = [];
                $n            = 0;
                foreach ($map['Lines'] as $item) {
                    $model->lines[$n++] = null !== $item ? lines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
