<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeOasAnomalySQLListRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $dynamicSql;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $filterCondition;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $mergeDynamicSql;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchKeyWord;

    /**
     * @var string
     */
    public $searchParam;

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
    public $sqlId;

    /**
     * @var int
     */
    public $sqlTextLength;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'current' => 'Current',
        'dbName' => 'DbName',
        'dynamicSql' => 'DynamicSql',
        'endTime' => 'EndTime',
        'filterCondition' => 'FilterCondition',
        'instanceId' => 'InstanceId',
        'mergeDynamicSql' => 'MergeDynamicSql',
        'nodeIp' => 'NodeIp',
        'pageSize' => 'PageSize',
        'searchKeyWord' => 'SearchKeyWord',
        'searchParam' => 'SearchParam',
        'searchRule' => 'SearchRule',
        'searchValue' => 'SearchValue',
        'sqlId' => 'SqlId',
        'sqlTextLength' => 'SqlTextLength',
        'startTime' => 'StartTime',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dynamicSql) {
            $res['DynamicSql'] = $this->dynamicSql;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->filterCondition) {
            $res['FilterCondition'] = $this->filterCondition;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mergeDynamicSql) {
            $res['MergeDynamicSql'] = $this->mergeDynamicSql;
        }

        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchKeyWord) {
            $res['SearchKeyWord'] = $this->searchKeyWord;
        }

        if (null !== $this->searchParam) {
            $res['SearchParam'] = $this->searchParam;
        }

        if (null !== $this->searchRule) {
            $res['SearchRule'] = $this->searchRule;
        }

        if (null !== $this->searchValue) {
            $res['SearchValue'] = $this->searchValue;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlTextLength) {
            $res['SqlTextLength'] = $this->sqlTextLength;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DynamicSql'])) {
            $model->dynamicSql = $map['DynamicSql'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FilterCondition'])) {
            $model->filterCondition = $map['FilterCondition'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MergeDynamicSql'])) {
            $model->mergeDynamicSql = $map['MergeDynamicSql'];
        }

        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchKeyWord'])) {
            $model->searchKeyWord = $map['SearchKeyWord'];
        }

        if (isset($map['SearchParam'])) {
            $model->searchParam = $map['SearchParam'];
        }

        if (isset($map['SearchRule'])) {
            $model->searchRule = $map['SearchRule'];
        }

        if (isset($map['SearchValue'])) {
            $model->searchValue = $map['SearchValue'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlTextLength'])) {
            $model->sqlTextLength = $map['SqlTextLength'];
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
