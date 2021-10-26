<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class StatefulAsyncInvocation extends Model
{
    /**
     * @description alreadyRetriedTimes
     *
     * @var int
     */
    public $alreadyRetriedTimes;

    /**
     * @description destinationStatus
     *
     * @var string
     */
    public $destinationStatus;

    /**
     * @description endTime
     *
     * @var int
     */
    public $endTime;

    /**
     * @description functionName
     *
     * @var string
     */
    public $functionName;

    /**
     * @description invocationErrorMessage
     *
     * @var string
     */
    public $invocationErrorMessage;

    /**
     * @description invocationId
     *
     * @var string
     */
    public $invocationId;

    /**
     * @description invocationPayload
     *
     * @var string
     */
    public $invocationPayload;

    /**
     * @description qualifier
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description serviceName
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description startedTime
     *
     * @var int
     */
    public $startedTime;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'alreadyRetriedTimes'    => 'alreadyRetriedTimes',
        'destinationStatus'      => 'destinationStatus',
        'endTime'                => 'endTime',
        'functionName'           => 'functionName',
        'invocationErrorMessage' => 'invocationErrorMessage',
        'invocationId'           => 'invocationId',
        'invocationPayload'      => 'invocationPayload',
        'qualifier'              => 'qualifier',
        'requestId'              => 'requestId',
        'serviceName'            => 'serviceName',
        'startedTime'            => 'startedTime',
        'status'                 => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alreadyRetriedTimes) {
            $res['alreadyRetriedTimes'] = $this->alreadyRetriedTimes;
        }
        if (null !== $this->destinationStatus) {
            $res['destinationStatus'] = $this->destinationStatus;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->invocationErrorMessage) {
            $res['invocationErrorMessage'] = $this->invocationErrorMessage;
        }
        if (null !== $this->invocationId) {
            $res['invocationId'] = $this->invocationId;
        }
        if (null !== $this->invocationPayload) {
            $res['invocationPayload'] = $this->invocationPayload;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->startedTime) {
            $res['startedTime'] = $this->startedTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StatefulAsyncInvocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alreadyRetriedTimes'])) {
            $model->alreadyRetriedTimes = $map['alreadyRetriedTimes'];
        }
        if (isset($map['destinationStatus'])) {
            $model->destinationStatus = $map['destinationStatus'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['invocationErrorMessage'])) {
            $model->invocationErrorMessage = $map['invocationErrorMessage'];
        }
        if (isset($map['invocationId'])) {
            $model->invocationId = $map['invocationId'];
        }
        if (isset($map['invocationPayload'])) {
            $model->invocationPayload = $map['invocationPayload'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['startedTime'])) {
            $model->startedTime = $map['startedTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
