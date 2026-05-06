<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateModelProviderTemplateRequest extends Model
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
     * @var int
     */
    public $bizType;

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
    public $enableWuyingProxy;

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
    public $providerName;

    /**
     * @var string
     */
    public $providerType;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'bizType' => 'BizType',
        'config' => 'Config',
        'description' => 'Description',
        'enableWuyingProxy' => 'EnableWuyingProxy',
        'modelTemplateId' => 'ModelTemplateId',
        'name' => 'Name',
        'providerName' => 'ProviderName',
        'providerType' => 'ProviderType',
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

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableWuyingProxy) {
            $res['EnableWuyingProxy'] = $this->enableWuyingProxy;
        }

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
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

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableWuyingProxy'])) {
            $model->enableWuyingProxy = $map['EnableWuyingProxy'];
        }

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }

        return $model;
    }
}
