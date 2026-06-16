<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\CreateTaskGroupResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class subTaskList extends Model
{
    /**
     * @var string
     */
    public $checker;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileRows;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $isCharge;

    /**
     * @var string
     */
    public $modelScene;

    /**
     * @var string
     */
    public $sampleId;

    /**
     * @var string
     */
    public $sampleName;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var int
     */
    public $subTaskId;

    /**
     * @var string
     */
    public $tab;

    /**
     * @var string
     */
    public $taskGroupId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'checker' => 'Checker',
        'fileName' => 'FileName',
        'fileRows' => 'FileRows',
        'finishTime' => 'FinishTime',
        'groupName' => 'GroupName',
        'isCharge' => 'IsCharge',
        'modelScene' => 'ModelScene',
        'sampleId' => 'SampleId',
        'sampleName' => 'SampleName',
        'serviceCode' => 'ServiceCode',
        'serviceName' => 'ServiceName',
        'subTaskId' => 'SubTaskId',
        'tab' => 'Tab',
        'taskGroupId' => 'TaskGroupId',
        'taskName' => 'TaskName',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checker) {
            $res['Checker'] = $this->checker;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileRows) {
            $res['FileRows'] = $this->fileRows;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->isCharge) {
            $res['IsCharge'] = $this->isCharge;
        }

        if (null !== $this->modelScene) {
            $res['ModelScene'] = $this->modelScene;
        }

        if (null !== $this->sampleId) {
            $res['SampleId'] = $this->sampleId;
        }

        if (null !== $this->sampleName) {
            $res['SampleName'] = $this->sampleName;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->subTaskId) {
            $res['SubTaskId'] = $this->subTaskId;
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
        }

        if (null !== $this->taskGroupId) {
            $res['TaskGroupId'] = $this->taskGroupId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['Checker'])) {
            $model->checker = $map['Checker'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileRows'])) {
            $model->fileRows = $map['FileRows'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IsCharge'])) {
            $model->isCharge = $map['IsCharge'];
        }

        if (isset($map['ModelScene'])) {
            $model->modelScene = $map['ModelScene'];
        }

        if (isset($map['SampleId'])) {
            $model->sampleId = $map['SampleId'];
        }

        if (isset($map['SampleName'])) {
            $model->sampleName = $map['SampleName'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['SubTaskId'])) {
            $model->subTaskId = $map['SubTaskId'];
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        if (isset($map['TaskGroupId'])) {
            $model->taskGroupId = $map['TaskGroupId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
