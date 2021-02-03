<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponse\strategies;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponse\strategies\strategy\effectiveAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponse\strategies\strategy\lines;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
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
     * @var string
     */
    public $effectiveLbaStrategy;

    /**
     * @var lines
     */
    public $lines;

    /**
     * @var effectiveAddrPools
     */
    public $effectiveAddrPools;
    protected $_name = [
        'strategyId'                 => 'StrategyId',
        'strategyName'               => 'StrategyName',
        'createTime'                 => 'CreateTime',
        'createTimestamp'            => 'CreateTimestamp',
        'effectiveAddrPoolGroupType' => 'EffectiveAddrPoolGroupType',
        'effectiveAddrPoolType'      => 'EffectiveAddrPoolType',
        'effectiveLbaStrategy'       => 'EffectiveLbaStrategy',
        'lines'                      => 'Lines',
        'effectiveAddrPools'         => 'EffectiveAddrPools',
    ];

    public function validate()
    {
        Model::validateRequired('strategyId', $this->strategyId, true);
        Model::validateRequired('strategyName', $this->strategyName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('effectiveAddrPoolGroupType', $this->effectiveAddrPoolGroupType, true);
        Model::validateRequired('effectiveAddrPoolType', $this->effectiveAddrPoolType, true);
        Model::validateRequired('effectiveLbaStrategy', $this->effectiveLbaStrategy, true);
        Model::validateRequired('lines', $this->lines, true);
        Model::validateRequired('effectiveAddrPools', $this->effectiveAddrPools, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
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
        if (null !== $this->effectiveLbaStrategy) {
            $res['EffectiveLbaStrategy'] = $this->effectiveLbaStrategy;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }
        if (null !== $this->effectiveAddrPools) {
            $res['EffectiveAddrPools'] = null !== $this->effectiveAddrPools ? $this->effectiveAddrPools->toMap() : null;
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
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
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
        if (isset($map['EffectiveLbaStrategy'])) {
            $model->effectiveLbaStrategy = $map['EffectiveLbaStrategy'];
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }
        if (isset($map['EffectiveAddrPools'])) {
            $model->effectiveAddrPools = effectiveAddrPools::fromMap($map['EffectiveAddrPools']);
        }

        return $model;
    }
}
