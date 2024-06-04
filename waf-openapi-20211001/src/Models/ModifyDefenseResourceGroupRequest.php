<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefenseResourceGroupRequest extends Model
{
    /**
     * @description The protected objects that you want to add to the protected object group. Separate the protected objects with commas (,). If you leave this parameter empty, no protected objects are added to the protected object group.
     *
     * @example test1.aliyundoc.com,test2.aliyundoc.com
     *
     * @var string
     */
    public $addList;

    /**
     * @description The protected objects that you want to remove from the protected object group. Separate the protected objects with commas (,). If you leave this parameter empty, no protected objects are removed from the protected object group.
     *
     * @example test14.waf.com,test24.waf.com
     *
     * @var string
     */
    public $deleteList;

    /**
     * @description The description of the protected object group.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the protected object group whose configurations you want to modify.
     *
     * This parameter is required.
     * @example test01
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland.
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'addList'                        => 'AddList',
        'deleteList'                     => 'DeleteList',
        'description'                    => 'Description',
        'groupName'                      => 'GroupName',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addList) {
            $res['AddList'] = $this->addList;
        }
        if (null !== $this->deleteList) {
            $res['DeleteList'] = $this->deleteList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDefenseResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddList'])) {
            $model->addList = $map['AddList'];
        }
        if (isset($map['DeleteList'])) {
            $model->deleteList = $map['DeleteList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
