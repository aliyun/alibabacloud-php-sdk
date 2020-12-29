<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmAccessStrategyRequest\defaultAddrPool;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmAccessStrategyRequest\failoverAddrPool;
use AlibabaCloud\Tea\Model;

class UpdateDnsGtmAccessStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

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
    public $lines;

    /**
     * @var string
     */
    public $defaultAddrPoolType;

    /**
     * @var string
     */
    public $defaultLbaStrategy;

    /**
     * @var int
     */
    public $defaultMinAvailableAddrNum;

    /**
     * @var int
     */
    public $defaultMaxReturnAddrNum;

    /**
     * @var string
     */
    public $defaultLatencyOptimization;

    /**
     * @var string
     */
    public $failoverAddrPoolType;

    /**
     * @var string
     */
    public $failoverLbaStrategy;

    /**
     * @var int
     */
    public $failoverMinAvailableAddrNum;

    /**
     * @var int
     */
    public $failoverMaxReturnAddrNum;

    /**
     * @var string
     */
    public $failoverLatencyOptimization;

    /**
     * @var defaultAddrPool[]
     */
    public $defaultAddrPool;

    /**
     * @var failoverAddrPool[]
     */
    public $failoverAddrPool;
    protected $_name = [
        'lang'                        => 'Lang',
        'userClientIp'                => 'UserClientIp',
        'strategyId'                  => 'StrategyId',
        'strategyName'                => 'StrategyName',
        'lines'                       => 'Lines',
        'defaultAddrPoolType'         => 'DefaultAddrPoolType',
        'defaultLbaStrategy'          => 'DefaultLbaStrategy',
        'defaultMinAvailableAddrNum'  => 'DefaultMinAvailableAddrNum',
        'defaultMaxReturnAddrNum'     => 'DefaultMaxReturnAddrNum',
        'defaultLatencyOptimization'  => 'DefaultLatencyOptimization',
        'failoverAddrPoolType'        => 'FailoverAddrPoolType',
        'failoverLbaStrategy'         => 'FailoverLbaStrategy',
        'failoverMinAvailableAddrNum' => 'FailoverMinAvailableAddrNum',
        'failoverMaxReturnAddrNum'    => 'FailoverMaxReturnAddrNum',
        'failoverLatencyOptimization' => 'FailoverLatencyOptimization',
        'defaultAddrPool'             => 'DefaultAddrPool',
        'failoverAddrPool'            => 'FailoverAddrPool',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->defaultAddrPoolType) {
            $res['DefaultAddrPoolType'] = $this->defaultAddrPoolType;
        }
        if (null !== $this->defaultLbaStrategy) {
            $res['DefaultLbaStrategy'] = $this->defaultLbaStrategy;
        }
        if (null !== $this->defaultMinAvailableAddrNum) {
            $res['DefaultMinAvailableAddrNum'] = $this->defaultMinAvailableAddrNum;
        }
        if (null !== $this->defaultMaxReturnAddrNum) {
            $res['DefaultMaxReturnAddrNum'] = $this->defaultMaxReturnAddrNum;
        }
        if (null !== $this->defaultLatencyOptimization) {
            $res['DefaultLatencyOptimization'] = $this->defaultLatencyOptimization;
        }
        if (null !== $this->failoverAddrPoolType) {
            $res['FailoverAddrPoolType'] = $this->failoverAddrPoolType;
        }
        if (null !== $this->failoverLbaStrategy) {
            $res['FailoverLbaStrategy'] = $this->failoverLbaStrategy;
        }
        if (null !== $this->failoverMinAvailableAddrNum) {
            $res['FailoverMinAvailableAddrNum'] = $this->failoverMinAvailableAddrNum;
        }
        if (null !== $this->failoverMaxReturnAddrNum) {
            $res['FailoverMaxReturnAddrNum'] = $this->failoverMaxReturnAddrNum;
        }
        if (null !== $this->failoverLatencyOptimization) {
            $res['FailoverLatencyOptimization'] = $this->failoverLatencyOptimization;
        }
        if (null !== $this->defaultAddrPool) {
            $res['DefaultAddrPool'] = [];
            if (null !== $this->defaultAddrPool && \is_array($this->defaultAddrPool)) {
                $n = 0;
                foreach ($this->defaultAddrPool as $item) {
                    $res['DefaultAddrPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDnsGtmAccessStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }
        if (isset($map['DefaultAddrPoolType'])) {
            $model->defaultAddrPoolType = $map['DefaultAddrPoolType'];
        }
        if (isset($map['DefaultLbaStrategy'])) {
            $model->defaultLbaStrategy = $map['DefaultLbaStrategy'];
        }
        if (isset($map['DefaultMinAvailableAddrNum'])) {
            $model->defaultMinAvailableAddrNum = $map['DefaultMinAvailableAddrNum'];
        }
        if (isset($map['DefaultMaxReturnAddrNum'])) {
            $model->defaultMaxReturnAddrNum = $map['DefaultMaxReturnAddrNum'];
        }
        if (isset($map['DefaultLatencyOptimization'])) {
            $model->defaultLatencyOptimization = $map['DefaultLatencyOptimization'];
        }
        if (isset($map['FailoverAddrPoolType'])) {
            $model->failoverAddrPoolType = $map['FailoverAddrPoolType'];
        }
        if (isset($map['FailoverLbaStrategy'])) {
            $model->failoverLbaStrategy = $map['FailoverLbaStrategy'];
        }
        if (isset($map['FailoverMinAvailableAddrNum'])) {
            $model->failoverMinAvailableAddrNum = $map['FailoverMinAvailableAddrNum'];
        }
        if (isset($map['FailoverMaxReturnAddrNum'])) {
            $model->failoverMaxReturnAddrNum = $map['FailoverMaxReturnAddrNum'];
        }
        if (isset($map['FailoverLatencyOptimization'])) {
            $model->failoverLatencyOptimization = $map['FailoverLatencyOptimization'];
        }
        if (isset($map['DefaultAddrPool'])) {
            if (!empty($map['DefaultAddrPool'])) {
                $model->defaultAddrPool = [];
                $n                      = 0;
                foreach ($map['DefaultAddrPool'] as $item) {
                    $model->defaultAddrPool[$n++] = null !== $item ? defaultAddrPool::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailoverAddrPool'])) {
            if (!empty($map['FailoverAddrPool'])) {
                $model->failoverAddrPool = [];
                $n                       = 0;
                foreach ($map['FailoverAddrPool'] as $item) {
                    $model->failoverAddrPool[$n++] = null !== $item ? failoverAddrPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
