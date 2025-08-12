<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class CreateMonitorGroupByResourceGroupIdRequest extends Model
{
    /**
     * @var string[]
     */
    public $contactGroupList;

    /**
     * @var bool
     */
    public $enableInstallAgent;

    /**
     * @var bool
     */
    public $enableSubscribeEvent;

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
    protected $_name = [
        'contactGroupList' => 'ContactGroupList',
        'enableInstallAgent' => 'EnableInstallAgent',
        'enableSubscribeEvent' => 'EnableSubscribeEvent',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroupList)) {
            Model::validateArray($this->contactGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupList) {
            if (\is_array($this->contactGroupList)) {
                $res['ContactGroupList'] = [];
                $n1 = 0;
                foreach ($this->contactGroupList as $item1) {
                    $res['ContactGroupList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupList'])) {
            if (!empty($map['ContactGroupList'])) {
                $model->contactGroupList = [];
                $n1 = 0;
                foreach ($map['ContactGroupList'] as $item1) {
                    $model->contactGroupList[$n1] = $item1;
                    ++$n1;
                }
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
