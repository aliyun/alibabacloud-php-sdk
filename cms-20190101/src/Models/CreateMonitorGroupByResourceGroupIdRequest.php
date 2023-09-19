<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupByResourceGroupIdRequest extends Model
{
    /**
     * @description The alert contact groups. The alert notifications of the application group are sent to the alert contacts that belong to the specified alert contact groups.
     *
     * An alert contact group can contain one or more alert contacts. For information about how to create alert contacts and alert contact groups, see [PutContact](~~114923~~) and [PutContactGroup](~~114929~~). For information about how to obtain alert contact groups, see [DescribeContactGroupList](~~114922~~).
     * @example ECS_Group
     *
     * @var string[]
     */
    public $contactGroupList;

    /**
     * @description Specifies whether the CloudMonitor agent is automatically installed for the application group. CloudMonitor determines whether to automatically install the CloudMonitor agent for the hosts in an application group based on the value of this parameter. Valid values:
     *
     *   true: The CloudMonitor agent is automatically installed.
     *   false (default): The CloudMonitor agent is not automatically installed.
     *
     * @example true
     *
     * @var bool
     */
    public $enableInstallAgent;

    /**
     * @description Specifies whether the application group automatically subscribes to event notifications. If events whose severity level is critical or warning occur on resources in an application group, CloudMonitor sends alert notifications. Valid values:
     *
     *   true: The application group automatically subscribes to event notifications.
     *   false (default): The application group does not automatically subscribe to event notifications.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSubscribeEvent;

    /**
     * @description The ID of the region where the resource group resides.
     *
     * For information about how to obtain the ID of the region where a resource group resides, see [GetResourceGroup](~~158866~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * For information about how to obtain the ID of a resource group, see [ListResourceGroups](~~158855~~).
     * @example rg-acfmw3ty5y7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the resource group.
     *
     * For information about how to obtain the name of a resource group, see [ListResourceGroups](~~158855~~).
     * @example CloudMonitor
     *
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'contactGroupList'     => 'ContactGroupList',
        'enableInstallAgent'   => 'EnableInstallAgent',
        'enableSubscribeEvent' => 'EnableSubscribeEvent',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceGroupName'    => 'ResourceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupList) {
            $res['ContactGroupList'] = $this->contactGroupList;
        }
        if (null !== $this->enableInstallAgent) {
            $res['EnableInstallAgent'] = $this->enableInstallAgent;
        }
        if (null !== $this->enableSubscribeEvent) {
            $res['EnableSubscribeEvent'] = $this->enableSubscribeEvent;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorGroupByResourceGroupIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupList'])) {
            if (!empty($map['ContactGroupList'])) {
                $model->contactGroupList = $map['ContactGroupList'];
            }
        }
        if (isset($map['EnableInstallAgent'])) {
            $model->enableInstallAgent = $map['EnableInstallAgent'];
        }
        if (isset($map['EnableSubscribeEvent'])) {
            $model->enableSubscribeEvent = $map['EnableSubscribeEvent'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
