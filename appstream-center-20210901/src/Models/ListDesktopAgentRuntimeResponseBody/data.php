<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponseBody\data\agentImInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponseBody\data\agentInstanceInfoList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponseBody\data\resourceGroup;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponseBody\data\riskInfo;

class data extends Model
{
    /**
     * @var agentImInfo
     */
    public $agentImInfo;

    /**
     * @var agentInstanceInfoList[]
     */
    public $agentInstanceInfoList;

    /**
     * @var string[]
     */
    public $authUsers;

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
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
     * @var bool
     */
    public $hasAuthUser;

    /**
     * @var bool
     */
    public $modelConfigure;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resourceGroup
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var riskInfo
     */
    public $riskInfo;
    protected $_name = [
        'agentImInfo' => 'AgentImInfo',
        'agentInstanceInfoList' => 'AgentInstanceInfoList',
        'authUsers' => 'AuthUsers',
        'channelConfigure' => 'ChannelConfigure',
        'channelConfiguredList' => 'ChannelConfiguredList',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'hasAuthUser' => 'HasAuthUser',
        'modelConfigure' => 'ModelConfigure',
        'regionId' => 'RegionId',
        'resourceGroup' => 'ResourceGroup',
        'resourceId' => 'ResourceId',
        'riskInfo' => 'RiskInfo',
    ];

    public function validate()
    {
        if (null !== $this->agentImInfo) {
            $this->agentImInfo->validate();
        }
        if (\is_array($this->agentInstanceInfoList)) {
            Model::validateArray($this->agentInstanceInfoList);
        }
        if (\is_array($this->authUsers)) {
            Model::validateArray($this->authUsers);
        }
        if (\is_array($this->channelConfiguredList)) {
            Model::validateArray($this->channelConfiguredList);
        }
        if (null !== $this->resourceGroup) {
            $this->resourceGroup->validate();
        }
        if (null !== $this->riskInfo) {
            $this->riskInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentImInfo) {
            $res['AgentImInfo'] = null !== $this->agentImInfo ? $this->agentImInfo->toArray($noStream) : $this->agentImInfo;
        }

        if (null !== $this->agentInstanceInfoList) {
            if (\is_array($this->agentInstanceInfoList)) {
                $res['AgentInstanceInfoList'] = [];
                $n1 = 0;
                foreach ($this->agentInstanceInfoList as $item1) {
                    $res['AgentInstanceInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }

        if (null !== $this->hasAuthUser) {
            $res['HasAuthUser'] = $this->hasAuthUser;
        }

        if (null !== $this->modelConfigure) {
            $res['ModelConfigure'] = $this->modelConfigure;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = null !== $this->resourceGroup ? $this->resourceGroup->toArray($noStream) : $this->resourceGroup;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->riskInfo) {
            $res['RiskInfo'] = null !== $this->riskInfo ? $this->riskInfo->toArray($noStream) : $this->riskInfo;
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
        if (isset($map['AgentImInfo'])) {
            $model->agentImInfo = agentImInfo::fromMap($map['AgentImInfo']);
        }

        if (isset($map['AgentInstanceInfoList'])) {
            if (!empty($map['AgentInstanceInfoList'])) {
                $model->agentInstanceInfoList = [];
                $n1 = 0;
                foreach ($map['AgentInstanceInfoList'] as $item1) {
                    $model->agentInstanceInfoList[$n1] = agentInstanceInfoList::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }

        if (isset($map['HasAuthUser'])) {
            $model->hasAuthUser = $map['HasAuthUser'];
        }

        if (isset($map['ModelConfigure'])) {
            $model->modelConfigure = $map['ModelConfigure'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = resourceGroup::fromMap($map['ResourceGroup']);
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['RiskInfo'])) {
            $model->riskInfo = riskInfo::fromMap($map['RiskInfo']);
        }

        return $model;
    }
}
