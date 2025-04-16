<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTaskRequest;

use AlibabaCloud\Dara\Model;

class createCommand extends Model
{
    /**
     * @var string
     */
    public $dataSourceCatalog;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceSchema;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $pythonModuleList;

    /**
     * @var int
     */
    public $scheduleType;

    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'dataSourceCatalog' => 'DataSourceCatalog',
        'dataSourceId' => 'DataSourceId',
        'dataSourceSchema' => 'DataSourceSchema',
        'description' => 'Description',
        'directory' => 'Directory',
        'engine' => 'Engine',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'pythonModuleList' => 'PythonModuleList',
        'scheduleType' => 'ScheduleType',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->pythonModuleList)) {
            Model::validateArray($this->pythonModuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->pythonModuleList)) {
                $res['PythonModuleList'] = [];
                $n1 = 0;
                foreach ($this->pythonModuleList as $item1) {
                    $res['PythonModuleList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
                $model->pythonModuleList = [];
                $n1 = 0;
                foreach ($map['PythonModuleList'] as $item1) {
                    $model->pythonModuleList[$n1++] = $item1;
                }
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
