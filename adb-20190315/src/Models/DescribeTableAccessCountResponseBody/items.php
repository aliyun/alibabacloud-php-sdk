<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableAccessCountResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $accessCount;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $reportDate;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableSchema;
    protected $_name = [
        'accessCount'  => 'AccessCount',
        'instanceName' => 'InstanceName',
        'reportDate'   => 'ReportDate',
        'tableName'    => 'TableName',
        'tableSchema'  => 'TableSchema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessCount) {
            $res['AccessCount'] = $this->accessCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->reportDate) {
            $res['ReportDate'] = $this->reportDate;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableSchema) {
            $res['TableSchema'] = $this->tableSchema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessCount'])) {
            $model->accessCount = $map['AccessCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ReportDate'])) {
            $model->reportDate = $map['ReportDate'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableSchema'])) {
            $model->tableSchema = $map['TableSchema'];
        }

        return $model;
    }
}
