<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class RecordFailureRequest extends Model
{
    /**
     * @var int
     */
    public $actualTime;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $dispositionCode;

    /**
     * @var string
     */
    public $exceptionCodes;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'actualTime' => 'ActualTime',
        'callId' => 'CallId',
        'calledNumber' => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'dispositionCode' => 'DispositionCode',
        'exceptionCodes' => 'ExceptionCodes',
        'instanceId' => 'InstanceId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['ActualTime'] = $this->actualTime;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->dispositionCode) {
            $res['DispositionCode'] = $this->dispositionCode;
        }

        if (null !== $this->exceptionCodes) {
            $res['ExceptionCodes'] = $this->exceptionCodes;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ActualTime'])) {
            $model->actualTime = $map['ActualTime'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['DispositionCode'])) {
            $model->dispositionCode = $map['DispositionCode'];
        }

        if (isset($map['ExceptionCodes'])) {
            $model->exceptionCodes = $map['ExceptionCodes'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
