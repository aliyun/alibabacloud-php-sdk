<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList;

use AlibabaCloud\Dara\Model;

class retryState extends Model
{
    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $maxRetryTime;

    /**
     * @var string
     */
    public $migrationErrCode;

    /**
     * @var string
     */
    public $migrationErrHelpDocId;

    /**
     * @var string
     */
    public $migrationErrHelpDocKey;

    /**
     * @var string
     */
    public $migrationErrMsg;

    /**
     * @var string
     */
    public $migrationErrType;

    /**
     * @var string
     */
    public $migrationErrWorkaround;

    /**
     * @var string
     */
    public $module;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var string
     */
    public $retryTarget;

    /**
     * @var int
     */
    public $retryTime;

    /**
     * @var bool
     */
    public $retrying;
    protected $_name = [
        'errMessage' => 'ErrMessage',
        'jobId' => 'JobId',
        'maxRetryTime' => 'MaxRetryTime',
        'migrationErrCode' => 'MigrationErrCode',
        'migrationErrHelpDocId' => 'MigrationErrHelpDocId',
        'migrationErrHelpDocKey' => 'MigrationErrHelpDocKey',
        'migrationErrMsg' => 'MigrationErrMsg',
        'migrationErrType' => 'MigrationErrType',
        'migrationErrWorkaround' => 'MigrationErrWorkaround',
        'module' => 'Module',
        'retryCount' => 'RetryCount',
        'retryTarget' => 'RetryTarget',
        'retryTime' => 'RetryTime',
        'retrying' => 'Retrying',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->maxRetryTime) {
            $res['MaxRetryTime'] = $this->maxRetryTime;
        }

        if (null !== $this->migrationErrCode) {
            $res['MigrationErrCode'] = $this->migrationErrCode;
        }

        if (null !== $this->migrationErrHelpDocId) {
            $res['MigrationErrHelpDocId'] = $this->migrationErrHelpDocId;
        }

        if (null !== $this->migrationErrHelpDocKey) {
            $res['MigrationErrHelpDocKey'] = $this->migrationErrHelpDocKey;
        }

        if (null !== $this->migrationErrMsg) {
            $res['MigrationErrMsg'] = $this->migrationErrMsg;
        }

        if (null !== $this->migrationErrType) {
            $res['MigrationErrType'] = $this->migrationErrType;
        }

        if (null !== $this->migrationErrWorkaround) {
            $res['MigrationErrWorkaround'] = $this->migrationErrWorkaround;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        if (null !== $this->retryTarget) {
            $res['RetryTarget'] = $this->retryTarget;
        }

        if (null !== $this->retryTime) {
            $res['RetryTime'] = $this->retryTime;
        }

        if (null !== $this->retrying) {
            $res['Retrying'] = $this->retrying;
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
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['MaxRetryTime'])) {
            $model->maxRetryTime = $map['MaxRetryTime'];
        }

        if (isset($map['MigrationErrCode'])) {
            $model->migrationErrCode = $map['MigrationErrCode'];
        }

        if (isset($map['MigrationErrHelpDocId'])) {
            $model->migrationErrHelpDocId = $map['MigrationErrHelpDocId'];
        }

        if (isset($map['MigrationErrHelpDocKey'])) {
            $model->migrationErrHelpDocKey = $map['MigrationErrHelpDocKey'];
        }

        if (isset($map['MigrationErrMsg'])) {
            $model->migrationErrMsg = $map['MigrationErrMsg'];
        }

        if (isset($map['MigrationErrType'])) {
            $model->migrationErrType = $map['MigrationErrType'];
        }

        if (isset($map['MigrationErrWorkaround'])) {
            $model->migrationErrWorkaround = $map['MigrationErrWorkaround'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        if (isset($map['RetryTarget'])) {
            $model->retryTarget = $map['RetryTarget'];
        }

        if (isset($map['RetryTime'])) {
            $model->retryTime = $map['RetryTime'];
        }

        if (isset($map['Retrying'])) {
            $model->retrying = $map['Retrying'];
        }

        return $model;
    }
}
