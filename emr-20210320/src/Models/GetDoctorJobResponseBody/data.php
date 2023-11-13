<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the job that was submitted to YARN.
     *
     * @example application_1542620905989_****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the job.
     *
     * @example CREATE TABLE test...ranks=1 (Stage-1)
     *
     * @var string
     */
    public $appName;

    /**
     * @description The total running time of the job. Unit: milliseconds.
     *
     * @example 278
     *
     * @var int
     */
    public $elapsedTime;

    /**
     * @description The final state of the job. Valid values:
     *
     *   SUCCEEDED
     *   FAILED
     *   KILLED
     *   ENDED
     *   UNDEFINED
     *
     * @example KILLED
     *
     * @var string
     */
    public $finalStatus;

    /**
     * @description The time when the job ended. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Unit: milliseconds.
     *
     * @example 1658388322000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The time when the job was started. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Unit: milliseconds.
     *
     * @example 1665014400000
     *
     * @var int
     */
    public $launchTime;

    /**
     * @description The data about metrics.
     *
     * @var metrics
     */
    public $metrics;

    /**
     * @description The YARN queue to which the job was submitted.
     *
     * @example DW
     *
     * @var string
     */
    public $queue;

    /**
     * @description The time when the job was submitted. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Unit: milliseconds.
     *
     * @example 1673946000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The running state of the job. Valid values:
     *
     *   FINISHED
     *   FAILED
     *   KILLED
     *
     * @example FINISHED
     *
     * @var string
     */
    public $state;

    /**
     * @description The type of the compute engine.
     *
     * @example SPARK
     *
     * @var string
     */
    public $type;

    /**
     * @description The username that was used to submit the job.
     *
     * @example DW
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'elapsedTime' => 'ElapsedTime',
        'finalStatus' => 'FinalStatus',
        'finishTime'  => 'FinishTime',
        'launchTime'  => 'LaunchTime',
        'metrics'     => 'Metrics',
        'queue'       => 'Queue',
        'startTime'   => 'StartTime',
        'state'       => 'State',
        'type'        => 'Type',
        'user'        => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->finalStatus) {
            $res['FinalStatus'] = $this->finalStatus;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['FinalStatus'])) {
            $model->finalStatus = $map['FinalStatus'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
