<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class CreateContextDatabaseSyncJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var mixed[]
     */
    public $filters;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $targetId;

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
        'filters' => 'Filters',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'name' => 'Name',
        'sourceId' => 'SourceId',
        'targetId' => 'TargetId',
        'targetKnowledgeBaseId' => 'TargetKnowledgeBaseId',
        'targetKnowledgeBaseName' => 'TargetKnowledgeBaseName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                foreach ($this->filters as $key1 => $value1) {
                    $res['Filters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
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

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                foreach ($map['Filters'] as $key1 => $value1) {
                    $model->filters[$key1] = $value1;
                }
            }
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
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
