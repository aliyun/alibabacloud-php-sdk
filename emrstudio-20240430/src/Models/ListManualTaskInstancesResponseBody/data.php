<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTaskInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $emrClusterId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $externalAppId;

    /**
     * @var string
     */
    public $manualTaskInstanceId;

    /**
     * @var string
     */
    public $manualTaskInstanceName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $taskParams;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'emrClusterId' => 'EmrClusterId',
        'endTime' => 'EndTime',
        'externalAppId' => 'ExternalAppId',
        'manualTaskInstanceId' => 'ManualTaskInstanceId',
        'manualTaskInstanceName' => 'ManualTaskInstanceName',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'submitTime' => 'SubmitTime',
        'taskParams' => 'TaskParams',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->emrClusterId) {
            $res['EmrClusterId'] = $this->emrClusterId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->externalAppId) {
            $res['ExternalAppId'] = $this->externalAppId;
        }

        if (null !== $this->manualTaskInstanceId) {
            $res['ManualTaskInstanceId'] = $this->manualTaskInstanceId;
        }

        if (null !== $this->manualTaskInstanceName) {
            $res['ManualTaskInstanceName'] = $this->manualTaskInstanceName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
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
        if (isset($map['EmrClusterId'])) {
            $model->emrClusterId = $map['EmrClusterId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExternalAppId'])) {
            $model->externalAppId = $map['ExternalAppId'];
        }

        if (isset($map['ManualTaskInstanceId'])) {
            $model->manualTaskInstanceId = $map['ManualTaskInstanceId'];
        }

        if (isset($map['ManualTaskInstanceName'])) {
            $model->manualTaskInstanceName = $map['ManualTaskInstanceName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
