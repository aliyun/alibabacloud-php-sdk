<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeTopSQLListShrinkRequest extends Model
{
    /**
     * @description The number of block index cache hits.
     *
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The SQL type.
     *
     * This parameter is required.
     * @example 2021-09-13T15:40:43Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The average number of logical reads of the SQL statement during the specified period of time.
     * > <br> A higher ratio of the number of logical reads to the number of returned rows indicates poorer filtering performance. General causes include non-standard content written by SQL statements, non-standard table indexes created, and non-standard SQL execution plans.
     * @example [dbName:sys]
     *
     * @var string
     */
    public $filterConditionShrink;

    /**
     * @description The number of failures.
     *
     * @example i-bp19y05uq6xpacyqnlrc
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description The queuing time, in ms.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of row cache hits.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The I/O wait time, in ms.
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $SQLId;

    /**
     * @description The number of retries.
     *
     * @example update
     *
     * @var string
     */
    public $searchKeyWord;

    /**
     * @description SQLID.
     *
     * @example cputime
     *
     * @var string
     */
    public $searchParameter;

    /**
     * @description The IP address of the client.
     *
     * @example >
     *
     * @var string
     */
    public $searchRule;

    /**
     * @description The number of Bloom filter cache hits.
     *
     * @example 0.01
     *
     * @var string
     */
    public $searchValue;

    /**
     * @description The number of rows read from the disk.
     *
     * @example cputime
     *
     * @var string
     */
    public $sortColumn;

    /**
     * @description The list of top SQL statements.
     *
     * @example desc
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The maximum response time, in ms.
     *
     * This parameter is required.
     * @example 2021-06-13T15:40:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The average CPU time, in ms.
     *
     * This parameter is required.
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
