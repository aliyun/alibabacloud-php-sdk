<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
     * @example 00000000-0000-0000-0000-00000012****
     *
     * @var string
     */
    public $deploymentDraftId;

    /**
     * @example vvr-6.0.7-flink-1.15
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example STREAMING
     *
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
     * @example test-draft
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
     * @example 00000000-0000-0000-0000-00000013****
     *
     * @var string
     */
    public $parentId;

    /**
     * @example 00000000-0000-0000-0000-0000012312****
     *
     * @var string
     */
    public $referencedDeploymentId;

    /**
     * @example edcef******b4f
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'artifact'               => 'artifact',
        'createdAt'              => 'createdAt',
        'creator'                => 'creator',
        'creatorName'            => 'creatorName',
        'deploymentDraftId'      => 'deploymentDraftId',
        'engineVersion'          => 'engineVersion',
        'executionMode'          => 'executionMode',
        'labels'                 => 'labels',
        'localVariables'         => 'localVariables',
        'lock'                   => 'lock',
        'modifiedAt'             => 'modifiedAt',
        'modifier'               => 'modifier',
        'modifierName'           => 'modifierName',
        'name'                   => 'name',
        'namespace'              => 'namespace',
        'parentId'               => 'parentId',
        'referencedDeploymentId' => 'referencedDeploymentId',
        'workspace'              => 'workspace',
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
            $res['labels'] = $this->labels;
        }
        if (null !== $this->localVariables) {
            $res['localVariables'] = [];
            if (null !== $this->localVariables && \is_array($this->localVariables)) {
                $n = 0;
                foreach ($this->localVariables as $item) {
                    $res['localVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lock) {
            $res['lock'] = null !== $this->lock ? $this->lock->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DeploymentDraft
     */
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
            $model->labels = $map['labels'];
        }
        if (isset($map['localVariables'])) {
            if (!empty($map['localVariables'])) {
                $model->localVariables = [];
                $n                     = 0;
                foreach ($map['localVariables'] as $item) {
                    $model->localVariables[$n++] = null !== $item ? LocalVariable::fromMap($item) : $item;
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
