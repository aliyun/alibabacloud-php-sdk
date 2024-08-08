<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class GetHpoTrialResponseBody extends Model
{
    /**
     * @description Error code.
     *
     * @example INVALID_INPUT_PARAMS
     *
     * @var string
     */
    public $code;

    /**
     * @description Extra error information.
     *
     * @var string[]
     */
    public $detail;

    /**
     * @description Experiment ID.
     *
     * @example abcde
     *
     * @var string
     */
    public $experimentId;

    /**
     * @description Final metric of the trial.
     *
     * @example {"default":0.087745,"type":"FINAL","val_loss=([0-9\\\\\\\\.]+)":0.087745}
     *
     * @var string
     */
    public $finalMetric;

    /**
     * @description Trial create time.
     *
     * @example 2024-01-02 12:34:56
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description Trial last update time.
     *
     * @example 2024-01-02 21:32:56
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description Hyperparameters used to run the trial.
     *
     * @example {"${centerCount}": 5, "${distanceType}": "cosine"}
     *
     * @var string
     */
    public $hyperparam;

    /**
     * @description trial meta infomation.
     *
     * @example {"nni_trial_id": "asdf", "nni_exp_id": "abcde", "nni_trial_sequence_id": 2}
     *
     * @var string
     */
    public $jobMeta;

    /**
     * @description The error message.
     *
     * @example Missing \\"user_id\\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @description metric details uploaded during running.
     *
     * @example [{"default":0.087745,"val_loss=([0-9\\\\\\\\.]+)":0.087745},
     * {"default":0.087745,"type":"FINAL","val_loss=([0-9\\\\\\\\.]+)":0.087745}]
     * @var string
     */
    public $metric;

    /**
     * @description Name of the metric.
     *
     * @example AUC or F1, Accuracy etc.
     *
     * @var string
     */
    public $metricName;

    /**
     * @description Trial output model.
     *
     * @example model_table_name_foo
     *
     * @var string
     */
    public $model;

    /**
     * @description Parameter id, start from 0.
     *
     * @example 0
     *
     * @var int
     */
    public $parameterId;

    /**
     * @description The request ID.
     *
     * @example 3F190916-B3E5-5D1E-AD0C-35C0DF105F51
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Trial status.
     *
     * @example FINISHED, FAILED, USER_CANCELED
     *
     * @var string
     */
    public $status;

    /**
     * @description Trail ID.
     *
     * @example mf99W4
     *
     * @var string
     */
    public $trialId;

    /**
     * @description User added comments.
     *
     * @example best trial till now.
     *
     * @var string
     */
    public $userComment;

    /**
     * @description User updated score.
     *
     * @example 0
     *
     * @var int
     */
    public $userScore;
    protected $_name = [
        'code'            => 'Code',
        'detail'          => 'Detail',
        'experimentId'    => 'ExperimentId',
        'finalMetric'     => 'FinalMetric',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'hyperparam'      => 'Hyperparam',
        'jobMeta'         => 'JobMeta',
        'message'         => 'Message',
        'metric'          => 'Metric',
        'metricName'      => 'MetricName',
        'model'           => 'Model',
        'parameterId'     => 'ParameterId',
        'requestId'       => 'RequestId',
        'status'          => 'Status',
        'trialId'         => 'TrialId',
        'userComment'     => 'UserComment',
        'userScore'       => 'UserScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->finalMetric) {
            $res['FinalMetric'] = $this->finalMetric;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->hyperparam) {
            $res['Hyperparam'] = $this->hyperparam;
        }
        if (null !== $this->jobMeta) {
            $res['JobMeta'] = $this->jobMeta;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->parameterId) {
            $res['ParameterId'] = $this->parameterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trialId) {
            $res['TrialId'] = $this->trialId;
        }
        if (null !== $this->userComment) {
            $res['UserComment'] = $this->userComment;
        }
        if (null !== $this->userScore) {
            $res['UserScore'] = $this->userScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHpoTrialResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['FinalMetric'])) {
            $model->finalMetric = $map['FinalMetric'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Hyperparam'])) {
            $model->hyperparam = $map['Hyperparam'];
        }
        if (isset($map['JobMeta'])) {
            $model->jobMeta = $map['JobMeta'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['ParameterId'])) {
            $model->parameterId = $map['ParameterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrialId'])) {
            $model->trialId = $map['TrialId'];
        }
        if (isset($map['UserComment'])) {
            $model->userComment = $map['UserComment'];
        }
        if (isset($map['UserScore'])) {
            $model->userScore = $map['UserScore'];
        }

        return $model;
    }
}
