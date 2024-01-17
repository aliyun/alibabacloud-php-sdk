<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetTaskCopiesResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTaskCopiesResponseBody\data\currentActivityInstances;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example [ "actxxx" ]
     *
     * @var string[]
     */
    public $actionExecutorId;

    /**
     * @example [ "name" ]
     *
     * @var string[]
     */
    public $actionExecutorName;

    /**
     * @example APP_XCxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example g02fbs08xxx
     *
     * @var string
     */
    public $carbonActivityId;

    /**
     * @example 2020-01-01
     *
     * @var string
     */
    public $createTimeGMT;

    /**
     * @example []
     *
     * @var currentActivityInstances[]
     */
    public $currentActivityInstances;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $dataMap;

    /**
     * @example edit
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 2020-01-01
     *
     * @var string
     */
    public $finishTimeGMT;

    /**
     * @example formxxxx
     *
     * @var string
     */
    public $formInstanceId;

    /**
     * @example uuid
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example value
     *
     * @var string
     */
    public $instanceValue;

    /**
     * @example 2020-01-01
     *
     * @var string
     */
    public $modifiedTimeGMT;

    /**
     * @example guyagsd
     *
     * @var string
     */
    public $originatorAvatar;

    /**
     * @example guyagsd
     *
     * @var string
     */
    public $originatorDisplayName;

    /**
     * @example 123456
     *
     * @var string
     */
    public $originatorId;

    /**
     * @example 同意
     *
     * @var string
     */
    public $processApprovedResult;

    /**
     * @example 同意
     *
     * @var string
     */
    public $processApprovedResultText;

    /**
     * @example code
     *
     * @var string
     */
    public $processCode;

    /**
     * @example processxxxx
     *
     * @var int
     */
    public $processId;

    /**
     * @example instancexxxx
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @example 同意
     *
     * @var string
     */
    public $processInstanceStatus;

    /**
     * @example 同意
     *
     * @var string
     */
    public $processInstanceStatusText;

    /**
     * @example 名称
     *
     * @var string
     */
    public $processName;

    /**
     * @example 12345
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @example 标题
     *
     * @var string
     */
    public $title;

    /**
     * @example 1.0
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'actionExecutorId'          => 'ActionExecutorId',
        'actionExecutorName'        => 'ActionExecutorName',
        'appType'                   => 'AppType',
        'carbonActivityId'          => 'CarbonActivityId',
        'createTimeGMT'             => 'CreateTimeGMT',
        'currentActivityInstances'  => 'CurrentActivityInstances',
        'dataMap'                   => 'DataMap',
        'dataType'                  => 'DataType',
        'finishTimeGMT'             => 'FinishTimeGMT',
        'formInstanceId'            => 'FormInstanceId',
        'formUuid'                  => 'FormUuid',
        'instanceValue'             => 'InstanceValue',
        'modifiedTimeGMT'           => 'ModifiedTimeGMT',
        'originatorAvatar'          => 'OriginatorAvatar',
        'originatorDisplayName'     => 'OriginatorDisplayName',
        'originatorId'              => 'OriginatorId',
        'processApprovedResult'     => 'ProcessApprovedResult',
        'processApprovedResultText' => 'ProcessApprovedResultText',
        'processCode'               => 'ProcessCode',
        'processId'                 => 'ProcessId',
        'processInstanceId'         => 'ProcessInstanceId',
        'processInstanceStatus'     => 'ProcessInstanceStatus',
        'processInstanceStatusText' => 'ProcessInstanceStatusText',
        'processName'               => 'ProcessName',
        'serialNumber'              => 'SerialNumber',
        'title'                     => 'Title',
        'version'                   => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionExecutorId) {
            $res['ActionExecutorId'] = $this->actionExecutorId;
        }
        if (null !== $this->actionExecutorName) {
            $res['ActionExecutorName'] = $this->actionExecutorName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->carbonActivityId) {
            $res['CarbonActivityId'] = $this->carbonActivityId;
        }
        if (null !== $this->createTimeGMT) {
            $res['CreateTimeGMT'] = $this->createTimeGMT;
        }
        if (null !== $this->currentActivityInstances) {
            $res['CurrentActivityInstances'] = [];
            if (null !== $this->currentActivityInstances && \is_array($this->currentActivityInstances)) {
                $n = 0;
                foreach ($this->currentActivityInstances as $item) {
                    $res['CurrentActivityInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataMap) {
            $res['DataMap'] = $this->dataMap;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->finishTimeGMT) {
            $res['FinishTimeGMT'] = $this->finishTimeGMT;
        }
        if (null !== $this->formInstanceId) {
            $res['FormInstanceId'] = $this->formInstanceId;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->instanceValue) {
            $res['InstanceValue'] = $this->instanceValue;
        }
        if (null !== $this->modifiedTimeGMT) {
            $res['ModifiedTimeGMT'] = $this->modifiedTimeGMT;
        }
        if (null !== $this->originatorAvatar) {
            $res['OriginatorAvatar'] = $this->originatorAvatar;
        }
        if (null !== $this->originatorDisplayName) {
            $res['OriginatorDisplayName'] = $this->originatorDisplayName;
        }
        if (null !== $this->originatorId) {
            $res['OriginatorId'] = $this->originatorId;
        }
        if (null !== $this->processApprovedResult) {
            $res['ProcessApprovedResult'] = $this->processApprovedResult;
        }
        if (null !== $this->processApprovedResultText) {
            $res['ProcessApprovedResultText'] = $this->processApprovedResultText;
        }
        if (null !== $this->processCode) {
            $res['ProcessCode'] = $this->processCode;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->processInstanceStatus) {
            $res['ProcessInstanceStatus'] = $this->processInstanceStatus;
        }
        if (null !== $this->processInstanceStatusText) {
            $res['ProcessInstanceStatusText'] = $this->processInstanceStatusText;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ActionExecutorId'])) {
            if (!empty($map['ActionExecutorId'])) {
                $model->actionExecutorId = $map['ActionExecutorId'];
            }
        }
        if (isset($map['ActionExecutorName'])) {
            if (!empty($map['ActionExecutorName'])) {
                $model->actionExecutorName = $map['ActionExecutorName'];
            }
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CarbonActivityId'])) {
            $model->carbonActivityId = $map['CarbonActivityId'];
        }
        if (isset($map['CreateTimeGMT'])) {
            $model->createTimeGMT = $map['CreateTimeGMT'];
        }
        if (isset($map['CurrentActivityInstances'])) {
            if (!empty($map['CurrentActivityInstances'])) {
                $model->currentActivityInstances = [];
                $n                               = 0;
                foreach ($map['CurrentActivityInstances'] as $item) {
                    $model->currentActivityInstances[$n++] = null !== $item ? currentActivityInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataMap'])) {
            $model->dataMap = $map['DataMap'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['FinishTimeGMT'])) {
            $model->finishTimeGMT = $map['FinishTimeGMT'];
        }
        if (isset($map['FormInstanceId'])) {
            $model->formInstanceId = $map['FormInstanceId'];
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['InstanceValue'])) {
            $model->instanceValue = $map['InstanceValue'];
        }
        if (isset($map['ModifiedTimeGMT'])) {
            $model->modifiedTimeGMT = $map['ModifiedTimeGMT'];
        }
        if (isset($map['OriginatorAvatar'])) {
            $model->originatorAvatar = $map['OriginatorAvatar'];
        }
        if (isset($map['OriginatorDisplayName'])) {
            $model->originatorDisplayName = $map['OriginatorDisplayName'];
        }
        if (isset($map['OriginatorId'])) {
            $model->originatorId = $map['OriginatorId'];
        }
        if (isset($map['ProcessApprovedResult'])) {
            $model->processApprovedResult = $map['ProcessApprovedResult'];
        }
        if (isset($map['ProcessApprovedResultText'])) {
            $model->processApprovedResultText = $map['ProcessApprovedResultText'];
        }
        if (isset($map['ProcessCode'])) {
            $model->processCode = $map['ProcessCode'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }
        if (isset($map['ProcessInstanceStatus'])) {
            $model->processInstanceStatus = $map['ProcessInstanceStatus'];
        }
        if (isset($map['ProcessInstanceStatusText'])) {
            $model->processInstanceStatusText = $map['ProcessInstanceStatusText'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
