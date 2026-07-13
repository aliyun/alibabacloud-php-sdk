<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class ListWorkersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $credential;

    /**
     * @var string
     */
    public $groupShrink;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $mcp;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelProvider;

    /**
     * @var string
     */
    public $nameLike;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $templateShrink;

    /**
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'agentType' => 'AgentType',
        'credential' => 'Credential',
        'groupShrink' => 'Group',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'mcp' => 'Mcp',
        'modelName' => 'ModelName',
        'modelProvider' => 'ModelProvider',
        'nameLike' => 'NameLike',
        'nextToken' => 'NextToken',
        'templateShrink' => 'Template',
        'versionCode' => 'VersionCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->credential) {
            $res['Credential'] = $this->credential;
        }

        if (null !== $this->groupShrink) {
            $res['Group'] = $this->groupShrink;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->mcp) {
            $res['Mcp'] = $this->mcp;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelProvider) {
            $res['ModelProvider'] = $this->modelProvider;
        }

        if (null !== $this->nameLike) {
            $res['NameLike'] = $this->nameLike;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->templateShrink) {
            $res['Template'] = $this->templateShrink;
        }

        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
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
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['Credential'])) {
            $model->credential = $map['Credential'];
        }

        if (isset($map['Group'])) {
            $model->groupShrink = $map['Group'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Mcp'])) {
            $model->mcp = $map['Mcp'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelProvider'])) {
            $model->modelProvider = $map['ModelProvider'];
        }

        if (isset($map['NameLike'])) {
            $model->nameLike = $map['NameLike'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Template'])) {
            $model->templateShrink = $map['Template'];
        }

        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
