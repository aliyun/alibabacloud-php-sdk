<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $hasModel;

    /**
     * @var int
     */
    public $modelCount;

    /**
     * @var string
     */
    public $modelTemplateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $refScope;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var int
     */
    public $userGroupCount;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'config' => 'Config',
        'description' => 'Description',
        'hasModel' => 'HasModel',
        'modelCount' => 'ModelCount',
        'modelTemplateId' => 'ModelTemplateId',
        'name' => 'Name',
        'refScope' => 'RefScope',
        'userCount' => 'UserCount',
        'userGroupCount' => 'UserGroupCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hasModel) {
            $res['HasModel'] = $this->hasModel;
        }

        if (null !== $this->modelCount) {
            $res['ModelCount'] = $this->modelCount;
        }

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->refScope) {
            $res['RefScope'] = $this->refScope;
        }

        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        if (null !== $this->userGroupCount) {
            $res['UserGroupCount'] = $this->userGroupCount;
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
        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HasModel'])) {
            $model->hasModel = $map['HasModel'];
        }

        if (isset($map['ModelCount'])) {
            $model->modelCount = $map['ModelCount'];
        }

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RefScope'])) {
            $model->refScope = $map['RefScope'];
        }

        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        if (isset($map['UserGroupCount'])) {
            $model->userGroupCount = $map['UserGroupCount'];
        }

        return $model;
    }
}
