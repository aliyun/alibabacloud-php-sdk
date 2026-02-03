<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class StartNisTrafficRankingShrinkRequest extends Model
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
     * @var string
     */
    public $filterShrink;

    /**
     * @var string
     */
    public $groupByShrink;

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
        'filterShrink' => 'Filter',
        'groupByShrink' => 'GroupBy',
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

        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
        }

        if (null !== $this->groupByShrink) {
            $res['GroupBy'] = $this->groupByShrink;
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
            $model->filterShrink = $map['Filter'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupByShrink = $map['GroupBy'];
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
