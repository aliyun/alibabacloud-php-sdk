<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeOasSQLPlansRequest extends Model
{
    /**
     * @description Supported language. Valid values:
     * - en-US: English
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The name of the database.
     *
     * This parameter is required.
     * @example test_db
     *
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $dynamicSql;

    /**
     * @description The end time of querying the SQL execution plan.
     * This parameter is required.
     * @example 2023-04-12T05:38:38Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $planUnionHash;

    /**
     * @var bool
     */
    public $returnBriefInfo;

    /**
     * @description SQL ID.
     *
     * This parameter is required.
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The start time of querying the SQL execution plan.
     * This parameter is required.
     * @example 2023-04-12T04:38:38Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant.
     *
     * This parameter is required.
     * @example t4louaeei****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'dbName'          => 'DbName',
        'dynamicSql'      => 'DynamicSql',
        'endTime'         => 'EndTime',
        'instanceId'      => 'InstanceId',
        'planUnionHash'   => 'PlanUnionHash',
        'returnBriefInfo' => 'ReturnBriefInfo',
        'sqlId'           => 'SqlId',
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
        if (null !== $this->dynamicSql) {
            $res['DynamicSql'] = $this->dynamicSql;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->planUnionHash) {
            $res['PlanUnionHash'] = $this->planUnionHash;
        }
        if (null !== $this->returnBriefInfo) {
            $res['ReturnBriefInfo'] = $this->returnBriefInfo;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
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
     * @return DescribeOasSQLPlansRequest
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
        if (isset($map['DynamicSql'])) {
            $model->dynamicSql = $map['DynamicSql'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PlanUnionHash'])) {
            $model->planUnionHash = $map['PlanUnionHash'];
        }
        if (isset($map['ReturnBriefInfo'])) {
            $model->returnBriefInfo = $map['ReturnBriefInfo'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
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
