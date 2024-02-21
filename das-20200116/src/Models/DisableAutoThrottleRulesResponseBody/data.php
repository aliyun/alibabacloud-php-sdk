<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoThrottleRulesResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoThrottleRulesResponseBody\data\configFailInstanceList;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoThrottleRulesResponseBody\data\configSuccessInstanceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of database instances for which the automatic SQL throttling feature failed to be disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $configFailInstanceCount;

    /**
     * @description The database instances for which the automatic SQL throttling feature failed to be disabled.
     *
     * @var configFailInstanceList[]
     */
    public $configFailInstanceList;

    /**
     * @description The number of database instances for which the automatic SQL throttling feature is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $configSuccessInstanceCount;

    /**
     * @description The database instances for which the automatic SQL throttling feature is disabled.
     *
     * @var configSuccessInstanceList[]
     */
    public $configSuccessInstanceList;

    /**
     * @description The total number of database instances.
     *
     * @example 2
     *
     * @var int
     */
    public $totalInstanceCount;
    protected $_name = [
        'configFailInstanceCount'    => 'ConfigFailInstanceCount',
        'configFailInstanceList'     => 'ConfigFailInstanceList',
        'configSuccessInstanceCount' => 'ConfigSuccessInstanceCount',
        'configSuccessInstanceList'  => 'ConfigSuccessInstanceList',
        'totalInstanceCount'         => 'TotalInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configFailInstanceCount) {
            $res['ConfigFailInstanceCount'] = $this->configFailInstanceCount;
        }
        if (null !== $this->configFailInstanceList) {
            $res['ConfigFailInstanceList'] = [];
            if (null !== $this->configFailInstanceList && \is_array($this->configFailInstanceList)) {
                $n = 0;
                foreach ($this->configFailInstanceList as $item) {
                    $res['ConfigFailInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->configSuccessInstanceCount) {
            $res['ConfigSuccessInstanceCount'] = $this->configSuccessInstanceCount;
        }
        if (null !== $this->configSuccessInstanceList) {
            $res['ConfigSuccessInstanceList'] = [];
            if (null !== $this->configSuccessInstanceList && \is_array($this->configSuccessInstanceList)) {
                $n = 0;
                foreach ($this->configSuccessInstanceList as $item) {
                    $res['ConfigSuccessInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalInstanceCount) {
            $res['TotalInstanceCount'] = $this->totalInstanceCount;
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
        if (isset($map['ConfigFailInstanceCount'])) {
            $model->configFailInstanceCount = $map['ConfigFailInstanceCount'];
        }
        if (isset($map['ConfigFailInstanceList'])) {
            if (!empty($map['ConfigFailInstanceList'])) {
                $model->configFailInstanceList = [];
                $n                             = 0;
                foreach ($map['ConfigFailInstanceList'] as $item) {
                    $model->configFailInstanceList[$n++] = null !== $item ? configFailInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConfigSuccessInstanceCount'])) {
            $model->configSuccessInstanceCount = $map['ConfigSuccessInstanceCount'];
        }
        if (isset($map['ConfigSuccessInstanceList'])) {
            if (!empty($map['ConfigSuccessInstanceList'])) {
                $model->configSuccessInstanceList = [];
                $n                                = 0;
                foreach ($map['ConfigSuccessInstanceList'] as $item) {
                    $model->configSuccessInstanceList[$n++] = null !== $item ? configSuccessInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalInstanceCount'])) {
            $model->totalInstanceCount = $map['TotalInstanceCount'];
        }

        return $model;
    }
}
