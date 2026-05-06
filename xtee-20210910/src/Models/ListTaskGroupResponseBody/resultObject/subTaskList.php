<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\ListTaskGroupResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class subTaskList extends Model
{
    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $hideViewResultButton;

    /**
     * @var bool
     */
    public $isCharge;

    /**
     * @var string
     */
    public $modelScene;

    /**
     * @var int
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
     * @var bool
     */
    public $supportCancel;

    /**
     * @var bool
     */
    public $supportDownload;

    /**
     * @var bool
     */
    public $supportMergeSelect;

    /**
     * @var bool
     */
    public $supportView;

    /**
     * @var string
     */
    public $tab;

    /**
     * @var int
     */
    public $taskGroupId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'finishTime' => 'FinishTime',
        'groupName' => 'GroupName',
        'hideViewResultButton' => 'HideViewResultButton',
        'isCharge' => 'IsCharge',
        'modelScene' => 'ModelScene',
        'sampleId' => 'SampleId',
        'sampleName' => 'SampleName',
        'serviceCode' => 'ServiceCode',
        'serviceName' => 'ServiceName',
        'subTaskId' => 'SubTaskId',
        'supportCancel' => 'SupportCancel',
        'supportDownload' => 'SupportDownload',
        'supportMergeSelect' => 'SupportMergeSelect',
        'supportView' => 'SupportView',
        'tab' => 'Tab',
        'taskGroupId' => 'TaskGroupId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->hideViewResultButton) {
            $res['HideViewResultButton'] = $this->hideViewResultButton;
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

        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }

        if (null !== $this->supportDownload) {
            $res['SupportDownload'] = $this->supportDownload;
        }

        if (null !== $this->supportMergeSelect) {
            $res['SupportMergeSelect'] = $this->supportMergeSelect;
        }

        if (null !== $this->supportView) {
            $res['SupportView'] = $this->supportView;
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
        }

        if (null !== $this->taskGroupId) {
            $res['TaskGroupId'] = $this->taskGroupId;
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
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['HideViewResultButton'])) {
            $model->hideViewResultButton = $map['HideViewResultButton'];
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

        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }

        if (isset($map['SupportDownload'])) {
            $model->supportDownload = $map['SupportDownload'];
        }

        if (isset($map['SupportMergeSelect'])) {
            $model->supportMergeSelect = $map['SupportMergeSelect'];
        }

        if (isset($map['SupportView'])) {
            $model->supportView = $map['SupportView'];
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        if (isset($map['TaskGroupId'])) {
            $model->taskGroupId = $map['TaskGroupId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
