<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlowSQLListRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var mixed[]
     */
    public $filterCondition;

    /**
     * @var string
     */
    public $nodeIp;

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
    public $SQLId;

    /**
     * @var string
     */
    public $searchKeyWord;

    /**
     * @var string
     */
    public $searchParameter;

    /**
     * @var string
     */
    public $searchRule;

    /**
     * @var string
     */
    public $searchValue;

    /**
     * @var string
     */
    public $sortColumn;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
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
     * @return DescribeSlowSQLListRequest
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
