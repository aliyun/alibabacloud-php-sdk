<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $creatorName;
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
     * @var mixed[]
     */
    public $labels;
    /**
     * @var LocalVariable[]
     */
    public $localVariables;
    /**
     * @var Logging
     */
    public $logging;
    /**
     * @var string
     */
    public $modifiedAt;
    /**
     * @var string
     */
    public $modifier;
    /**
     * @var string
     */
    public $modifierName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $referencedDeploymentDraftId;
    /**
     * @var StreamingResourceSetting
     */
    public $streamingResourceSetting;
    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'artifact'                    => 'artifact',
        'batchResourceSetting'        => 'batchResourceSetting',
        'createdAt'                   => 'createdAt',
        'creator'                     => 'creator',
        'creatorName'                 => 'creatorName',
        'deploymentHasChanged'        => 'deploymentHasChanged',
        'deploymentId'                => 'deploymentId',
        'deploymentTarget'            => 'deploymentTarget',
        'description'                 => 'description',
        'engineVersion'               => 'engineVersion',
        'executionMode'               => 'executionMode',
        'flinkConf'                   => 'flinkConf',
        'jobSummary'                  => 'jobSummary',
        'labels'                      => 'labels',
        'localVariables'              => 'localVariables',
        'logging'                     => 'logging',
        'modifiedAt'                  => 'modifiedAt',
        'modifier'                    => 'modifier',
        'modifierName'                => 'modifierName',
        'name'                        => 'name',
        'namespace'                   => 'namespace',
        'referencedDeploymentDraftId' => 'referencedDeploymentDraftId',
        'streamingResourceSetting'    => 'streamingResourceSetting',
        'workspace'                   => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->artifact) {
            $this->artifact->validate();
        }
        if (null !== $this->batchResourceSetting) {
            $this->batchResourceSetting->validate();
        }
        if (null !== $this->deploymentTarget) {
            $this->deploymentTarget->validate();
        }
        if (\is_array($this->flinkConf)) {
            Model::validateArray($this->flinkConf);
        }
        if (null !== $this->jobSummary) {
            $this->jobSummary->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->localVariables)) {
            Model::validateArray($this->localVariables);
        }
        if (null !== $this->logging) {
            $this->logging->validate();
        }
        if (null !== $this->streamingResourceSetting) {
            $this->streamingResourceSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifact) {
            $res['artifact'] = null !== $this->artifact ? $this->artifact->toArray($noStream) : $this->artifact;
        }

        if (null !== $this->batchResourceSetting) {
            $res['batchResourceSetting'] = null !== $this->batchResourceSetting ? $this->batchResourceSetting->toArray($noStream) : $this->batchResourceSetting;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
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
            $res['deploymentTarget'] = null !== $this->deploymentTarget ? $this->deploymentTarget->toArray($noStream) : $this->deploymentTarget;
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
            if (\is_array($this->flinkConf)) {
                $res['flinkConf'] = [];
                foreach ($this->flinkConf as $key1 => $value1) {
                    $res['flinkConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->jobSummary) {
            $res['jobSummary'] = null !== $this->jobSummary ? $this->jobSummary->toArray($noStream) : $this->jobSummary;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->localVariables) {
            if (\is_array($this->localVariables)) {
                $res['localVariables'] = [];
                $n1                    = 0;
                foreach ($this->localVariables as $item1) {
                    $res['localVariables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toArray($noStream) : $this->logging;
        }

        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
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

        if (null !== $this->referencedDeploymentDraftId) {
            $res['referencedDeploymentDraftId'] = $this->referencedDeploymentDraftId;
        }

        if (null !== $this->streamingResourceSetting) {
            $res['streamingResourceSetting'] = null !== $this->streamingResourceSetting ? $this->streamingResourceSetting->toArray($noStream) : $this->streamingResourceSetting;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['artifact'])) {
            $model->artifact = Artifact::fromMap($map['artifact']);
        }

        if (isset($map['batchResourceSetting'])) {
            $model->batchResourceSetting = BatchResourceSetting::fromMap($map['batchResourceSetting']);
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
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
            if (!empty($map['flinkConf'])) {
                $model->flinkConf = [];
                foreach ($map['flinkConf'] as $key1 => $value1) {
                    $model->flinkConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['jobSummary'])) {
            $model->jobSummary = JobSummary::fromMap($map['jobSummary']);
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['localVariables'])) {
            if (!empty($map['localVariables'])) {
                $model->localVariables = [];
                $n1                    = 0;
                foreach ($map['localVariables'] as $item1) {
                    $model->localVariables[$n1++] = LocalVariable::fromMap($item1);
                }
            }
        }

        if (isset($map['logging'])) {
            $model->logging = Logging::fromMap($map['logging']);
        }

        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
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

        if (isset($map['referencedDeploymentDraftId'])) {
            $model->referencedDeploymentDraftId = $map['referencedDeploymentDraftId'];
        }

        if (isset($map['streamingResourceSetting'])) {
            $model->streamingResourceSetting = StreamingResourceSetting::fromMap($map['streamingResourceSetting']);
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
