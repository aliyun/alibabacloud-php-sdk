<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeAnomalySQLListRequest extends Model
{
    /**
     * @description The search value.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description {
     * }
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description zh-CN
     *
     * @example 2021-09-13T15:40:43Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of the page to return.
     * - Default value: 1
     * @example {
     * }
     * @var mixed[]
     */
    public $filterCondition;

    /**
     * @description The number of rows to return on each page.
     * - Default value: 10
     * @example i-bp19y05uq6xpacyqnlrc
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description desc
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The start time of the time range for querying suspicious SQL statements.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 1
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $SQLId;

    /**
     * @description The search keyword.
     *
     * @example update
     *
     * @var string
     */
    public $searchKeyWord;

    /**
     * @description The ID of the tenant.
     *
     * @example cputime
     *
     * @var string
     */
    public $searchParameter;

    /**
     * @description Utilization above threshold
     *
     * @example >
     *
     * @var string
     */
    public $searchRule;

    /**
     * @description 10
     *
     * @example 0.01
     *
     * @var string
     */
    public $searchValue;

    /**
     * @description The end time of the time range for querying suspicious SQL statements.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example cputime
     *
     * @var string
     */
    public $sortColumn;

    /**
     * @description The request time, in ms.
     *
     * @example desc
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The total count.
     *
     * @example 2021-06-13T15:40:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Alibaba Cloud CLI
     *
     * @example t2mr3oae0****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'dbName'          => 'DbName',
        'endTime'         => 'EndTime',
        'filterCondition' => 'FilterCondition',
        'nodeIp'          => 'NodeIp',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'SQLId'           => 'SQLId',
        'searchKeyWord'   => 'SearchKeyWord',
        'searchParameter' => 'SearchParameter',
        'searchRule'      => 'SearchRule',
        'searchValue'     => 'SearchValue',
        'sortColumn'      => 'SortColumn',
        'sortOrder'       => 'SortOrder',
        'startTime'       => 'StartTime',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filterCondition) {
            $res['FilterCondition'] = $this->filterCondition;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->searchKeyWord) {
            $res['SearchKeyWord'] = $this->searchKeyWord;
        }
        if (null !== $this->searchParameter) {
            $res['SearchParameter'] = $this->searchParameter;
        }
        if (null !== $this->searchRule) {
            $res['SearchRule'] = $this->searchRule;
        }
        if (null !== $this->searchValue) {
            $res['SearchValue'] = $this->searchValue;
        }
        if (null !== $this->sortColumn) {
            $res['SortColumn'] = $this->sortColumn;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnomalySQLListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FilterCondition'])) {
            $model->filterCondition = $map['FilterCondition'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
        }
        if (isset($map['SearchKeyWord'])) {
            $model->searchKeyWord = $map['SearchKeyWord'];
        }
        if (isset($map['SearchParameter'])) {
            $model->searchParameter = $map['SearchParameter'];
        }
        if (isset($map['SearchRule'])) {
            $model->searchRule = $map['SearchRule'];
        }
        if (isset($map['SearchValue'])) {
            $model->searchValue = $map['SearchValue'];
        }
        if (isset($map['SortColumn'])) {
            $model->sortColumn = $map['SortColumn'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
