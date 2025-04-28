<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableLineageByTaskIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $inputBizUnitId;

    /**
     * @var int
     */
    public $inputDataSourceId;

    /**
     * @var string
     */
    public $inputDataSourceType;

    /**
     * @var string
     */
    public $inputDbType;

    /**
     * @var string
     */
    public $inputEnv;

    /**
     * @var int
     */
    public $inputProjectId;

    /**
     * @var bool
     */
    public $inputTableDeleted;

    /**
     * @var string
     */
    public $inputTableId;

    /**
     * @var string
     */
    public $inputTableName;

    /**
     * @var string
     */
    public $inputTableType;

    /**
     * @var int
     */
    public $outputBizUnitId;

    /**
     * @var int
     */
    public $outputDataSourceId;

    /**
     * @var string
     */
    public $outputDataSourceType;

    /**
     * @var string
     */
    public $outputDbType;

    /**
     * @var string
     */
    public $outputEnv;

    /**
     * @var int
     */
    public $outputProjectId;

    /**
     * @var bool
     */
    public $outputTableDeleted;

    /**
     * @var string
     */
    public $outputTableId;

    /**
     * @var string
     */
    public $outputTableName;

    /**
     * @var string
     */
    public $outputTableType;

    /**
     * @var string
     */
    public $taskEnv;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'inputBizUnitId' => 'InputBizUnitId',
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputBizUnitId) {
            $res['InputBizUnitId'] = $this->inputBizUnitId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputBizUnitId'])) {
            $model->inputBizUnitId = $map['InputBizUnitId'];
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
