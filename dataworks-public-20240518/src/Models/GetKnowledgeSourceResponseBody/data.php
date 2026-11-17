<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeSourceResponseBody\data\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeSourceResponseBody\data\document;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeSourceResponseBody\data\project;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var document
     */
    public $document;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var project
     */
    public $project;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'document' => 'Document',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'project' => 'Project',
        'sourceId' => 'SourceId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (null !== $this->document) {
            $this->document->validate();
        }
        if (null !== $this->project) {
            $this->project->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->document) {
            $res['Document'] = null !== $this->document ? $this->document->toArray($noStream) : $this->document;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toArray($noStream) : $this->project;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Document'])) {
            $model->document = document::fromMap($map['Document']);
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Project'])) {
            $model->project = project::fromMap($map['Project']);
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
