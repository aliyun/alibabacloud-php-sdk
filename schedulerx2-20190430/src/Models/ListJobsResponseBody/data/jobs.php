<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\jobMonitorInfo;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\mapTaskXAttrs;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\timeConfig;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @var int
     */
    public $attemptInterval;

    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executeMode;

    /**
     * @var string
     */
    public $jarUrl;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var jobMonitorInfo
     */
    public $jobMonitorInfo;

    /**
     * @var mapTaskXAttrs
     */
    public $mapTaskXAttrs;

    /**
     * @var int
     */
    public $maxAttempt;

    /**
     * @var string
     */
    public $maxConcurrency;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var int
     */
    public $status;

    /**
     * @var timeConfig
     */
    public $timeConfig;
    protected $_name = [
        'attemptInterval' => 'AttemptInterval',
        'className'       => 'ClassName',
        'content'         => 'Content',
        'description'     => 'Description',
        'executeMode'     => 'ExecuteMode',
        'jarUrl'          => 'JarUrl',
        'jobId'           => 'JobId',
        'jobMonitorInfo'  => 'JobMonitorInfo',
        'mapTaskXAttrs'   => 'MapTaskXAttrs',
        'maxAttempt'      => 'MaxAttempt',
        'maxConcurrency'  => 'MaxConcurrency',
        'name'            => 'Name',
        'parameters'      => 'Parameters',
        'status'          => 'Status',
        'timeConfig'      => 'TimeConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attemptInterval) {
            $res['AttemptInterval'] = $this->attemptInterval;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executeMode) {
            $res['ExecuteMode'] = $this->executeMode;
        }
        if (null !== $this->jarUrl) {
            $res['JarUrl'] = $this->jarUrl;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobMonitorInfo) {
            $res['JobMonitorInfo'] = null !== $this->jobMonitorInfo ? $this->jobMonitorInfo->toMap() : null;
        }
        if (null !== $this->mapTaskXAttrs) {
            $res['MapTaskXAttrs'] = null !== $this->mapTaskXAttrs ? $this->mapTaskXAttrs->toMap() : null;
        }
        if (null !== $this->maxAttempt) {
            $res['MaxAttempt'] = $this->maxAttempt;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeConfig) {
            $res['TimeConfig'] = null !== $this->timeConfig ? $this->timeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttemptInterval'])) {
            $model->attemptInterval = $map['AttemptInterval'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecuteMode'])) {
            $model->executeMode = $map['ExecuteMode'];
        }
        if (isset($map['JarUrl'])) {
            $model->jarUrl = $map['JarUrl'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobMonitorInfo'])) {
            $model->jobMonitorInfo = jobMonitorInfo::fromMap($map['JobMonitorInfo']);
        }
        if (isset($map['MapTaskXAttrs'])) {
            $model->mapTaskXAttrs = mapTaskXAttrs::fromMap($map['MapTaskXAttrs']);
        }
        if (isset($map['MaxAttempt'])) {
            $model->maxAttempt = $map['MaxAttempt'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeConfig'])) {
            $model->timeConfig = timeConfig::fromMap($map['TimeConfig']);
        }

        return $model;
    }
}
