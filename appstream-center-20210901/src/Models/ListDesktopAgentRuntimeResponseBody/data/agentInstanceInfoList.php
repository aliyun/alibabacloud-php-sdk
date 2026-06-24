<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentInstanceInfoList extends Model
{
    /**
     * @var string
     */
    public $agentInstanceStatus;

    /**
     * @var string
     */
    public $agentInstanceVersion;

    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var bool
     */
    public $channelConfigure;

    /**
     * @var string[]
     */
    public $channelConfiguredList;

    /**
     * @var string
     */
    public $deploymentSource;

    /**
     * @var bool
     */
    public $modelConfigure;

    /**
     * @var string
     */
    public $modelTemplateId;
    protected $_name = [
        'agentInstanceStatus' => 'AgentInstanceStatus',
        'agentInstanceVersion' => 'AgentInstanceVersion',
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'channelConfigure' => 'ChannelConfigure',
        'channelConfiguredList' => 'ChannelConfiguredList',
        'deploymentSource' => 'DeploymentSource',
        'modelConfigure' => 'ModelConfigure',
        'modelTemplateId' => 'ModelTemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->channelConfiguredList)) {
            Model::validateArray($this->channelConfiguredList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentInstanceStatus) {
            $res['AgentInstanceStatus'] = $this->agentInstanceStatus;
        }

        if (null !== $this->agentInstanceVersion) {
            $res['AgentInstanceVersion'] = $this->agentInstanceVersion;
        }

        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->channelConfigure) {
            $res['ChannelConfigure'] = $this->channelConfigure;
        }

        if (null !== $this->channelConfiguredList) {
            if (\is_array($this->channelConfiguredList)) {
                $res['ChannelConfiguredList'] = [];
                $n1 = 0;
                foreach ($this->channelConfiguredList as $item1) {
                    $res['ChannelConfiguredList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deploymentSource) {
            $res['DeploymentSource'] = $this->deploymentSource;
        }

        if (null !== $this->modelConfigure) {
            $res['ModelConfigure'] = $this->modelConfigure;
        }

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
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
        if (isset($map['AgentInstanceStatus'])) {
            $model->agentInstanceStatus = $map['AgentInstanceStatus'];
        }

        if (isset($map['AgentInstanceVersion'])) {
            $model->agentInstanceVersion = $map['AgentInstanceVersion'];
        }

        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['ChannelConfigure'])) {
            $model->channelConfigure = $map['ChannelConfigure'];
        }

        if (isset($map['ChannelConfiguredList'])) {
            if (!empty($map['ChannelConfiguredList'])) {
                $model->channelConfiguredList = [];
                $n1 = 0;
                foreach ($map['ChannelConfiguredList'] as $item1) {
                    $model->channelConfiguredList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeploymentSource'])) {
            $model->deploymentSource = $map['DeploymentSource'];
        }

        if (isset($map['ModelConfigure'])) {
            $model->modelConfigure = $map['ModelConfigure'];
        }

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        return $model;
    }
}
