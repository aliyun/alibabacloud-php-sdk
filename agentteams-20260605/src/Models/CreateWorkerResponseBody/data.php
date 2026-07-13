<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponseBody\data\credentials;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponseBody\data\groups;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponseBody\data\limitConfig;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponseBody\data\mcpServers;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponseBody\data\model_;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponseBody\data\skills;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerResponseBody\data\template;

class data extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $agents;

    /**
     * @var credentials[]
     */
    public $credentials;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var limitConfig
     */
    public $limitConfig;

    /**
     * @var mcpServers[]
     */
    public $mcpServers;

    /**
     * @var model_
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var skills[]
     */
    public $skills;

    /**
     * @var string
     */
    public $soul;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var template
     */
    public $template;

    /**
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'agentType' => 'AgentType',
        'agents' => 'Agents',
        'credentials' => 'Credentials',
        'deployType' => 'DeployType',
        'groups' => 'Groups',
        'instanceId' => 'InstanceId',
        'limitConfig' => 'LimitConfig',
        'mcpServers' => 'McpServers',
        'model' => 'Model',
        'name' => 'Name',
        'skills' => 'Skills',
        'soul' => 'Soul',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'template' => 'Template',
        'versionCode' => 'VersionCode',
    ];

    public function validate()
    {
        if (\is_array($this->credentials)) {
            Model::validateArray($this->credentials);
        }
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (null !== $this->limitConfig) {
            $this->limitConfig->validate();
        }
        if (\is_array($this->mcpServers)) {
            Model::validateArray($this->mcpServers);
        }
        if (null !== $this->model) {
            $this->model->validate();
        }
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        if (null !== $this->template) {
            $this->template->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->agents) {
            $res['Agents'] = $this->agents;
        }

        if (null !== $this->credentials) {
            if (\is_array($this->credentials)) {
                $res['Credentials'] = [];
                $n1 = 0;
                foreach ($this->credentials as $item1) {
                    $res['Credentials'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->limitConfig) {
            $res['LimitConfig'] = null !== $this->limitConfig ? $this->limitConfig->toArray($noStream) : $this->limitConfig;
        }

        if (null !== $this->mcpServers) {
            if (\is_array($this->mcpServers)) {
                $res['McpServers'] = [];
                $n1 = 0;
                foreach ($this->mcpServers as $item1) {
                    $res['McpServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->model) {
            $res['Model'] = null !== $this->model ? $this->model->toArray($noStream) : $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['Skills'] = [];
                $n1 = 0;
                foreach ($this->skills as $item1) {
                    $res['Skills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->soul) {
            $res['Soul'] = $this->soul;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
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

        if (isset($map['Agents'])) {
            $model->agents = $map['Agents'];
        }

        if (isset($map['Credentials'])) {
            if (!empty($map['Credentials'])) {
                $model->credentials = [];
                $n1 = 0;
                foreach ($map['Credentials'] as $item1) {
                    $model->credentials[$n1] = credentials::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LimitConfig'])) {
            $model->limitConfig = limitConfig::fromMap($map['LimitConfig']);
        }

        if (isset($map['McpServers'])) {
            if (!empty($map['McpServers'])) {
                $model->mcpServers = [];
                $n1 = 0;
                foreach ($map['McpServers'] as $item1) {
                    $model->mcpServers[$n1] = mcpServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Model'])) {
            $model->model = model_::fromMap($map['Model']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Skills'])) {
            if (!empty($map['Skills'])) {
                $model->skills = [];
                $n1 = 0;
                foreach ($map['Skills'] as $item1) {
                    $model->skills[$n1] = skills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Soul'])) {
            $model->soul = $map['Soul'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Template'])) {
            $model->template = template::fromMap($map['Template']);
        }

        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
