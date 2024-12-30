<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTaskRequest;

use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @example mysql_catalog
     *
     * @var string
     */
    public $dataSourceCatalog;

    /**
     * @example 12131111
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example erp
     *
     * @var string
     */
    public $dataSourceSchema;

    /**
     * @description This parameter is required.
     *
     * @example xx test.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example /a/b
     *
     * @var string
     */
    public $directory;

    /**
     * @example PYTHON3_7
     *
     * @var string
     */
    public $engine;

    /**
     * @description This parameter is required.
     *
     * @example test111
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 10121101
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $pythonModuleList;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var int
     */
    public $scheduleType;

    /**
     * @description This parameter is required.
     *
     * @example 5
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'dataSourceCatalog' => 'DataSourceCatalog',
        'dataSourceId'      => 'DataSourceId',
        'dataSourceSchema'  => 'DataSourceSchema',
        'description'       => 'Description',
        'directory'         => 'Directory',
        'engine'            => 'Engine',
        'name'              => 'Name',
        'projectId'         => 'ProjectId',
        'pythonModuleList'  => 'PythonModuleList',
        'scheduleType'      => 'ScheduleType',
        'taskType'          => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceCatalog) {
            $res['DataSourceCatalog'] = $this->dataSourceCatalog;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceSchema) {
            $res['DataSourceSchema'] = $this->dataSourceSchema;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->pythonModuleList) {
            $res['PythonModuleList'] = $this->pythonModuleList;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceCatalog'])) {
            $model->dataSourceCatalog = $map['DataSourceCatalog'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceSchema'])) {
            $model->dataSourceSchema = $map['DataSourceSchema'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PythonModuleList'])) {
            if (!empty($map['PythonModuleList'])) {
                $model->pythonModuleList = $map['PythonModuleList'];
            }
        }
        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
