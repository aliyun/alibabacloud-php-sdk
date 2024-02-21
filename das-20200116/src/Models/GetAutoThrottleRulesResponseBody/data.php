<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesResponseBody\data\enableAutoThrottleList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesResponseBody\data\turnOffAutoThrottleList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of database instances for which the automatic SQL throttling feature is currently enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enableAutoThrottleCount;

    /**
     * @description The database instances for which the automatic SQL throttling feature is currently enabled.
     *
     * @var enableAutoThrottleList[]
     */
    public $enableAutoThrottleList;

    /**
     * @description The number of database instances that do not exist or for which the automatic SQL throttling feature has never been enabled.
     *
     * >  If a database instance does not exist, the instance has been released or the specified instance ID is invalid.
     * @example 1
     *
     * @var int
     */
    public $neverEnableAutoThrottleOrReleasedInstanceCount;

    /**
     * @description The number of database instances that do not exist or for which the automatic SQL throttling feature has never been enabled.
     *
     * >  If a database instance does not exist, the instance has been released or the specified instance ID is invalid.
     * @var string[]
     */
    public $neverEnableAutoThrottleOrReleasedInstanceIdList;

    /**
     * @description The number of databases for which the automatic SQL throttling feature has been enabled.
     *
     * @example 3
     *
     * @var int
     */
    public $totalAutoThrottleRulesCount;

    /**
     * @description The number of database instances for which the automatic SQL throttling feature was once enabled but is currently disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $turnOffAutoThrottleCount;

    /**
     * @description The database instances for which the automatic SQL throttling feature was once enabled but is currently disabled.
     *
     * @var turnOffAutoThrottleList[]
     */
    public $turnOffAutoThrottleList;
    protected $_name = [
        'enableAutoThrottleCount'                         => 'EnableAutoThrottleCount',
        'enableAutoThrottleList'                          => 'EnableAutoThrottleList',
        'neverEnableAutoThrottleOrReleasedInstanceCount'  => 'NeverEnableAutoThrottleOrReleasedInstanceCount',
        'neverEnableAutoThrottleOrReleasedInstanceIdList' => 'NeverEnableAutoThrottleOrReleasedInstanceIdList',
        'totalAutoThrottleRulesCount'                     => 'TotalAutoThrottleRulesCount',
        'turnOffAutoThrottleCount'                        => 'TurnOffAutoThrottleCount',
        'turnOffAutoThrottleList'                         => 'TurnOffAutoThrottleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAutoThrottleCount) {
            $res['EnableAutoThrottleCount'] = $this->enableAutoThrottleCount;
        }
        if (null !== $this->enableAutoThrottleList) {
            $res['EnableAutoThrottleList'] = [];
            if (null !== $this->enableAutoThrottleList && \is_array($this->enableAutoThrottleList)) {
                $n = 0;
                foreach ($this->enableAutoThrottleList as $item) {
                    $res['EnableAutoThrottleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->neverEnableAutoThrottleOrReleasedInstanceCount) {
            $res['NeverEnableAutoThrottleOrReleasedInstanceCount'] = $this->neverEnableAutoThrottleOrReleasedInstanceCount;
        }
        if (null !== $this->neverEnableAutoThrottleOrReleasedInstanceIdList) {
            $res['NeverEnableAutoThrottleOrReleasedInstanceIdList'] = $this->neverEnableAutoThrottleOrReleasedInstanceIdList;
        }
        if (null !== $this->totalAutoThrottleRulesCount) {
            $res['TotalAutoThrottleRulesCount'] = $this->totalAutoThrottleRulesCount;
        }
        if (null !== $this->turnOffAutoThrottleCount) {
            $res['TurnOffAutoThrottleCount'] = $this->turnOffAutoThrottleCount;
        }
        if (null !== $this->turnOffAutoThrottleList) {
            $res['TurnOffAutoThrottleList'] = [];
            if (null !== $this->turnOffAutoThrottleList && \is_array($this->turnOffAutoThrottleList)) {
                $n = 0;
                foreach ($this->turnOffAutoThrottleList as $item) {
                    $res['TurnOffAutoThrottleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAutoThrottleCount'])) {
            $model->enableAutoThrottleCount = $map['EnableAutoThrottleCount'];
        }
        if (isset($map['EnableAutoThrottleList'])) {
            if (!empty($map['EnableAutoThrottleList'])) {
                $model->enableAutoThrottleList = [];
                $n                             = 0;
                foreach ($map['EnableAutoThrottleList'] as $item) {
                    $model->enableAutoThrottleList[$n++] = null !== $item ? enableAutoThrottleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NeverEnableAutoThrottleOrReleasedInstanceCount'])) {
            $model->neverEnableAutoThrottleOrReleasedInstanceCount = $map['NeverEnableAutoThrottleOrReleasedInstanceCount'];
        }
        if (isset($map['NeverEnableAutoThrottleOrReleasedInstanceIdList'])) {
            if (!empty($map['NeverEnableAutoThrottleOrReleasedInstanceIdList'])) {
                $model->neverEnableAutoThrottleOrReleasedInstanceIdList = $map['NeverEnableAutoThrottleOrReleasedInstanceIdList'];
            }
        }
        if (isset($map['TotalAutoThrottleRulesCount'])) {
            $model->totalAutoThrottleRulesCount = $map['TotalAutoThrottleRulesCount'];
        }
        if (isset($map['TurnOffAutoThrottleCount'])) {
            $model->turnOffAutoThrottleCount = $map['TurnOffAutoThrottleCount'];
        }
        if (isset($map['TurnOffAutoThrottleList'])) {
            if (!empty($map['TurnOffAutoThrottleList'])) {
                $model->turnOffAutoThrottleList = [];
                $n                              = 0;
                foreach ($map['TurnOffAutoThrottleList'] as $item) {
                    $model->turnOffAutoThrottleList[$n++] = null !== $item ? turnOffAutoThrottleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
