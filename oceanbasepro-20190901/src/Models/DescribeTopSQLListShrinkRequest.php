<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeTopSQLListShrinkRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The end time of the time range for querying TOP SQL statements.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 2021-09-13T15:40:43Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The filter condition.
     *
     * @example [dbName:sys]
     *
     * @var string
     */
    public $filterConditionShrink;

    /**
     * @description The IP address of the node.
     *
     * @example i-bp19y05uq6xpacyqnlrc
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description The number of the page to return.
     * - Default value: 1
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of rows to return on each page.
     * - Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description SQLID.
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
     * @description The search parameter.
     *
     * @example cputime
     *
     * @var string
     */
    public $searchParameter;

    /**
     * @description The search rule.
     *
     * @example >
     *
     * @var string
     */
    public $searchRule;

    /**
     * @description The search value.
     *
     * @example 0.01
     *
     * @var string
     */
    public $searchValue;

    /**
     * @description The sorted column.
     *
     * @example cputime
     *
     * @var string
     */
    public $sortColumn;

    /**
     * @description The sorting rule.
     *
     * @example desc
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The start time of the time range for querying TOP SQL statements.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 2021-06-13T15:40:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant.
     *
     * @example t2mr3oae0****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'dbName'                => 'DbName',
        'endTime'               => 'EndTime',
        'filterConditionShrink' => 'FilterCondition',
        'nodeIp'                => 'NodeIp',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'SQLId'                 => 'SQLId',
        'searchKeyWord'         => 'SearchKeyWord',
        'searchParameter'       => 'SearchParameter',
        'searchRule'            => 'SearchRule',
        'searchValue'           => 'SearchValue',
        'sortColumn'            => 'SortColumn',
        'sortOrder'             => 'SortOrder',
        'startTime'             => 'StartTime',
        'tenantId'              => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filterConditionShrink) {
            $res['FilterCondition'] = $this->filterConditionShrink;
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
     * @return DescribeTopSQLListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FilterCondition'])) {
            $model->filterConditionShrink = $map['FilterCondition'];
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
