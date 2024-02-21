<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetQueryOptimizeExecErrorStatsRequest extends Model
{
    /**
     * @description Specifies whether to sort the returned entries in ascending order. Default value: **true**. Valid values:
     *
     *   **true**: sorts the returned entries in ascending order.
     *   **false**: does not sort the returned entries in ascending order.
     *
     * @example true
     *
     * @var string
     */
    public $asc;

    /**
     * @description The name of the database to be queried.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbNames;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **PolarDBMySQL**
     *   **PostgreSQL**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance IDs. Separate multiple IDs with commas (,).
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The keywords of the SQL template. Separate multiple keywords with spaces.
     *
     * @example select update
     *
     * @var string
     */
    public $keywords;

    /**
     * @description The logical relationship between multiple keywords. Valid values:
     *
     *   **or**
     *   **and**
     *
     * @example or
     *
     * @var string
     */
    public $logicalOperator;

    /**
     * @description The field by which to sort the returned entries. Only error_count is supported, which specifies that the entries are sorted based on the number of failed executions.
     *
     * @example error_count
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region in which the instance resides. Valid values:
     *
     *   **cn-china**: Chinese mainland
     *   **cn-hongkong**: China (Hong Kong)
     *   **ap-southeast-1**: Singapore
     *
     * This parameter takes effect only if **InstanceIds** is left empty. If you leave **InstanceIds** empty, the system obtains data from the region set by **Region**. By default, Region is set to **cn-china**. If you specify **InstanceIds**, **Region** does not take effect and the system obtains data from the region in which the first specified instance resides.****
     *
     * >  Set this parameter to **cn-china** for the instances that are created in the regions in the Chinese mainland.
     * @example cn-china
     *
     * @var string
     */
    public $region;

    /**
     * @description The time range to query. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1642953600000
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'asc'             => 'Asc',
        'dbNames'         => 'DbNames',
        'engine'          => 'Engine',
        'instanceIds'     => 'InstanceIds',
        'keywords'        => 'Keywords',
        'logicalOperator' => 'LogicalOperator',
        'orderBy'         => 'OrderBy',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'region'          => 'Region',
        'time'            => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->logicalOperator) {
            $res['LogicalOperator'] = $this->logicalOperator;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryOptimizeExecErrorStatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['LogicalOperator'])) {
            $model->logicalOperator = $map['LogicalOperator'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
