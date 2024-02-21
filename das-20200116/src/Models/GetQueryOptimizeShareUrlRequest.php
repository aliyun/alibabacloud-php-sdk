<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetQueryOptimizeShareUrlRequest extends Model
{
    /**
     * @description Specifies whether to sort the returned entries in ascending order. Default value: **true**. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
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
     *   **MySQL**: ApsaraDB RDS for MySQL
     *   **PolarDBMySQL**: PolarDB for MySQL
     *   **PostgreSQL**: ApsaraDB RDS for PostgreSQL
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance IDs. Separate multiple IDs with commas (,).
     *
     * @example rm-2ze1jdv45i7l6****
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
     * @description Specifies whether to query only SQL templates that need to be optimized. Default value: **false**. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $onlyOptimizedSql;

    /**
     * @description The field by which to sort the returned entries. Default value: **count**. Valid values:
     *
     *   **count**: the number of executions.
     *   **maxQueryTime**: the longest execution duration.
     *   **avgQueryTime**: the average execution duration.
     *   **maxLockTime**: the longest lock wait duration.
     *   **avgLockTime**: the average lock wait duration.
     *   **maxRowsExamined**: the largest number of scanned rows.
     *   **avgRowsExamined**: the average number of scanned rows.
     *   **maxRowsSent**: the largest number of returned rows.
     *   **avgRowsSent**: the average number of returned rows.
     *
     * @example count
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
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
     * >  If your instances reside in the regions in the Chinese mainland, set this parameter to **cn-china**.
     * @example cn-china
     *
     * @var string
     */
    public $region;

    /**
     * @description The tags that are used to filter SQL templates. Separate multiple tags with commas (,). For more information, see [Query governance](~~290038~~).
     *
     * @example DAS_NOT_IMPORTANT
     *
     * @var string
     */
    public $rules;

    /**
     * @description The SQL template IDs. You can call the [GetQueryOptimizeExecErrorStats](~~405261~~) operation to obtain the SQL template IDs.
     *
     * @example 6068ce044e3dc9b903979672fb0b69df,d12515c015fc9f41a0778a9e1de0****
     *
     * @var string
     */
    public $sqlIds;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $tagNames;

    /**
     * @description The date to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1642953600000
     *
     * @var int
     */
    public $time;

    /**
     * @description The account of the database to be queried.
     *
     * @example testUser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'asc'              => 'Asc',
        'dbNames'          => 'DbNames',
        'engine'           => 'Engine',
        'instanceIds'      => 'InstanceIds',
        'keywords'         => 'Keywords',
        'logicalOperator'  => 'LogicalOperator',
        'onlyOptimizedSql' => 'OnlyOptimizedSql',
        'orderBy'          => 'OrderBy',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
        'region'           => 'Region',
        'rules'            => 'Rules',
        'sqlIds'           => 'SqlIds',
        'tagNames'         => 'TagNames',
        'time'             => 'Time',
        'user'             => 'User',
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
        if (null !== $this->onlyOptimizedSql) {
            $res['OnlyOptimizedSql'] = $this->onlyOptimizedSql;
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
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }
        if (null !== $this->sqlIds) {
            $res['SqlIds'] = $this->sqlIds;
        }
        if (null !== $this->tagNames) {
            $res['TagNames'] = $this->tagNames;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryOptimizeShareUrlRequest
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
        if (isset($map['OnlyOptimizedSql'])) {
            $model->onlyOptimizedSql = $map['OnlyOptimizedSql'];
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
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }
        if (isset($map['SqlIds'])) {
            $model->sqlIds = $map['SqlIds'];
        }
        if (isset($map['TagNames'])) {
            $model->tagNames = $map['TagNames'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
