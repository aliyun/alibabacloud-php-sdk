<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetTaskCopiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTaskCopiesResponseBody\data\currentActivityInstances;

class data extends Model
{
    /**
     * @var string[]
     */
    public $actionExecutorId;
    /**
     * @var string[]
     */
    public $actionExecutorName;
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $carbonActivityId;
    /**
     * @var string
     */
    public $createTimeGMT;
    /**
     * @var currentActivityInstances[]
     */
    public $currentActivityInstances;
    /**
     * @var mixed[]
     */
    public $dataMap;
    /**
     * @var string
     */
    public $dataType;
    /**
     * @var string
     */
    public $finishTimeGMT;
    /**
     * @var string
     */
    public $formInstanceId;
    /**
     * @var string
     */
    public $formUuid;
    /**
     * @var string
     */
    public $instanceValue;
    /**
     * @var string
     */
    public $modifiedTimeGMT;
    /**
     * @var string
     */
    public $originatorAvatar;
    /**
     * @var string
     */
    public $originatorDisplayName;
    /**
     * @var string
     */
    public $originatorId;
    /**
     * @var string
     */
    public $processApprovedResult;
    /**
     * @var string
     */
    public $processApprovedResultText;
    /**
     * @var string
     */
    public $processCode;
    /**
     * @var int
     */
    public $processId;
    /**
     * @var string
     */
    public $processInstanceId;
    /**
     * @var string
     */
    public $processInstanceStatus;
    /**
     * @var string
     */
    public $processInstanceStatusText;
    /**
     * @var string
     */
    public $processName;
    /**
     * @var string
     */
    public $serialNumber;
    /**
     * @var string
     */
    public $title;
    /**
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
        if (\is_array($this->actionExecutorId)) {
            Model::validateArray($this->actionExecutorId);
        }
        if (\is_array($this->actionExecutorName)) {
            Model::validateArray($this->actionExecutorName);
        }
        if (\is_array($this->currentActivityInstances)) {
            Model::validateArray($this->currentActivityInstances);
        }
        if (\is_array($this->dataMap)) {
            Model::validateArray($this->dataMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionExecutorId) {
            if (\is_array($this->actionExecutorId)) {
                $res['ActionExecutorId'] = [];
                $n1                      = 0;
                foreach ($this->actionExecutorId as $item1) {
                    $res['ActionExecutorId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->actionExecutorName) {
            if (\is_array($this->actionExecutorName)) {
                $res['ActionExecutorName'] = [];
                $n1                        = 0;
                foreach ($this->actionExecutorName as $item1) {
                    $res['ActionExecutorName'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->currentActivityInstances)) {
                $res['CurrentActivityInstances'] = [];
                $n1                              = 0;
                foreach ($this->currentActivityInstances as $item1) {
                    $res['CurrentActivityInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dataMap) {
            if (\is_array($this->dataMap)) {
                $res['DataMap'] = [];
                foreach ($this->dataMap as $key1 => $value1) {
                    $res['DataMap'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionExecutorId'])) {
            if (!empty($map['ActionExecutorId'])) {
                $model->actionExecutorId = [];
                $n1                      = 0;
                foreach ($map['ActionExecutorId'] as $item1) {
                    $model->actionExecutorId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ActionExecutorName'])) {
            if (!empty($map['ActionExecutorName'])) {
                $model->actionExecutorName = [];
                $n1                        = 0;
                foreach ($map['ActionExecutorName'] as $item1) {
                    $model->actionExecutorName[$n1++] = $item1;
                }
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
                $n1                              = 0;
                foreach ($map['CurrentActivityInstances'] as $item1) {
                    $model->currentActivityInstances[$n1++] = currentActivityInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['DataMap'])) {
            if (!empty($map['DataMap'])) {
                $model->dataMap = [];
                foreach ($map['DataMap'] as $key1 => $value1) {
                    $model->dataMap[$key1] = $value1;
                }
            }
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
