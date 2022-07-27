<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\pipelineConfig\sources;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var int
     */
    public $cloneDepth;

    /**
     * @var int
     */
    public $credentialId;

    /**
     * @var string
     */
    public $credentialLabel;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string[]
     */
    public $events;

    /**
     * @var bool
     */
    public $isBranchMode;

    /**
     * @var bool
     */
    public $isCloneDepth;

    /**
     * @var bool
     */
    public $isSubmodule;

    /**
     * @var bool
     */
    public $isTrigger;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $repo;

    /**
     * @var int
     */
    public $serviceConnectionId;

    /**
     * @var string
     */
    public $triggerFilter;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'branch'              => 'branch',
        'cloneDepth'          => 'cloneDepth',
        'credentialId'        => 'credentialId',
        'credentialLabel'     => 'credentialLabel',
        'credentialType'      => 'credentialType',
        'events'              => 'events',
        'isBranchMode'        => 'isBranchMode',
        'isCloneDepth'        => 'isCloneDepth',
        'isSubmodule'         => 'isSubmodule',
        'isTrigger'           => 'isTrigger',
        'label'               => 'label',
        'namespace'           => 'namespace',
        'repo'                => 'repo',
        'serviceConnectionId' => 'serviceConnectionId',
        'triggerFilter'       => 'triggerFilter',
        'webhook'             => 'webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->cloneDepth) {
            $res['cloneDepth'] = $this->cloneDepth;
        }
        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }
        if (null !== $this->credentialLabel) {
            $res['credentialLabel'] = $this->credentialLabel;
        }
        if (null !== $this->credentialType) {
            $res['credentialType'] = $this->credentialType;
        }
        if (null !== $this->events) {
            $res['events'] = $this->events;
        }
        if (null !== $this->isBranchMode) {
            $res['isBranchMode'] = $this->isBranchMode;
        }
        if (null !== $this->isCloneDepth) {
            $res['isCloneDepth'] = $this->isCloneDepth;
        }
        if (null !== $this->isSubmodule) {
            $res['isSubmodule'] = $this->isSubmodule;
        }
        if (null !== $this->isTrigger) {
            $res['isTrigger'] = $this->isTrigger;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->repo) {
            $res['repo'] = $this->repo;
        }
        if (null !== $this->serviceConnectionId) {
            $res['serviceConnectionId'] = $this->serviceConnectionId;
        }
        if (null !== $this->triggerFilter) {
            $res['triggerFilter'] = $this->triggerFilter;
        }
        if (null !== $this->webhook) {
            $res['webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['cloneDepth'])) {
            $model->cloneDepth = $map['cloneDepth'];
        }
        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }
        if (isset($map['credentialLabel'])) {
            $model->credentialLabel = $map['credentialLabel'];
        }
        if (isset($map['credentialType'])) {
            $model->credentialType = $map['credentialType'];
        }
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = $map['events'];
            }
        }
        if (isset($map['isBranchMode'])) {
            $model->isBranchMode = $map['isBranchMode'];
        }
        if (isset($map['isCloneDepth'])) {
            $model->isCloneDepth = $map['isCloneDepth'];
        }
        if (isset($map['isSubmodule'])) {
            $model->isSubmodule = $map['isSubmodule'];
        }
        if (isset($map['isTrigger'])) {
            $model->isTrigger = $map['isTrigger'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['repo'])) {
            $model->repo = $map['repo'];
        }
        if (isset($map['serviceConnectionId'])) {
            $model->serviceConnectionId = $map['serviceConnectionId'];
        }
        if (isset($map['triggerFilter'])) {
            $model->triggerFilter = $map['triggerFilter'];
        }
        if (isset($map['webhook'])) {
            $model->webhook = $map['webhook'];
        }

        return $model;
    }
}
