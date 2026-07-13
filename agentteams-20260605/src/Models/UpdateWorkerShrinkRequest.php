<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class UpdateWorkerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agents;

    /**
     * @var string
     */
    public $channelsShrink;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $credentialsShrink;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $limitConfigShrink;

    /**
     * @var string
     */
    public $mcpServersShrink;

    /**
     * @var string
     */
    public $modelShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillsShrink;

    /**
     * @var string
     */
    public $soul;

    /**
     * @var string
     */
    public $templateShrink;

    /**
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'agents' => 'Agents',
        'channelsShrink' => 'Channels',
        'clientToken' => 'ClientToken',
        'credentialsShrink' => 'Credentials',
        'instanceId' => 'InstanceId',
        'limitConfigShrink' => 'LimitConfig',
        'mcpServersShrink' => 'McpServers',
        'modelShrink' => 'Model',
        'name' => 'Name',
        'skillsShrink' => 'Skills',
        'soul' => 'Soul',
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
        if (null !== $this->agents) {
            $res['Agents'] = $this->agents;
        }

        if (null !== $this->channelsShrink) {
            $res['Channels'] = $this->channelsShrink;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->credentialsShrink) {
            $res['Credentials'] = $this->credentialsShrink;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->limitConfigShrink) {
            $res['LimitConfig'] = $this->limitConfigShrink;
        }

        if (null !== $this->mcpServersShrink) {
            $res['McpServers'] = $this->mcpServersShrink;
        }

        if (null !== $this->modelShrink) {
            $res['Model'] = $this->modelShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skillsShrink) {
            $res['Skills'] = $this->skillsShrink;
        }

        if (null !== $this->soul) {
            $res['Soul'] = $this->soul;
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
        if (isset($map['Agents'])) {
            $model->agents = $map['Agents'];
        }

        if (isset($map['Channels'])) {
            $model->channelsShrink = $map['Channels'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Credentials'])) {
            $model->credentialsShrink = $map['Credentials'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LimitConfig'])) {
            $model->limitConfigShrink = $map['LimitConfig'];
        }

        if (isset($map['McpServers'])) {
            $model->mcpServersShrink = $map['McpServers'];
        }

        if (isset($map['Model'])) {
            $model->modelShrink = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Skills'])) {
            $model->skillsShrink = $map['Skills'];
        }

        if (isset($map['Soul'])) {
            $model->soul = $map['Soul'];
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
