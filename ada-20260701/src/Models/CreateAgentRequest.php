<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentRequest extends Model
{
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
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $skills;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var mixed
     */
    public $tools;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'knowledgeBases' => 'KnowledgeBases',
        'name' => 'Name',
        'skills' => 'Skills',
        'systemPrompt' => 'SystemPrompt',
        'tools' => 'Tools',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->knowledgeBases) {
            $res['KnowledgeBases'] = $this->knowledgeBases;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skills) {
            $res['Skills'] = $this->skills;
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->tools) {
            $res['Tools'] = $this->tools;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['KnowledgeBases'])) {
            $model->knowledgeBases = $map['KnowledgeBases'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Skills'])) {
            $model->skills = $map['Skills'];
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['Tools'])) {
            $model->tools = $map['Tools'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
