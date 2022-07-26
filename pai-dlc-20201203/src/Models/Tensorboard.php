<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class Tensorboard extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summaryPath;

    /**
     * @var string
     */
    public $tensorboardId;

    /**
     * @var string
     */
    public $tensorboardUrl;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'dataSourceId'   => 'DataSourceId',
        'displayName'    => 'DisplayName',
        'duration'       => 'Duration',
        'gmtCreateTime'  => 'GmtCreateTime',
        'gmtModifyTime'  => 'GmtModifyTime',
        'jobId'          => 'JobId',
        'reasonCode'     => 'ReasonCode',
        'reasonMessage'  => 'ReasonMessage',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
        'summaryPath'    => 'SummaryPath',
        'tensorboardId'  => 'TensorboardId',
        'tensorboardUrl' => 'TensorboardUrl',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->summaryPath) {
            $res['SummaryPath'] = $this->summaryPath;
        }
        if (null !== $this->tensorboardId) {
            $res['TensorboardId'] = $this->tensorboardId;
        }
        if (null !== $this->tensorboardUrl) {
            $res['TensorboardUrl'] = $this->tensorboardUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Tensorboard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SummaryPath'])) {
            $model->summaryPath = $map['SummaryPath'];
        }
        if (isset($map['TensorboardId'])) {
            $model->tensorboardId = $map['TensorboardId'];
        }
        if (isset($map['TensorboardUrl'])) {
            $model->tensorboardUrl = $map['TensorboardUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
