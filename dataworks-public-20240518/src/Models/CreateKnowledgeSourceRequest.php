<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeSourceRequest\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeSourceRequest\document;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeSourceRequest\project;

class CreateKnowledgeSourceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
    public $type;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'document' => 'Document',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'name' => 'Name',
        'project' => 'Project',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toArray($noStream) : $this->project;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Project'])) {
            $model->project = project::fromMap($map['Project']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
