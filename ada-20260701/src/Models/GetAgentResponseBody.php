<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class GetAgentResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var int
     */
    public $agentVersion;

    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var bool
     */
    public $canModify;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var mixed
     */
    public $knowledgeBases;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var mixed
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $official;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed
     */
    public $skills;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var mixed
     */
    public $tools;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentVersion' => 'AgentVersion',
        'canDelete' => 'CanDelete',
        'canModify' => 'CanModify',
        'createdAt' => 'CreatedAt',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'knowledgeBases' => 'KnowledgeBases',
        'metadata' => 'Metadata',
        'model' => 'Model',
        'name' => 'Name',
        'official' => 'Official',
        'requestId' => 'RequestId',
        'skills' => 'Skills',
        'status' => 'Status',
        'systemPrompt' => 'SystemPrompt',
        'tools' => 'Tools',
        'updatedAt' => 'UpdatedAt',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->canDelete) {
            $res['CanDelete'] = $this->canDelete;
        }

        if (null !== $this->canModify) {
            $res['CanModify'] = $this->canModify;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->knowledgeBases) {
            $res['KnowledgeBases'] = $this->knowledgeBases;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->official) {
            $res['Official'] = $this->official;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skills) {
            $res['Skills'] = $this->skills;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->tools) {
            $res['Tools'] = $this->tools;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['CanDelete'])) {
            $model->canDelete = $map['CanDelete'];
        }

        if (isset($map['CanModify'])) {
            $model->canModify = $map['CanModify'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['KnowledgeBases'])) {
            $model->knowledgeBases = $map['KnowledgeBases'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Official'])) {
            $model->official = $map['Official'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Skills'])) {
            $model->skills = $map['Skills'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['Tools'])) {
            $model->tools = $map['Tools'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
