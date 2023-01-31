<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class RecordFailureRequest extends Model
{
    /**
     * @example 1579055782000
     *
     * @var int
     */
    public $actualTime;

    /**
     * @example 4f21446e-324e-46f2-bf62-7f341fb004ea
     *
     * @var string
     */
    public $callId;

    /**
     * @example 135815****
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 10086
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example OutOfService
     *
     * @var string
     */
    public $dispositionCode;

    /**
     * @var string
     */
    public $exceptionCodes;

    /**
     * @example 9ab43460-c0b9-40e2-8447-48d82c97fc67
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example d2295c0e-3bc3-48a5-9f56-b185db2be909
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'actualTime'      => 'ActualTime',
        'callId'          => 'CallId',
        'calledNumber'    => 'CalledNumber',
        'callingNumber'   => 'CallingNumber',
        'dispositionCode' => 'DispositionCode',
        'exceptionCodes'  => 'ExceptionCodes',
        'instanceId'      => 'InstanceId',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RecordFailureRequest
     */
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
