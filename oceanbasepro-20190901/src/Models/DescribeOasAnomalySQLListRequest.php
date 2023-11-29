<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeOasAnomalySQLListRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     * - en: English
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The current page.
     *
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @description The name of the database.
     *
     * @example db_****
     *
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $dynamicSql;

    /**
     * @description The end time of the monitoring data.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 2023-04-12T05:38:38Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description All parameters are referenced by the symbol @. For a list of available parameters, refer to the returned parameters in [Query performance indicators of an SQL statement](https://en.oceanbase.com/docs/community-ocp-en-10000000000840290).
     *
     * @example @avgCpuTime > 20 and @executions > 100
     *
     * @var string
     */
    public $filterCondition;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $mergeDynamicSql;

    /**
     * @description The node IP.
     *
     * @example i-bp19y05uq6x*********
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description Page size.
     * - Default value: 1
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
    public $searchParam;

    /**
     * @description The search rule.
     * Valid values: "=", ">", ">=", "<", and "<="
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
     * @description SQL ID.
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description Max length of the returned SQL text.
     *
     * @example 65535
     *
     * @var int
     */
    public $sqlTextLength;

    /**
     * @description The start time of the monitoring data.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 2023-04-12T04:38:38Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant.
     *
     * @example t4louaeei****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'current'         => 'Current',
        'dbName'          => 'DbName',
        'dynamicSql'      => 'DynamicSql',
        'endTime'         => 'EndTime',
        'filterCondition' => 'FilterCondition',
        'instanceId'      => 'InstanceId',
        'mergeDynamicSql' => 'MergeDynamicSql',
        'nodeIp'          => 'NodeIp',
        'pageSize'        => 'PageSize',
        'searchKeyWord'   => 'SearchKeyWord',
        'searchParam'     => 'SearchParam',
        'searchRule'      => 'SearchRule',
        'searchValue'     => 'SearchValue',
        'sqlId'           => 'SqlId',
        'sqlTextLength'   => 'SqlTextLength',
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

    /**
     * @param array $map
     *
     * @return DescribeOasAnomalySQLListRequest
     */
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
