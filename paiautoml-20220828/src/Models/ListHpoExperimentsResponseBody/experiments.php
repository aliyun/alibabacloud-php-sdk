<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentsResponseBody;

use AlibabaCloud\Tea\Model;

class experiments extends Model
{
    /**
     * @description Experiment accessibility, private or public.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description Experiment job run environment configurations.
     *
     * @example [odps_config]
     * key2 = value2
     * @var string
     */
    public $configIni;

    /**
     * @description HPO experiment run configuration.
     *
     * @example experimentName: dlc_oss_mnist
     * start_step: 2
     * @var string
     */
    public $configYml;

    /**
     * @description The one who created the experiment.
     *
     * @example 1049310008714189
     *
     * @var string
     */
    public $creator;

    /**
     * @description If the experiment is deleted.
     *
     * @example 1
     *
     * @var bool
     */
    public $deleted;

    /**
     * @description The description of the experiment.
     *
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @description Experiment ID.
     *
     * @example sORVEck
     *
     * @var string
     */
    public $experimentId;

    /**
     * @description Experiment Create Time.
     *
     * @example 2023-03-31T10:29:30Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description Last modified time.
     *
     * @example 2022-10-27T00:55:54Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description Experimetn job type.
     *
     * @example 1
     *
     * @var string
     */
    public $jobType;

    /**
     * @description Experiment name
     *
     * @example my experiment x
     *
     * @var string
     */
    public $name;

    /**
     * @description Experiment hyperparameter search space.
     *
     * @example {\\"foo\\":\\"bar\\"}
     *
     * @var string
     */
    public $searchSpace;

    /**
     * @description Experiment status.
     *
     * @example CREATED, RUNNING, FINISHED, FAILED, EARLY_STOPPED, USER_CANCELED, SYS_CANCELED, WAITING, NO_MORE_TRIAL, UNKNOWN
     *
     * @var string
     */
    public $status;

    /**
     * @description How many trials the experiment have.
     *
     * @example 20
     *
     * @var int
     */
    public $trialCount;

    /**
     * @description Trial status map.
     *
     * @var string[]
     */
    public $trialStatus;

    /**
     * @description The ID of the AI workspace.
     *
     * @example foo
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'   => 'Accessibility',
        'configIni'       => 'ConfigIni',
        'configYml'       => 'ConfigYml',
        'creator'         => 'Creator',
        'deleted'         => 'Deleted',
        'description'     => 'Description',
        'experimentId'    => 'ExperimentId',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'jobType'         => 'JobType',
        'name'            => 'Name',
        'searchSpace'     => 'SearchSpace',
        'status'          => 'Status',
        'trialCount'      => 'TrialCount',
        'trialStatus'     => 'TrialStatus',
        'workspaceId'     => 'WorkspaceId',
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
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return experiments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
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
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
