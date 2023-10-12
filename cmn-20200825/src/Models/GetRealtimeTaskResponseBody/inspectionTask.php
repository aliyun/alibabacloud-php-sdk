<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetRealtimeTaskResponseBody;

use AlibabaCloud\Tea\Model;

class inspectionTask extends Model
{
    /**
     * @example CONTROLLER_ERROR
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example error: No avaliable agents!, trace:
     *
     * @var string
     */
    public $inspectionMessage;

    /**
     * @example {}
     *
     * @var string
     */
    public $inspectionResult;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'errorCode'         => 'ErrorCode',
        'inspectionMessage' => 'InspectionMessage',
        'inspectionResult'  => 'InspectionResult',
        'taskStatus'        => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->inspectionMessage) {
            $res['InspectionMessage'] = $this->inspectionMessage;
        }
        if (null !== $this->inspectionResult) {
            $res['InspectionResult'] = $this->inspectionResult;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inspectionTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['InspectionMessage'])) {
            $model->inspectionMessage = $map['InspectionMessage'];
        }
        if (isset($map['InspectionResult'])) {
            $model->inspectionResult = $map['InspectionResult'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
