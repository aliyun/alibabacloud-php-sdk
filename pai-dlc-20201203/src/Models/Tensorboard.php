<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class Tensorboard extends Model
{
    /**
     * @example datasource-test
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $duration;

    /**
     * @example 2021-01-12T14:35:00Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T14:36:00Z
     *
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @example dlc-20210114104214-vf9lowjt3pso
     *
     * @var string
     */
    public $jobId;

    /**
     * @example Delete by user
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @example Tensorboard is deleted
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example /root/data
     *
     * @var string
     */
    public $summaryPath;

    /**
     * @example tensorboard-xxx
     *
     * @var string
     */
    public $tensorboardId;

    /**
     * @example http://xxxxxx
     *
     * @var string
     */
    public $tensorboardUrl;

    /**
     * @example lycxxxxx
     *
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
