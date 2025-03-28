<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgQuerySensResultRequest extends Model
{
    /**
     * @var string
     */
    public $col;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderField;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $sensStatus;

    /**
     * @var string
     */
    public $sensitiveId;

    /**
     * @var string
     */
    public $sensitiveName;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'col' => 'Col',
        'dbType' => 'DbType',
        'level' => 'Level',
        'nodeName' => 'NodeName',
        'order' => 'Order',
        'orderField' => 'OrderField',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'projectName' => 'ProjectName',
        'schemaName' => 'SchemaName',
        'sensStatus' => 'SensStatus',
        'sensitiveId' => 'SensitiveId',
        'sensitiveName' => 'SensitiveName',
        'table' => 'Table',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
