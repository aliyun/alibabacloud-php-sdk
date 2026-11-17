<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateKnowledgeSourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dataSourceShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documentShrink;

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
    public $projectShrink;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dataSourceShrink' => 'DataSource',
        'description' => 'Description',
        'documentShrink' => 'Document',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'name' => 'Name',
        'projectShrink' => 'Project',
        'type' => 'Type',
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

        if (null !== $this->dataSourceShrink) {
            $res['DataSource'] = $this->dataSourceShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->documentShrink) {
            $res['Document'] = $this->documentShrink;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectShrink) {
            $res['Project'] = $this->projectShrink;
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
            $model->dataSourceShrink = $map['DataSource'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Document'])) {
            $model->documentShrink = $map['Document'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Project'])) {
            $model->projectShrink = $map['Project'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
