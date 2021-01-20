<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupByResourceGroupIdRequest extends Model
{
    /**
     * @var bool
     */
    public $enableSubscribeEvent;

    /**
     * @var bool
     */
    public $enableInstallAgent;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string[]
     */
    public $contactGroupList;
    protected $_name = [
        'enableSubscribeEvent' => 'EnableSubscribeEvent',
        'enableInstallAgent'   => 'EnableInstallAgent',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceGroupName'    => 'ResourceGroupName',
        'contactGroupList'     => 'ContactGroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSubscribeEvent) {
            $res['EnableSubscribeEvent'] = $this->enableSubscribeEvent;
        }
        if (null !== $this->enableInstallAgent) {
            $res['EnableInstallAgent'] = $this->enableInstallAgent;
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
        if (null !== $this->contactGroupList) {
            $res['ContactGroupList'] = $this->contactGroupList;
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
        if (isset($map['EnableSubscribeEvent'])) {
            $model->enableSubscribeEvent = $map['EnableSubscribeEvent'];
        }
        if (isset($map['EnableInstallAgent'])) {
            $model->enableInstallAgent = $map['EnableInstallAgent'];
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
        if (isset($map['ContactGroupList'])) {
            if (!empty($map['ContactGroupList'])) {
                $model->contactGroupList = $map['ContactGroupList'];
            }
        }

        return $model;
    }
}
