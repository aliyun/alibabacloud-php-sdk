<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class GetHpoExperimentResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $configIni;

    /**
     * @var string
     */
    public $configYml;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $detail;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var mixed[]
     */
    public $hpoExperimentConfiguration;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $searchSpace;

    /**
     * @example SUCCESS, FAILED_CREATE_EXP
     *
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $trialCount;

    /**
     * @var string[]
     */
    public $trialStatus;

    /**
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
