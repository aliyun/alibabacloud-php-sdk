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
     * @var bool
     */
    public $deploymentHasChanged;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var BriefDeploymentTarget
     */
    public $deploymentTarget;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $executionMode;

    /**
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
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'artifact'             => 'artifact',
        'deploymentHasChanged' => 'deploymentHasChanged',
        'deploymentId'         => 'deploymentId',
        'deploymentTarget'     => 'deploymentTarget',
        'description'          => 'description',
        'engineVersion'        => 'engineVersion',
        'executionMode'        => 'executionMode',
        'flinkConf'            => 'flinkConf',
        'jobSummary'           => 'jobSummary',
        'logging'              => 'logging',
        'name'                 => 'name',
        'namespace'            => 'namespace',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        return $model;
    }
}
