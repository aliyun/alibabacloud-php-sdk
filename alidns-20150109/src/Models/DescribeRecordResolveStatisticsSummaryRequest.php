<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordResolveStatisticsSummaryRequest extends Model
{
    /**
     * @description The order in which you want to sort the query results. Valid values: DESC and ASC. DESC is the default value and indicates that the query results are sorted in descending order. ASC indicates that the query results are sorted in ascending order.
     *
     * @example DESC
     *
     * @var string
     */
    public $direction;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the domain name. The parameter value is not case-sensitive. Valid values:
     *
     * PUBLIC and CACHE. PUBLIC is the default value and indicates an authoritative domain name. CACHE indicates a cache-accelerated domain name.
     * @example PUBLIC
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The end time in the yyyy-MM-dd format, for example, 2023-03-13.
     *
     * @example 2023-03-29
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The keyword. The Keyword parameter is used together with the SearchMode parameter.
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
     * LIKE (default): fuzzy search. EXACT: exact match.
     * @example LIKE
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description The start time in the yyyy-MM-dd format, for example, 2023-03-01.
     *
     * @example 2023-03-29
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The threshold for the number of resolution requests. You can query the subdomain names at the specified quantity level of resolution requests and query the number of resolution requests for each subdomain name. For example, if you set this parameter to 100, you can obtain data about the subdomain names with less than 100 resolution requests.
     *
     * If you set this parameter to a value greater than 0, the data about the subdomain names whose number of resolution requests is less than or equal to the value of this parameter is obtained.
     * @example -1
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'direction'  => 'Direction',
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
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
     * @return DescribeRecordResolveStatisticsSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
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
