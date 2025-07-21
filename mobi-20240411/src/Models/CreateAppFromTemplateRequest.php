<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mobi\V20240411\Models;

use AlibabaCloud\Tea\Model;

class CreateAppFromTemplateRequest extends Model
{
    /**
     * @example [{"type":"bailianapp","name":"rag","actualParameter":"11"}]
     *
     * @var string
     */
    public $actualParameters;

    /**
     * @var string
     */
    public $agentId;

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
     * @description This parameter is required.
     *
     * @example -1
     *
     * @var string
     */
    public $icon;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 4c892729-9950-4353-8146-33542b869e01
     *
     * @var string
     */
    public $templateId;

    /**
     * @example Web
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $variablesContent;

    /**
     * @description This parameter is required.
     *
     * @example 1731664463*****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'actualParameters' => 'ActualParameters',
        'agentId' => 'AgentId',
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualParameters) {
            $res['ActualParameters'] = $this->actualParameters;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
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

    /**
     * @param array $map
     *
     * @return CreateAppFromTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualParameters'])) {
            $model->actualParameters = $map['ActualParameters'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
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
