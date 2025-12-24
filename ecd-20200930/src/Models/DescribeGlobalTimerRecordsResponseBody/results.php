<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGlobalTimerRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $displayResultName;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $retryable;

    /**
     * @var string
     */
    public $timerGroupId;

    /**
     * @var string
     */
    public $timerRecordId;

    /**
     * @var string
     */
    public $timerResult;

    /**
     * @var string
     */
    public $timerType;
    protected $_name = [
        'actionType' => 'ActionType',
        'batchId' => 'BatchId',
        'context' => 'Context',
        'createTime' => 'CreateTime',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'displayResultName' => 'DisplayResultName',
        'finishTime' => 'FinishTime',
        'regionId' => 'RegionId',
        'retryable' => 'Retryable',
        'timerGroupId' => 'TimerGroupId',
        'timerRecordId' => 'TimerRecordId',
        'timerResult' => 'TimerResult',
        'timerType' => 'TimerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->displayResultName) {
            $res['DisplayResultName'] = $this->displayResultName;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->retryable) {
            $res['Retryable'] = $this->retryable;
        }

        if (null !== $this->timerGroupId) {
            $res['TimerGroupId'] = $this->timerGroupId;
        }

        if (null !== $this->timerRecordId) {
            $res['TimerRecordId'] = $this->timerRecordId;
        }

        if (null !== $this->timerResult) {
            $res['TimerResult'] = $this->timerResult;
        }

        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DisplayResultName'])) {
            $model->displayResultName = $map['DisplayResultName'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Retryable'])) {
            $model->retryable = $map['Retryable'];
        }

        if (isset($map['TimerGroupId'])) {
            $model->timerGroupId = $map['TimerGroupId'];
        }

        if (isset($map['TimerRecordId'])) {
            $model->timerRecordId = $map['TimerRecordId'];
        }

        if (isset($map['TimerResult'])) {
            $model->timerResult = $map['TimerResult'];
        }

        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        return $model;
    }
}
