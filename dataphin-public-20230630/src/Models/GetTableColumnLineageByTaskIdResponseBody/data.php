<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableColumnLineageByTaskIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $inputBizUnitId;

    /**
     * @example odps.123.test_project.input_table.id
     *
     * @var string
     */
    public $inputColumnId;

    /**
     * @example id
     *
     * @var string
     */
    public $inputColumnName;

    /**
     * @example 123
     *
     * @var int
     */
    public $inputDataSourceId;

    /**
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $inputDataSourceType;

    /**
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $inputDbType;

    /**
     * @example DEV
     *
     * @var string
     */
    public $inputEnv;

    /**
     * @example 123
     *
     * @var int
     */
    public $inputProjectId;

    /**
     * @var bool
     */
    public $inputTableDeleted;

    /**
     * @example odps.123.test_project.order
     *
     * @var string
     */
    public $inputTableId;

    /**
     * @example order
     *
     * @var string
     */
    public $inputTableName;

    /**
     * @example PHYSICAL_TABLE
     *
     * @var string
     */
    public $inputTableType;

    /**
     * @example 123
     *
     * @var int
     */
    public $outputBizUnitId;

    /**
     * @example odps.123.test_project.input_table.id
     *
     * @var string
     */
    public $outputColumnId;

    /**
     * @example id
     *
     * @var string
     */
    public $outputColumnName;

    /**
     * @example 123
     *
     * @var int
     */
    public $outputDataSourceId;

    /**
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $outputDataSourceType;

    /**
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $outputDbType;

    /**
     * @example DEV
     *
     * @var string
     */
    public $outputEnv;

    /**
     * @example 123
     *
     * @var int
     */
    public $outputProjectId;

    /**
     * @var bool
     */
    public $outputTableDeleted;

    /**
     * @example odps.123.test_project.order
     *
     * @var string
     */
    public $outputTableId;

    /**
     * @example order
     *
     * @var string
     */
    public $outputTableName;

    /**
     * @example PHYSICAL_TABLE
     *
     * @var string
     */
    public $outputTableType;

    /**
     * @example DEV
     *
     * @var string
     */
    public $taskEnv;

    /**
     * @example n_123
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 12345
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'inputBizUnitId' => 'InputBizUnitId',
        'inputColumnId' => 'InputColumnId',
        'inputColumnName' => 'InputColumnName',
        'inputDataSourceId' => 'InputDataSourceId',
        'inputDataSourceType' => 'InputDataSourceType',
        'inputDbType' => 'InputDbType',
        'inputEnv' => 'InputEnv',
        'inputProjectId' => 'InputProjectId',
        'inputTableDeleted' => 'InputTableDeleted',
        'inputTableId' => 'InputTableId',
        'inputTableName' => 'InputTableName',
        'inputTableType' => 'InputTableType',
        'outputBizUnitId' => 'OutputBizUnitId',
        'outputColumnId' => 'OutputColumnId',
        'outputColumnName' => 'OutputColumnName',
        'outputDataSourceId' => 'OutputDataSourceId',
        'outputDataSourceType' => 'OutputDataSourceType',
        'outputDbType' => 'OutputDbType',
        'outputEnv' => 'OutputEnv',
        'outputProjectId' => 'OutputProjectId',
        'outputTableDeleted' => 'OutputTableDeleted',
        'outputTableId' => 'OutputTableId',
        'outputTableName' => 'OutputTableName',
        'outputTableType' => 'OutputTableType',
        'taskEnv' => 'TaskEnv',
        'taskId' => 'TaskId',
        'tenantId' => 'TenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputBizUnitId) {
            $res['InputBizUnitId'] = $this->inputBizUnitId;
        }
        if (null !== $this->inputColumnId) {
            $res['InputColumnId'] = $this->inputColumnId;
        }
        if (null !== $this->inputColumnName) {
            $res['InputColumnName'] = $this->inputColumnName;
        }
        if (null !== $this->inputDataSourceId) {
            $res['InputDataSourceId'] = $this->inputDataSourceId;
        }
        if (null !== $this->inputDataSourceType) {
            $res['InputDataSourceType'] = $this->inputDataSourceType;
        }
        if (null !== $this->inputDbType) {
            $res['InputDbType'] = $this->inputDbType;
        }
        if (null !== $this->inputEnv) {
            $res['InputEnv'] = $this->inputEnv;
        }
        if (null !== $this->inputProjectId) {
            $res['InputProjectId'] = $this->inputProjectId;
        }
        if (null !== $this->inputTableDeleted) {
            $res['InputTableDeleted'] = $this->inputTableDeleted;
        }
        if (null !== $this->inputTableId) {
            $res['InputTableId'] = $this->inputTableId;
        }
        if (null !== $this->inputTableName) {
            $res['InputTableName'] = $this->inputTableName;
        }
        if (null !== $this->inputTableType) {
            $res['InputTableType'] = $this->inputTableType;
        }
        if (null !== $this->outputBizUnitId) {
            $res['OutputBizUnitId'] = $this->outputBizUnitId;
        }
        if (null !== $this->outputColumnId) {
            $res['OutputColumnId'] = $this->outputColumnId;
        }
        if (null !== $this->outputColumnName) {
            $res['OutputColumnName'] = $this->outputColumnName;
        }
        if (null !== $this->outputDataSourceId) {
            $res['OutputDataSourceId'] = $this->outputDataSourceId;
        }
        if (null !== $this->outputDataSourceType) {
            $res['OutputDataSourceType'] = $this->outputDataSourceType;
        }
        if (null !== $this->outputDbType) {
            $res['OutputDbType'] = $this->outputDbType;
        }
        if (null !== $this->outputEnv) {
            $res['OutputEnv'] = $this->outputEnv;
        }
        if (null !== $this->outputProjectId) {
            $res['OutputProjectId'] = $this->outputProjectId;
        }
        if (null !== $this->outputTableDeleted) {
            $res['OutputTableDeleted'] = $this->outputTableDeleted;
        }
        if (null !== $this->outputTableId) {
            $res['OutputTableId'] = $this->outputTableId;
        }
        if (null !== $this->outputTableName) {
            $res['OutputTableName'] = $this->outputTableName;
        }
        if (null !== $this->outputTableType) {
            $res['OutputTableType'] = $this->outputTableType;
        }
        if (null !== $this->taskEnv) {
            $res['TaskEnv'] = $this->taskEnv;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputBizUnitId'])) {
            $model->inputBizUnitId = $map['InputBizUnitId'];
        }
        if (isset($map['InputColumnId'])) {
            $model->inputColumnId = $map['InputColumnId'];
        }
        if (isset($map['InputColumnName'])) {
            $model->inputColumnName = $map['InputColumnName'];
        }
        if (isset($map['InputDataSourceId'])) {
            $model->inputDataSourceId = $map['InputDataSourceId'];
        }
        if (isset($map['InputDataSourceType'])) {
            $model->inputDataSourceType = $map['InputDataSourceType'];
        }
        if (isset($map['InputDbType'])) {
            $model->inputDbType = $map['InputDbType'];
        }
        if (isset($map['InputEnv'])) {
            $model->inputEnv = $map['InputEnv'];
        }
        if (isset($map['InputProjectId'])) {
            $model->inputProjectId = $map['InputProjectId'];
        }
        if (isset($map['InputTableDeleted'])) {
            $model->inputTableDeleted = $map['InputTableDeleted'];
        }
        if (isset($map['InputTableId'])) {
            $model->inputTableId = $map['InputTableId'];
        }
        if (isset($map['InputTableName'])) {
            $model->inputTableName = $map['InputTableName'];
        }
        if (isset($map['InputTableType'])) {
            $model->inputTableType = $map['InputTableType'];
        }
        if (isset($map['OutputBizUnitId'])) {
            $model->outputBizUnitId = $map['OutputBizUnitId'];
        }
        if (isset($map['OutputColumnId'])) {
            $model->outputColumnId = $map['OutputColumnId'];
        }
        if (isset($map['OutputColumnName'])) {
            $model->outputColumnName = $map['OutputColumnName'];
        }
        if (isset($map['OutputDataSourceId'])) {
            $model->outputDataSourceId = $map['OutputDataSourceId'];
        }
        if (isset($map['OutputDataSourceType'])) {
            $model->outputDataSourceType = $map['OutputDataSourceType'];
        }
        if (isset($map['OutputDbType'])) {
            $model->outputDbType = $map['OutputDbType'];
        }
        if (isset($map['OutputEnv'])) {
            $model->outputEnv = $map['OutputEnv'];
        }
        if (isset($map['OutputProjectId'])) {
            $model->outputProjectId = $map['OutputProjectId'];
        }
        if (isset($map['OutputTableDeleted'])) {
            $model->outputTableDeleted = $map['OutputTableDeleted'];
        }
        if (isset($map['OutputTableId'])) {
            $model->outputTableId = $map['OutputTableId'];
        }
        if (isset($map['OutputTableName'])) {
            $model->outputTableName = $map['OutputTableName'];
        }
        if (isset($map['OutputTableType'])) {
            $model->outputTableType = $map['OutputTableType'];
        }
        if (isset($map['TaskEnv'])) {
            $model->taskEnv = $map['TaskEnv'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
