<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListDesktopAgentRuntimeRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentInstanceStatuses;

    /**
     * @var string[]
     */
    public $agentInstanceVersions;

    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var string[]
     */
    public $authUsers;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var bool
     */
    public $channelConfigure;

    /**
     * @var string
     */
    public $deploymentSource;

    /**
     * @var string[]
     */
    public $desktopIds;

    /**
     * @var string[]
     */
    public $desktopNames;

    /**
     * @var string[]
     */
    public $desktopStatuses;

    /**
     * @var bool
     */
    public $hasAuthUser;

    /**
     * @var bool
     */
    public $hasRisk;

    /**
     * @var bool
     */
    public $includeRiskInfo;

    /**
     * @var bool
     */
    public $modelConfigure;

    /**
     * @var string
     */
    public $modelTemplateId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'agentInstanceStatuses' => 'AgentInstanceStatuses',
        'agentInstanceVersions' => 'AgentInstanceVersions',
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'authUsers' => 'AuthUsers',
        'bizType' => 'BizType',
        'channelConfigure' => 'ChannelConfigure',
        'deploymentSource' => 'DeploymentSource',
        'desktopIds' => 'DesktopIds',
        'desktopNames' => 'DesktopNames',
        'desktopStatuses' => 'DesktopStatuses',
        'hasAuthUser' => 'HasAuthUser',
        'hasRisk' => 'HasRisk',
        'includeRiskInfo' => 'IncludeRiskInfo',
        'modelConfigure' => 'ModelConfigure',
        'modelTemplateId' => 'ModelTemplateId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->agentInstanceStatuses)) {
            Model::validateArray($this->agentInstanceStatuses);
        }
        if (\is_array($this->agentInstanceVersions)) {
            Model::validateArray($this->agentInstanceVersions);
        }
        if (\is_array($this->authUsers)) {
            Model::validateArray($this->authUsers);
        }
        if (\is_array($this->desktopIds)) {
            Model::validateArray($this->desktopIds);
        }
        if (\is_array($this->desktopNames)) {
            Model::validateArray($this->desktopNames);
        }
        if (\is_array($this->desktopStatuses)) {
            Model::validateArray($this->desktopStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentInstanceStatuses) {
            if (\is_array($this->agentInstanceStatuses)) {
                $res['AgentInstanceStatuses'] = [];
                $n1 = 0;
                foreach ($this->agentInstanceStatuses as $item1) {
                    $res['AgentInstanceStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentInstanceVersions) {
            if (\is_array($this->agentInstanceVersions)) {
                $res['AgentInstanceVersions'] = [];
                $n1 = 0;
                foreach ($this->agentInstanceVersions as $item1) {
                    $res['AgentInstanceVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->authUsers) {
            if (\is_array($this->authUsers)) {
                $res['AuthUsers'] = [];
                $n1 = 0;
                foreach ($this->authUsers as $item1) {
                    $res['AuthUsers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->channelConfigure) {
            $res['ChannelConfigure'] = $this->channelConfigure;
        }

        if (null !== $this->deploymentSource) {
            $res['DeploymentSource'] = $this->deploymentSource;
        }

        if (null !== $this->desktopIds) {
            if (\is_array($this->desktopIds)) {
                $res['DesktopIds'] = [];
                $n1 = 0;
                foreach ($this->desktopIds as $item1) {
                    $res['DesktopIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopNames) {
            if (\is_array($this->desktopNames)) {
                $res['DesktopNames'] = [];
                $n1 = 0;
                foreach ($this->desktopNames as $item1) {
                    $res['DesktopNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopStatuses) {
            if (\is_array($this->desktopStatuses)) {
                $res['DesktopStatuses'] = [];
                $n1 = 0;
                foreach ($this->desktopStatuses as $item1) {
                    $res['DesktopStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasAuthUser) {
            $res['HasAuthUser'] = $this->hasAuthUser;
        }

        if (null !== $this->hasRisk) {
            $res['HasRisk'] = $this->hasRisk;
        }

        if (null !== $this->includeRiskInfo) {
            $res['IncludeRiskInfo'] = $this->includeRiskInfo;
        }

        if (null !== $this->modelConfigure) {
            $res['ModelConfigure'] = $this->modelConfigure;
        }

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['AgentInstanceStatuses'])) {
            if (!empty($map['AgentInstanceStatuses'])) {
                $model->agentInstanceStatuses = [];
                $n1 = 0;
                foreach ($map['AgentInstanceStatuses'] as $item1) {
                    $model->agentInstanceStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AgentInstanceVersions'])) {
            if (!empty($map['AgentInstanceVersions'])) {
                $model->agentInstanceVersions = [];
                $n1 = 0;
                foreach ($map['AgentInstanceVersions'] as $item1) {
                    $model->agentInstanceVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['AuthUsers'])) {
            if (!empty($map['AuthUsers'])) {
                $model->authUsers = [];
                $n1 = 0;
                foreach ($map['AuthUsers'] as $item1) {
                    $model->authUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ChannelConfigure'])) {
            $model->channelConfigure = $map['ChannelConfigure'];
        }

        if (isset($map['DeploymentSource'])) {
            $model->deploymentSource = $map['DeploymentSource'];
        }

        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = [];
                $n1 = 0;
                foreach ($map['DesktopIds'] as $item1) {
                    $model->desktopIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopNames'])) {
            if (!empty($map['DesktopNames'])) {
                $model->desktopNames = [];
                $n1 = 0;
                foreach ($map['DesktopNames'] as $item1) {
                    $model->desktopNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopStatuses'])) {
            if (!empty($map['DesktopStatuses'])) {
                $model->desktopStatuses = [];
                $n1 = 0;
                foreach ($map['DesktopStatuses'] as $item1) {
                    $model->desktopStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HasAuthUser'])) {
            $model->hasAuthUser = $map['HasAuthUser'];
        }

        if (isset($map['HasRisk'])) {
            $model->hasRisk = $map['HasRisk'];
        }

        if (isset($map['IncludeRiskInfo'])) {
            $model->includeRiskInfo = $map['IncludeRiskInfo'];
        }

        if (isset($map['ModelConfigure'])) {
            $model->modelConfigure = $map['ModelConfigure'];
        }

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
