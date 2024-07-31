<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgQuerySensResultRequest extends Model
{
    /**
     * @description The name of the field.
     *
     * @example col
     *
     * @var string
     */
    public $col;

    /**
     * @description The type of the database. Valid values:
     *
     *   **ODPS.ODPS**
     *   **HOLO.POSTGRES**
     *   **EMR**
     *
     * @example ODPS.ODPS
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The sensitivity level of the field.
     *
     * @example 3
     *
     * @var string
     */
    public $level;

    /**
     * @description The name of a data category.
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The sorting method.
     *
     *   DESC
     *   ASC
     *
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @description The field used for sorting.
     *
     *   gmt_create
     *   gmt_modified
     *
     * @example gmt_create
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 20.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to obtain the workspace name.
     *
     * @example project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the schema.
     *
     * @example schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The sensitivity status of the field.
     *
     *   1: indicates sensitive.
     *   \\-1: indicates non-sensitive.
     *
     * @example 1
     *
     * @var string
     */
    public $sensStatus;

    /**
     * @description The sensitive field ID.
     *
     * @example 10241024
     *
     * @var string
     */
    public $sensitiveId;

    /**
     * @description The name of the sensitive field.
     *
     * @var string
     */
    public $sensitiveName;

    /**
     * @description The name of the table.
     *
     * @example table
     *
     * @var string
     */
    public $table;

    /**
     * @description The tenant ID. To obtain the tenant ID, perform the following steps: Log on to the [DataWorks console](https://workbench.data.aliyun.com/console). Find your workspace and go to the DataStudio page. On the DataStudio page, click the logon username in the upper-right corner and click User Info in the Menu section.
     *
     * This parameter is required.
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'col'           => 'Col',
        'dbType'        => 'DbType',
        'level'         => 'Level',
        'nodeName'      => 'NodeName',
        'order'         => 'Order',
        'orderField'    => 'OrderField',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'projectName'   => 'ProjectName',
        'schemaName'    => 'SchemaName',
        'sensStatus'    => 'SensStatus',
        'sensitiveId'   => 'SensitiveId',
        'sensitiveName' => 'SensitiveName',
        'table'         => 'Table',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->col) {
            $res['Col'] = $this->col;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->sensStatus) {
            $res['SensStatus'] = $this->sensStatus;
        }
        if (null !== $this->sensitiveId) {
            $res['SensitiveId'] = $this->sensitiveId;
        }
        if (null !== $this->sensitiveName) {
            $res['SensitiveName'] = $this->sensitiveName;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgQuerySensResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Col'])) {
            $model->col = $map['Col'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SensStatus'])) {
            $model->sensStatus = $map['SensStatus'];
        }
        if (isset($map['SensitiveId'])) {
            $model->sensitiveId = $map['SensitiveId'];
        }
        if (isset($map['SensitiveName'])) {
            $model->sensitiveName = $map['SensitiveName'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
