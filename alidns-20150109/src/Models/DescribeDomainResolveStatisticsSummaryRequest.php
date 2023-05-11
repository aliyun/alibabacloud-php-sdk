<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainResolveStatisticsSummaryRequest extends Model
{
    /**
     * @description The order in which you want to sort the query results. Valid values: DESC and ASC. DESC indicates that the query results are sorted in descending order. ASC indicates that the query results are sorted in ascending order.
     *
     * @example DESC
     *
     * @var string
     */
    public $direction;

    /**
     * @description The end time in the yyyy-MM-dd format, for example, 2023-03-13.
     *
     * @example 2023-03-01
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The keyword. The Keyword parameter must be used together with the SearchMode parameter.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language used. Valid values: zh, en, and ja.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The search mode of the keyword. Valid values:
     *
     * LIKE and EXACT. LIKE is the default value and indicates the fuzzy search mode. EXACT indicates the exact match mode.
     * @example EXACT
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description The start time in the yyyy-MM-dd format, for example, 2023-03-01.
     *
     * @example 2023-03-01
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The threshold for the number of resolution requests. You can query the paid domain names at the specified quantity level of resolution requests and query the number of resolution requests. For example, if you set this parameter to 100, you can obtain data about the paid domain names with less than 100 resolution requests. If you do not specify this parameter, the data about the paid domain names that have resolution requests is obtained. If you set this parameter to a value less than 0, the data about all paid domain names is obtained. If you set this parameter to 0, the data about the paid domain names that do not have resolution requests is obtained. If you set this parameter to a value greater than 0, the data about the paid domain names whose number of resolution requests is less than or equal to the value of this parameter is obtained.
     *
     * @example -1
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'direction'  => 'Direction',
        'endDate'    => 'EndDate',
        'keyword'    => 'Keyword',
        'lang'       => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'searchMode' => 'SearchMode',
        'startDate'  => 'StartDate',
        'threshold'  => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainResolveStatisticsSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
