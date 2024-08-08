<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class GetHpoExperimentResponseBody extends Model
{
    /**
     * @description Accessibility of expriment, public or private.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description Error when the API call is not success.
     *
     * @example INVALID_INPUT_PARAMS
     *
     * @var string
     */
    public $code;

    /**
     * @description Experiment run environment configurations.
     *
     * @example [odps_config]
     * project_name=my_project
     * @var string
     */
    public $configIni;

    /**
     * @description HPO search config yaml.
     *
     * @example assessor:
     * name: TPE
     * @var string
     */
    public $configYml;

    /**
     * @description The one who created the experiment.
     *
     * @example 123456789
     *
     * @var string
     */
    public $creator;

    /**
     * @description If the Experiment if deleted.
     *
     * @example 0
     *
     * @var bool
     */
    public $deleted;

    /**
     * @description Description of the experiment.
     *
     * @example This is experiment is for tune the LR of model.
     *
     * @var string
     */
    public $description;

    /**
     * @description Extra error message info.
     *
     * @example TBD
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @description Experiment ID.
     *
     * @example sX5O9Q8
     *
     * @var string
     */
    public $experimentId;

    /**
     * @description Experiment create time.
     *
     * @example 2024-01-01 08:30:11
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description Experiment last update time.
     *
     * @example 2024-01-01 08:30:11
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description Experiment configuration in json format.
     *
     * @example {
     * "metric_source": [
     * "select * from my_metrics where pt=\\"${exp_id}_${trial_id}\\";"
     * }
     * @var mixed[]
     */
    public $hpoExperimentConfiguration;

    /**
     * @description Experiment  Job type.
     *
     * @example 1
     *
     * @var string
     */
    public $jobType;

    /**
     * @description Error message.
     *
     * @example Missing \\"user_id\\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @description Experiment name.
     *
     * @example my_hpo_exp_1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example 3F190916-B3E5-5D1E-AD0C-35C0DF105F51
     *
     * @var string
     */
    public $requestId;

    /**
     * @description HPO hyperparameter search space.
     *
     * @example {"${centerCount}":{"_type":"choice","_value":[2,3,4,5]},"${distanceType}":{"_type":"choice","_value":["euclidean","cosine","cityblock"]}}
     *
     * @var string
     */
    public $searchSpace;

    /**
     * @description Experiment status.
     *
     * @example INVALID_USER_OR_EXP, SUCCESS, or EXECUTION_FAILURE
     *
     * @var string
     */
    public $status;

    /**
     * @description Trials amount run till now.
     *
     * @example 3
     *
     * @var int
     */
    public $trialCount;

    /**
     * @description Status if a trial
     *
     * @var string[]
     */
    public $trialStatus;

    /**
     * @description AI Workspace ID.
     *
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'              => 'Accessibility',
        'code'                       => 'Code',
        'configIni'                  => 'ConfigIni',
        'configYml'                  => 'ConfigYml',
        'creator'                    => 'Creator',
        'deleted'                    => 'Deleted',
        'description'                => 'Description',
        'detail'                     => 'Detail',
        'experimentId'               => 'ExperimentId',
        'gmtCreateTime'              => 'GmtCreateTime',
        'gmtModifiedTime'            => 'GmtModifiedTime',
        'hpoExperimentConfiguration' => 'HpoExperimentConfiguration',
        'jobType'                    => 'JobType',
        'message'                    => 'Message',
        'name'                       => 'Name',
        'requestId'                  => 'RequestId',
        'searchSpace'                => 'SearchSpace',
        'status'                     => 'Status',
        'trialCount'                 => 'TrialCount',
        'trialStatus'                => 'TrialStatus',
        'workspaceId'                => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->configIni) {
            $res['ConfigIni'] = $this->configIni;
        }
        if (null !== $this->configYml) {
            $res['ConfigYml'] = $this->configYml;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->hpoExperimentConfiguration) {
            $res['HpoExperimentConfiguration'] = $this->hpoExperimentConfiguration;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->searchSpace) {
            $res['SearchSpace'] = $this->searchSpace;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trialCount) {
            $res['TrialCount'] = $this->trialCount;
        }
        if (null !== $this->trialStatus) {
            $res['TrialStatus'] = $this->trialStatus;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHpoExperimentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConfigIni'])) {
            $model->configIni = $map['ConfigIni'];
        }
        if (isset($map['ConfigYml'])) {
            $model->configYml = $map['ConfigYml'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['HpoExperimentConfiguration'])) {
            $model->hpoExperimentConfiguration = $map['HpoExperimentConfiguration'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SearchSpace'])) {
            $model->searchSpace = $map['SearchSpace'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrialCount'])) {
            $model->trialCount = $map['TrialCount'];
        }
        if (isset($map['TrialStatus'])) {
            $model->trialStatus = $map['TrialStatus'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
