<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class ListOnlineEvalTasksRequest extends Model
{
    /**
     * @description Search keyword. It will match on fields such as task name, application name (appName), task description, and evaluation metric name.
     *
     * @example foo
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The UTC end time of the search time range
     *
     * @example 2025-04-07 13:24:25
     * 2025-04-07
     *
     * @var string
     */
    public $maxTime;

    /**
     * @description The UTC start time of the search time range
     *
     * @example 2025-04-05 13:24:25
     * 2025-04-05
     *
     * @var string
     */
    public $minTime;

    /**
     * @description The current page number. Value range: integers greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, default is 10.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'keyword' => 'Keyword',
        'maxTime' => 'MaxTime',
        'minTime' => 'MinTime',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'sortOrder' => 'SortOrder',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->maxTime) {
            $res['MaxTime'] = $this->maxTime;
        }
        if (null !== $this->minTime) {
            $res['MinTime'] = $this->minTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOnlineEvalTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MaxTime'])) {
            $model->maxTime = $map['MaxTime'];
        }
        if (isset($map['MinTime'])) {
            $model->minTime = $map['MinTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
