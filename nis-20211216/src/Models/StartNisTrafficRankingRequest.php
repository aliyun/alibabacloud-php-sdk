<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\StartNisTrafficRankingRequest\filter;

class StartNisTrafficRankingRequest extends Model
{
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
     * @var string[]
     */
    public $groupBy;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

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
    public $sort;

    /**
     * @var int
     */
    public $storageInterval;

    /**
     * @var int
     */
    public $topN;

    /**
     * @var string
     */
    public $trafficAnalyzerId;

    /**
     * @var string
     */
    public $trafficScenario;

    /**
     * @var string
     */
    public $tupleDimension;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'filter' => 'Filter',
        'groupBy' => 'GroupBy',
        'language' => 'Language',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderBy' => 'OrderBy',
        'regionNo' => 'RegionNo',
        'sort' => 'Sort',
        'storageInterval' => 'StorageInterval',
        'topN' => 'TopN',
        'trafficAnalyzerId' => 'TrafficAnalyzerId',
        'trafficScenario' => 'TrafficScenario',
        'tupleDimension' => 'TupleDimension',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
            if (\is_array($this->groupBy)) {
                $res['GroupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['GroupBy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->storageInterval) {
            $res['StorageInterval'] = $this->storageInterval;
        }

        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }

        if (null !== $this->trafficAnalyzerId) {
            $res['TrafficAnalyzerId'] = $this->trafficAnalyzerId;
        }

        if (null !== $this->trafficScenario) {
            $res['TrafficScenario'] = $this->trafficScenario;
        }

        if (null !== $this->tupleDimension) {
            $res['TupleDimension'] = $this->tupleDimension;
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
            if (!empty($map['GroupBy'])) {
                $model->groupBy = [];
                $n1 = 0;
                foreach ($map['GroupBy'] as $item1) {
                    $model->groupBy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['StorageInterval'])) {
            $model->storageInterval = $map['StorageInterval'];
        }

        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }

        if (isset($map['TrafficAnalyzerId'])) {
            $model->trafficAnalyzerId = $map['TrafficAnalyzerId'];
        }

        if (isset($map['TrafficScenario'])) {
            $model->trafficScenario = $map['TrafficScenario'];
        }

        if (isset($map['TupleDimension'])) {
            $model->tupleDimension = $map['TupleDimension'];
        }

        return $model;
    }
}
