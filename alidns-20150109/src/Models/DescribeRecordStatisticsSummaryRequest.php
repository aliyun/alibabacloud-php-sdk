<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordStatisticsSummaryRequest extends Model
{
    /**
     * @description The domain name.
     *
     * @example dns-example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @description The end of the time range to query. Specify the time in the **YYYY-MM-DD** format.
     *
     * The default value is the day when you perform the operation.
     * @example 2019-07-04
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The keyword for searches in %KeyWord% mode. The value is not case-sensitive.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **100**. Minimum value: **1**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The search mode of the keyword. Valid values:
     *
     *   **LIKE**: fuzzy match (default).
     *   **EXACT**: exact match.
     *
     * @example EXACT
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description The beginning of the time range to query. Specify the time in the **YYYY-MM-DD** format.
     *
     * You can only query DNS records of the last 90 days.
     * @example 2019-07-04
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The threshold of query volume that can be obtained. You can also obtain data about a domain name with the query volume less than or equal to the threshold. For example, if you set this parameter to 100, you can query domain names with less than 100 queries.
     *
     * @example 12
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
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
     * @return DescribeRecordStatisticsSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
