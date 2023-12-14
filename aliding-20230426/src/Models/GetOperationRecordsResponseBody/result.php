<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetOperationRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example return
     *
     * @var string
     */
    public $action;

    /**
     * @example 同意
     *
     * @var string
     */
    public $actionExit;

    /**
     * @example 2021-02-01
     *
     * @var string
     */
    public $activeTimeGMT;

    /**
     * @example act-xxaanfaf
     *
     * @var string
     */
    public $activityId;

    /**
     * @example 12345
     *
     * @var int
     */
    public $dataId;

    /**
     * @example https://oss.com/Signature.pdf
     *
     * @var string
     */
    public $digitalSign;

    /**
     * @example https://oss.com/a.pdf
     *
     * @var string
     */
    public $files;

    /**
     * @example 2021-01-01
     *
     * @var string
     */
    public $operateTimeGMT;

    /**
     * @example remove
     *
     * @var string
     */
    public $operateType;

    /**
     * @example 张三
     *
     * @var string
     */
    public $operatorDisplayName;

    /**
     * @example 李四
     *
     * @var string
     */
    public $operatorName;

    /**
     * @example 无冬
     *
     * @var string
     */
    public $operatorNickName;

    /**
     * @example https://oss.com/a.jpeg
     *
     * @var string
     */
    public $operatorPhotoUrl;

    /**
     * @example 良好
     *
     * @var string
     */
    public $operatorStatus;

    /**
     * @example manager123
     *
     * @var string
     */
    public $operatorUserId;

    /**
     * @example f30233fb-72e1-4af4-8cb8-c7e0ea9ee530
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @example 确认同意
     *
     * @var string
     */
    public $remark;

    /**
     * @example 请购类型
     *
     * @var string
     */
    public $showName;

    /**
     * @example 12
     *
     * @var int
     */
    public $size;

    /**
     * @example 同步
     *
     * @var string
     */
    public $taskExecuteType;

    /**
     * @example 2021-01-01
     *
     * @var int
     */
    public $taskHoldTimeGMT;

    /**
     * @example task-123
     *
     * @var string
     */
    public $taskId;

    /**
     * @example append task
     *
     * @var string
     */
    public $taskType;

    /**
     * @example i18n
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'action'              => 'Action',
        'actionExit'          => 'ActionExit',
        'activeTimeGMT'       => 'ActiveTimeGMT',
        'activityId'          => 'ActivityId',
        'dataId'              => 'DataId',
        'digitalSign'         => 'DigitalSign',
        'files'               => 'Files',
        'operateTimeGMT'      => 'OperateTimeGMT',
        'operateType'         => 'OperateType',
        'operatorDisplayName' => 'OperatorDisplayName',
        'operatorName'        => 'OperatorName',
        'operatorNickName'    => 'OperatorNickName',
        'operatorPhotoUrl'    => 'OperatorPhotoUrl',
        'operatorStatus'      => 'OperatorStatus',
        'operatorUserId'      => 'OperatorUserId',
        'processInstanceId'   => 'ProcessInstanceId',
        'remark'              => 'Remark',
        'showName'            => 'ShowName',
        'size'                => 'Size',
        'taskExecuteType'     => 'TaskExecuteType',
        'taskHoldTimeGMT'     => 'TaskHoldTimeGMT',
        'taskId'              => 'TaskId',
        'taskType'            => 'TaskType',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionExit) {
            $res['ActionExit'] = $this->actionExit;
        }
        if (null !== $this->activeTimeGMT) {
            $res['ActiveTimeGMT'] = $this->activeTimeGMT;
        }
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->digitalSign) {
            $res['DigitalSign'] = $this->digitalSign;
        }
        if (null !== $this->files) {
            $res['Files'] = $this->files;
        }
        if (null !== $this->operateTimeGMT) {
            $res['OperateTimeGMT'] = $this->operateTimeGMT;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->operatorDisplayName) {
            $res['OperatorDisplayName'] = $this->operatorDisplayName;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->operatorNickName) {
            $res['OperatorNickName'] = $this->operatorNickName;
        }
        if (null !== $this->operatorPhotoUrl) {
            $res['OperatorPhotoUrl'] = $this->operatorPhotoUrl;
        }
        if (null !== $this->operatorStatus) {
            $res['OperatorStatus'] = $this->operatorStatus;
        }
        if (null !== $this->operatorUserId) {
            $res['OperatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->taskExecuteType) {
            $res['TaskExecuteType'] = $this->taskExecuteType;
        }
        if (null !== $this->taskHoldTimeGMT) {
            $res['TaskHoldTimeGMT'] = $this->taskHoldTimeGMT;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionExit'])) {
            $model->actionExit = $map['ActionExit'];
        }
        if (isset($map['ActiveTimeGMT'])) {
            $model->activeTimeGMT = $map['ActiveTimeGMT'];
        }
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DigitalSign'])) {
            $model->digitalSign = $map['DigitalSign'];
        }
        if (isset($map['Files'])) {
            $model->files = $map['Files'];
        }
        if (isset($map['OperateTimeGMT'])) {
            $model->operateTimeGMT = $map['OperateTimeGMT'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['OperatorDisplayName'])) {
            $model->operatorDisplayName = $map['OperatorDisplayName'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['OperatorNickName'])) {
            $model->operatorNickName = $map['OperatorNickName'];
        }
        if (isset($map['OperatorPhotoUrl'])) {
            $model->operatorPhotoUrl = $map['OperatorPhotoUrl'];
        }
        if (isset($map['OperatorStatus'])) {
            $model->operatorStatus = $map['OperatorStatus'];
        }
        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TaskExecuteType'])) {
            $model->taskExecuteType = $map['TaskExecuteType'];
        }
        if (isset($map['TaskHoldTimeGMT'])) {
            $model->taskHoldTimeGMT = $map['TaskHoldTimeGMT'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
