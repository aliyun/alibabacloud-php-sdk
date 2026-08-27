<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginWorkspaceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $pipelineRunId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $wasmUrl;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'organizationId' => 'organizationId',
        'pipelineRunId' => 'pipelineRunId',
        'repoId' => 'repoId',
        'repoName' => 'repoName',
        'wasmUrl' => 'wasmUrl',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->pipelineRunId) {
            $res['pipelineRunId'] = $this->pipelineRunId;
        }

        if (null !== $this->repoId) {
            $res['repoId'] = $this->repoId;
        }

        if (null !== $this->repoName) {
            $res['repoName'] = $this->repoName;
        }

        if (null !== $this->wasmUrl) {
            $res['wasmUrl'] = $this->wasmUrl;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['pipelineRunId'])) {
            $model->pipelineRunId = $map['pipelineRunId'];
        }

        if (isset($map['repoId'])) {
            $model->repoId = $map['repoId'];
        }

        if (isset($map['repoName'])) {
            $model->repoName = $map['repoName'];
        }

        if (isset($map['wasmUrl'])) {
            $model->wasmUrl = $map['wasmUrl'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
