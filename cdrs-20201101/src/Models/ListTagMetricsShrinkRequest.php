<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListTagMetricsShrinkRequest extends Model
{
    /**
     * @example day
     *
     * @var string
     */
    public $aggregateType;

    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 2021-01-21 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 2021-01-21 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example ["tag_corp_total_personnum"]
     *
     * @var string
     */
    public $tagCodeShrink;
    protected $_name = [
        'aggregateType' => 'AggregateType',
        'corpId'        => 'CorpId',
        'endTime'       => 'EndTime',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'startTime'     => 'StartTime',
        'tagCodeShrink' => 'TagCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateType) {
            $res['AggregateType'] = $this->aggregateType;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->tagCodeShrink) {
            $res['TagCode'] = $this->tagCodeShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagMetricsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateType'])) {
            $model->aggregateType = $map['AggregateType'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['TagCode'])) {
            $model->tagCodeShrink = $map['TagCode'];
        }

        return $model;
    }
}
