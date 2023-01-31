<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetTaskByUuidResponseBody;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example 1640090211434
     *
     * @var int
     */
    public $actualTime;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $callId;

    /**
     * @example 13777777777
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 057190294
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example 1640090211434
     *
     * @var int
     */
    public $endReason;

    /**
     * @example 1640090211434
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 2
     *
     * @var string
     */
    public $id;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1640090211434
     *
     * @var int
     */
    public $plannedTime;
    protected $_name = [
        'actualTime'    => 'ActualTime',
        'callId'        => 'CallId',
        'calledNumber'  => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'endReason'     => 'EndReason',
        'endTime'       => 'EndTime',
        'id'            => 'Id',
        'instanceId'    => 'InstanceId',
        'jobGroupId'    => 'JobGroupId',
        'jobId'         => 'JobId',
        'plannedTime'   => 'PlannedTime',
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
        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->plannedTime) {
            $res['PlannedTime'] = $this->plannedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
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
        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PlannedTime'])) {
            $model->plannedTime = $map['PlannedTime'];
        }

        return $model;
    }
}
