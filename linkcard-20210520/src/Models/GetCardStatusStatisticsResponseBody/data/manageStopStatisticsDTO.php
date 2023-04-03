<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardStatusStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class manageStopStatisticsDTO extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $poolCount;

    /**
     * @example 30
     *
     * @var int
     */
    public $sameFlowCardCount;

    /**
     * @example 20
     *
     * @var int
     */
    public $singleCardCount;

    /**
     * @example 60
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'poolCount'         => 'PoolCount',
        'sameFlowCardCount' => 'SameFlowCardCount',
        'singleCardCount'   => 'SingleCardCount',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poolCount) {
            $res['PoolCount'] = $this->poolCount;
        }
        if (null !== $this->sameFlowCardCount) {
            $res['SameFlowCardCount'] = $this->sameFlowCardCount;
        }
        if (null !== $this->singleCardCount) {
            $res['SingleCardCount'] = $this->singleCardCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manageStopStatisticsDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoolCount'])) {
            $model->poolCount = $map['PoolCount'];
        }
        if (isset($map['SameFlowCardCount'])) {
            $model->sameFlowCardCount = $map['SameFlowCardCount'];
        }
        if (isset($map['SingleCardCount'])) {
            $model->singleCardCount = $map['SingleCardCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
