<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobResponseBody\data\metrics;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var int
     */
    public $elapsedTime;
    /**
     * @var string
     */
    public $finalStatus;
    /**
     * @var int
     */
    public $finishTime;
    /**
     * @var int
     */
    public $launchTime;
    /**
     * @var metrics
     */
    public $metrics;
    /**
     * @var string
     */
    public $queue;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $type;
    /**
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
        if (null !== $this->metrics) {
            $this->metrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toArray($noStream) : $this->metrics;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
