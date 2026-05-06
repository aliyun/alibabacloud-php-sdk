<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListModelTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
     * @var string
     */
    public $modelTemplateId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'agentProvider' => 'AgentProvider',
        'config' => 'Config',
        'description' => 'Description',
        'hasModel' => 'HasModel',
        'modelTemplateId' => 'ModelTemplateId',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
