<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class ListPersonVisitCountRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $aggregateType;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $timeAggregateType;

    /**
     * @var int
     */
    public $minVal;

    /**
     * @var int
     */
    public $maxVal;

    /**
     * @var string
     */
    public $countType;
    protected $_name = [
        'corpId'            => 'CorpId',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'startTime'         => 'StartTime',
        'endTime'           => 'EndTime',
        'aggregateType'     => 'AggregateType',
        'tagCode'           => 'TagCode',
        'timeAggregateType' => 'TimeAggregateType',
        'minVal'            => 'MinVal',
        'maxVal'            => 'MaxVal',
        'countType'         => 'CountType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->aggregateType) {
            $res['AggregateType'] = $this->aggregateType;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->timeAggregateType) {
            $res['TimeAggregateType'] = $this->timeAggregateType;
        }
        if (null !== $this->minVal) {
            $res['MinVal'] = $this->minVal;
        }
        if (null !== $this->maxVal) {
            $res['MaxVal'] = $this->maxVal;
        }
        if (null !== $this->countType) {
            $res['CountType'] = $this->countType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPersonVisitCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['AggregateType'])) {
            $model->aggregateType = $map['AggregateType'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TimeAggregateType'])) {
            $model->timeAggregateType = $map['TimeAggregateType'];
        }
        if (isset($map['MinVal'])) {
            $model->minVal = $map['MinVal'];
        }
        if (isset($map['MaxVal'])) {
            $model->maxVal = $map['MaxVal'];
        }
        if (isset($map['CountType'])) {
            $model->countType = $map['CountType'];
        }

        return $model;
    }
}
