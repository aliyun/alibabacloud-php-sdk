<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkRankingRequest\filter;

class GetNisNetworkRankingRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var int
     */
    public $topN;

    /**
     * @var bool
     */
    public $useCrossAccount;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'beginTime' => 'BeginTime',
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'filter' => 'Filter',
        'groupBy' => 'GroupBy',
        'orderBy' => 'OrderBy',
        'regionNo' => 'RegionNo',
        'resourceType' => 'ResourceType',
        'sort' => 'Sort',
        'topN' => 'TopN',
        'useCrossAccount' => 'UseCrossAccount',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->filter)) {
                $res['Filter'] = [];
                $n1 = 0;
                foreach ($this->filter as $item1) {
                    $res['Filter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Filter'] as $item1) {
                    $model->filter[$n1] = filter::fromMap($item1);
                    ++$n1;
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
