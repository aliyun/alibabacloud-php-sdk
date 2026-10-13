<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class UpdateContextDatabaseSyncJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $filtersShrink;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $targetKnowledgeBaseId;

    /**
     * @var string
     */
    public $targetKnowledgeBaseName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'enabled' => 'Enabled',
        'filtersShrink' => 'Filters',
        'jobId' => 'JobId',
        'name' => 'Name',
        'targetKnowledgeBaseId' => 'TargetKnowledgeBaseId',
        'targetKnowledgeBaseName' => 'TargetKnowledgeBaseName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->filtersShrink) {
            $res['Filters'] = $this->filtersShrink;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->targetKnowledgeBaseId) {
            $res['TargetKnowledgeBaseId'] = $this->targetKnowledgeBaseId;
        }

        if (null !== $this->targetKnowledgeBaseName) {
            $res['TargetKnowledgeBaseName'] = $this->targetKnowledgeBaseName;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Filters'])) {
            $model->filtersShrink = $map['Filters'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TargetKnowledgeBaseId'])) {
            $model->targetKnowledgeBaseId = $map['TargetKnowledgeBaseId'];
        }

        if (isset($map['TargetKnowledgeBaseName'])) {
            $model->targetKnowledgeBaseName = $map['TargetKnowledgeBaseName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
