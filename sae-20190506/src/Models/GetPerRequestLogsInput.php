<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetPerRequestLogsInput extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var int
     */
    public $forwardLine;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var bool
     */
    public $isColdStart;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $requestID;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'endTime'     => 'endTime',
        'errorType'   => 'errorType',
        'forwardLine' => 'forwardLine',
        'instanceID'  => 'instanceID',
        'isColdStart' => 'isColdStart',
        'requestID'   => 'requestID',
        'startTime'   => 'startTime',
        'timestamp'   => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->errorType) {
            $res['errorType'] = $this->errorType;
        }
        if (null !== $this->forwardLine) {
            $res['forwardLine'] = $this->forwardLine;
        }
        if (null !== $this->instanceID) {
            $res['instanceID'] = $this->instanceID;
        }
        if (null !== $this->isColdStart) {
            $res['isColdStart'] = $this->isColdStart;
        }
        if (null !== $this->requestID) {
            $res['requestID'] = $this->requestID;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPerRequestLogsInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['errorType'])) {
            $model->errorType = $map['errorType'];
        }
        if (isset($map['forwardLine'])) {
            $model->forwardLine = $map['forwardLine'];
        }
        if (isset($map['instanceID'])) {
            $model->instanceID = $map['instanceID'];
        }
        if (isset($map['isColdStart'])) {
            $model->isColdStart = $map['isColdStart'];
        }
        if (isset($map['requestID'])) {
            $model->requestID = $map['requestID'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
