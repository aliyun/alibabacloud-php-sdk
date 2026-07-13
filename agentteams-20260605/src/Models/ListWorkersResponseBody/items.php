<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkersResponseBody\items\groups;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkersResponseBody\items\template;

class items extends Model
{
    /**
     * @var string
     */
    public $agentType;

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
     * @var string
     */
    public $name;

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
        'deployType' => 'DeployType',
        'groups' => 'Groups',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'status' => 'Status',
        'template' => 'Template',
        'versionCode' => 'VersionCode',
    ];

    public function validate()
    {
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
