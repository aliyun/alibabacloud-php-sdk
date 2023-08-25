<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class Detail extends Model
{
    /**
     * @example BATCH
     *
     * @var string
     */
    public $appType;

    /**
     * @example amv-bp11q28kv****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example {     "name": "SparkPi",     "file": "local:///tmp/spark-examples.jar",     "className": "org.apache.spark.examples.SparkPi",     "args": [         "1000000"     ],     "conf": {         "spark.driver.resourceSpec": "small",         "spark.executor.instances": 1,         "spark.executor.resourceSpec": "small"     } }
     *
     * @var string
     */
    public $data;

    /**
     * @example 100
     *
     * @var int
     */
    public $durationInMillis;

    /**
     * @example 100
     *
     * @var int
     */
    public $estimateExecutionCpuTimeInSeconds;

    /**
     * @example s202204291426hzpre60cfa*****-0003
     *
     * @var string
     */
    public $lastAttemptId;

    /**
     * @example 1651213645200
     *
     * @var int
     */
    public $lastUpdatedTimeInMillis;

    /**
     * @example oss://<bucket-name>/logs/driver
     *
     * @var string
     */
    public $logRootPath;

    /**
     * @example spark-rg
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @example 1651213645010
     *
     * @var int
     */
    public $startedTimeInMillis;

    /**
     * @example 1651213645000
     *
     * @var int
     */
    public $submittedTimeInMillis;

    /**
     * @example 1651213645300
     *
     * @var int
     */
    public $terminatedTimeInMillis;

    /**
     * @example https://sparkui.aliyuncs.com/token=xxx
     *
     * @var string
     */
    public $webUiAddress;
    protected $_name = [
        'appType'                           => 'AppType',
        'DBClusterId'                       => 'DBClusterId',
        'data'                              => 'Data',
        'durationInMillis'                  => 'DurationInMillis',
        'estimateExecutionCpuTimeInSeconds' => 'EstimateExecutionCpuTimeInSeconds',
        'lastAttemptId'                     => 'LastAttemptId',
        'lastUpdatedTimeInMillis'           => 'LastUpdatedTimeInMillis',
        'logRootPath'                       => 'LogRootPath',
        'resourceGroupName'                 => 'ResourceGroupName',
        'startedTimeInMillis'               => 'StartedTimeInMillis',
        'submittedTimeInMillis'             => 'SubmittedTimeInMillis',
        'terminatedTimeInMillis'            => 'TerminatedTimeInMillis',
        'webUiAddress'                      => 'WebUiAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->durationInMillis) {
            $res['DurationInMillis'] = $this->durationInMillis;
        }
        if (null !== $this->estimateExecutionCpuTimeInSeconds) {
            $res['EstimateExecutionCpuTimeInSeconds'] = $this->estimateExecutionCpuTimeInSeconds;
        }
        if (null !== $this->lastAttemptId) {
            $res['LastAttemptId'] = $this->lastAttemptId;
        }
        if (null !== $this->lastUpdatedTimeInMillis) {
            $res['LastUpdatedTimeInMillis'] = $this->lastUpdatedTimeInMillis;
        }
        if (null !== $this->logRootPath) {
            $res['LogRootPath'] = $this->logRootPath;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->startedTimeInMillis) {
            $res['StartedTimeInMillis'] = $this->startedTimeInMillis;
        }
        if (null !== $this->submittedTimeInMillis) {
            $res['SubmittedTimeInMillis'] = $this->submittedTimeInMillis;
        }
        if (null !== $this->terminatedTimeInMillis) {
            $res['TerminatedTimeInMillis'] = $this->terminatedTimeInMillis;
        }
        if (null !== $this->webUiAddress) {
            $res['WebUiAddress'] = $this->webUiAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DurationInMillis'])) {
            $model->durationInMillis = $map['DurationInMillis'];
        }
        if (isset($map['EstimateExecutionCpuTimeInSeconds'])) {
            $model->estimateExecutionCpuTimeInSeconds = $map['EstimateExecutionCpuTimeInSeconds'];
        }
        if (isset($map['LastAttemptId'])) {
            $model->lastAttemptId = $map['LastAttemptId'];
        }
        if (isset($map['LastUpdatedTimeInMillis'])) {
            $model->lastUpdatedTimeInMillis = $map['LastUpdatedTimeInMillis'];
        }
        if (isset($map['LogRootPath'])) {
            $model->logRootPath = $map['LogRootPath'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['StartedTimeInMillis'])) {
            $model->startedTimeInMillis = $map['StartedTimeInMillis'];
        }
        if (isset($map['SubmittedTimeInMillis'])) {
            $model->submittedTimeInMillis = $map['SubmittedTimeInMillis'];
        }
        if (isset($map['TerminatedTimeInMillis'])) {
            $model->terminatedTimeInMillis = $map['TerminatedTimeInMillis'];
        }
        if (isset($map['WebUiAddress'])) {
            $model->webUiAddress = $map['WebUiAddress'];
        }

        return $model;
    }
}
