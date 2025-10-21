<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class DeploymentDraft extends Model
{
    /**
     * @var Artifact
     */
    public $artifact;

    /**
     * @var int
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
     * @var string
     */
    public $deploymentDraftId;

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
    public $labels;

    /**
     * @var LocalVariable[]
     */
    public $localVariables;

    /**
     * @var Lock
     */
    public $lock;

    /**
     * @var int
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
    public $parentId;

    /**
     * @var string
     */
    public $referencedDeploymentId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'artifact' => 'artifact',
        'createdAt' => 'createdAt',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'deploymentDraftId' => 'deploymentDraftId',
        'engineVersion' => 'engineVersion',
        'executionMode' => 'executionMode',
        'labels' => 'labels',
        'localVariables' => 'localVariables',
        'lock' => 'lock',
        'modifiedAt' => 'modifiedAt',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'name' => 'name',
        'namespace' => 'namespace',
        'parentId' => 'parentId',
        'referencedDeploymentId' => 'referencedDeploymentId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->artifact) {
            $this->artifact->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->localVariables)) {
            Model::validateArray($this->localVariables);
        }
        if (null !== $this->lock) {
            $this->lock->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifact) {
            $res['artifact'] = null !== $this->artifact ? $this->artifact->toArray($noStream) : $this->artifact;
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

        if (null !== $this->deploymentDraftId) {
            $res['deploymentDraftId'] = $this->deploymentDraftId;
        }

        if (null !== $this->engineVersion) {
            $res['engineVersion'] = $this->engineVersion;
        }

        if (null !== $this->executionMode) {
            $res['executionMode'] = $this->executionMode;
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
                $n1 = 0;
                foreach ($this->localVariables as $item1) {
                    $res['localVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lock) {
            $res['lock'] = null !== $this->lock ? $this->lock->toArray($noStream) : $this->lock;
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

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->referencedDeploymentId) {
            $res['referencedDeploymentId'] = $this->referencedDeploymentId;
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

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['deploymentDraftId'])) {
            $model->deploymentDraftId = $map['deploymentDraftId'];
        }

        if (isset($map['engineVersion'])) {
            $model->engineVersion = $map['engineVersion'];
        }

        if (isset($map['executionMode'])) {
            $model->executionMode = $map['executionMode'];
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
                $n1 = 0;
                foreach ($map['localVariables'] as $item1) {
                    $model->localVariables[$n1] = LocalVariable::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['lock'])) {
            $model->lock = Lock::fromMap($map['lock']);
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

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['referencedDeploymentId'])) {
            $model->referencedDeploymentId = $map['referencedDeploymentId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
