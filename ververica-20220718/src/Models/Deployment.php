<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Deployment extends Model
{
    /**
     * @var Artifact
     */
    public $artifact;

    /**
     * @var BatchResourceSetting
     */
    public $batchResourceSetting;

    /**
     * @example 27846363877456****
     *
     * @var string
     */
    public $creator;

    /**
     * @example ****@streamcompute.onaliyun.com
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example true
     *
     * @var bool
     */
    public $deploymentHasChanged;

    /**
     * @example 00000000-0000-0000-0000-000000000001
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @var BriefDeploymentTarget
     */
    public $deploymentTarget;

    /**
     * @example this is a deployment description
     *
     * @var string
     */
    public $description;

    /**
     * @example vvr-6.0.0-flink-1.15
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example STREAMING | BATCH
     *
     * @var string
     */
    public $executionMode;

    /**
     * @example {"taskmanager.numberOfTaskSlots":"1"}
     *
     * @var mixed[]
     */
    public $flinkConf;

    /**
     * @var JobSummary
     */
    public $jobSummary;

    /**
     * @var Logging
     */
    public $logging;

    /**
     * @example 27846363877456****
     *
     * @var string
     */
    public $modifier;

    /**
     * @example ****@streamcompute.onaliyun.com
     *
     * @var string
     */
    public $modifierName;

    /**
     * @example deploymentName
     *
     * @var string
     */
    public $name;

    /**
     * @example default-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @var StreamingResourceSetting
     */
    public $streamingResourceSetting;
    protected $_name = [
        'artifact'                 => 'artifact',
        'batchResourceSetting'     => 'batchResourceSetting',
        'creator'                  => 'creator',
        'creatorName'              => 'creatorName',
        'deploymentHasChanged'     => 'deploymentHasChanged',
        'deploymentId'             => 'deploymentId',
        'deploymentTarget'         => 'deploymentTarget',
        'description'              => 'description',
        'engineVersion'            => 'engineVersion',
        'executionMode'            => 'executionMode',
        'flinkConf'                => 'flinkConf',
        'jobSummary'               => 'jobSummary',
        'logging'                  => 'logging',
        'modifier'                 => 'modifier',
        'modifierName'             => 'modifierName',
        'name'                     => 'name',
        'namespace'                => 'namespace',
        'streamingResourceSetting' => 'streamingResourceSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifact) {
            $res['artifact'] = null !== $this->artifact ? $this->artifact->toMap() : null;
        }
        if (null !== $this->batchResourceSetting) {
            $res['batchResourceSetting'] = null !== $this->batchResourceSetting ? $this->batchResourceSetting->toMap() : null;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }
        if (null !== $this->deploymentHasChanged) {
            $res['deploymentHasChanged'] = $this->deploymentHasChanged;
        }
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->deploymentTarget) {
            $res['deploymentTarget'] = null !== $this->deploymentTarget ? $this->deploymentTarget->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->engineVersion) {
            $res['engineVersion'] = $this->engineVersion;
        }
        if (null !== $this->executionMode) {
            $res['executionMode'] = $this->executionMode;
        }
        if (null !== $this->flinkConf) {
            $res['flinkConf'] = $this->flinkConf;
        }
        if (null !== $this->jobSummary) {
            $res['jobSummary'] = null !== $this->jobSummary ? $this->jobSummary->toMap() : null;
        }
        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toMap() : null;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->streamingResourceSetting) {
            $res['streamingResourceSetting'] = null !== $this->streamingResourceSetting ? $this->streamingResourceSetting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Deployment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['artifact'])) {
            $model->artifact = Artifact::fromMap($map['artifact']);
        }
        if (isset($map['batchResourceSetting'])) {
            $model->batchResourceSetting = BatchResourceSetting::fromMap($map['batchResourceSetting']);
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }
        if (isset($map['deploymentHasChanged'])) {
            $model->deploymentHasChanged = $map['deploymentHasChanged'];
        }
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['deploymentTarget'])) {
            $model->deploymentTarget = BriefDeploymentTarget::fromMap($map['deploymentTarget']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['engineVersion'])) {
            $model->engineVersion = $map['engineVersion'];
        }
        if (isset($map['executionMode'])) {
            $model->executionMode = $map['executionMode'];
        }
        if (isset($map['flinkConf'])) {
            $model->flinkConf = $map['flinkConf'];
        }
        if (isset($map['jobSummary'])) {
            $model->jobSummary = JobSummary::fromMap($map['jobSummary']);
        }
        if (isset($map['logging'])) {
            $model->logging = Logging::fromMap($map['logging']);
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['streamingResourceSetting'])) {
            $model->streamingResourceSetting = StreamingResourceSetting::fromMap($map['streamingResourceSetting']);
        }

        return $model;
    }
}
