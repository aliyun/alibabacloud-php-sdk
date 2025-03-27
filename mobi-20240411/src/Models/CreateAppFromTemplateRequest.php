<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mobi\V20240411\Models;

use AlibabaCloud\Dara\Model;

class CreateAppFromTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $actualParameters;

    /**
     * @var string
     */
    public $connectionsContent;

    /**
     * @var string
     */
    public $databasesContent;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $variablesContent;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'actualParameters' => 'ActualParameters',
        'connectionsContent' => 'ConnectionsContent',
        'databasesContent' => 'DatabasesContent',
        'description' => 'Description',
        'from' => 'From',
        'icon' => 'Icon',
        'name' => 'Name',
        'templateId' => 'TemplateId',
        'type' => 'Type',
        'variablesContent' => 'VariablesContent',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualParameters) {
            $res['ActualParameters'] = $this->actualParameters;
        }

        if (null !== $this->connectionsContent) {
            $res['ConnectionsContent'] = $this->connectionsContent;
        }

        if (null !== $this->databasesContent) {
            $res['DatabasesContent'] = $this->databasesContent;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->variablesContent) {
            $res['VariablesContent'] = $this->variablesContent;
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
        if (isset($map['ActualParameters'])) {
            $model->actualParameters = $map['ActualParameters'];
        }

        if (isset($map['ConnectionsContent'])) {
            $model->connectionsContent = $map['ConnectionsContent'];
        }

        if (isset($map['DatabasesContent'])) {
            $model->databasesContent = $map['DatabasesContent'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VariablesContent'])) {
            $model->variablesContent = $map['VariablesContent'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
