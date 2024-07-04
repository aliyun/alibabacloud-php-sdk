<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkRankingRequest\filter;
use AlibabaCloud\Tea\Model;

class GetNisNetworkRankingRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @example 1684373600099
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description This parameter is required.
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @example 1684379093000
     *
     * @var int
     */
    public $endTime;

    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @description This parameter is required.
     *
     * @example Protocol
     *
     * @var string
     */
    public $groupBy;

    /**
     * @description This parameter is required.
     *
     * @example bps
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description This parameter is required.
     *
     * @example AccessInternetIpV4
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @example 10
     *
     * @var int
     */
    public $topN;

    /**
     * @example false
     *
     * @var bool
     */
    public $useCrossAccount;
    protected $_name = [
        'accountIds'      => 'AccountIds',
        'beginTime'       => 'BeginTime',
        'direction'       => 'Direction',
        'endTime'         => 'EndTime',
        'filter'          => 'Filter',
        'groupBy'         => 'GroupBy',
        'orderBy'         => 'OrderBy',
        'regionNo'        => 'RegionNo',
        'resourceType'    => 'ResourceType',
        'sort'            => 'Sort',
        'topN'            => 'TopN',
        'useCrossAccount' => 'UseCrossAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }
        if (null !== $this->useCrossAccount) {
            $res['UseCrossAccount'] = $this->useCrossAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNisNetworkRankingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }
        if (isset($map['UseCrossAccount'])) {
            $model->useCrossAccount = $map['UseCrossAccount'];
        }

        return $model;
    }
}
