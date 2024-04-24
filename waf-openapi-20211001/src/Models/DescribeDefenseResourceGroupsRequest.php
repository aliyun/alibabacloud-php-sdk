<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeDefenseResourceGroupsRequest extends Model
{
    /**
     * @description The name of the protected object group that you want to query. Fuzzy queries are supported.
     *
     * @example demoGroupName
     *
     * @var string
     */
    public $groupNameLike;

    /**
     * @description The names of the protected object groups that you want to query. Separate multiple names with commas (,).
     *
     * @example groupName1，groupName2
     *
     * @var string
     */
    public $groupNames;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * >  You can call the [DescribeInstance](~~433756~~) operation to query the ID of the WAF instance.
     * @example waf_v2_public_cn-wwo36****0i
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfmxc7lf****eq
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'groupNameLike'                  => 'GroupNameLike',
        'groupNames'                     => 'GroupNames',
        'instanceId'                     => 'InstanceId',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupNameLike) {
            $res['GroupNameLike'] = $this->groupNameLike;
        }
        if (null !== $this->groupNames) {
            $res['GroupNames'] = $this->groupNames;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeDefenseResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupNameLike'])) {
            $model->groupNameLike = $map['GroupNameLike'];
        }
        if (isset($map['GroupNames'])) {
            $model->groupNames = $map['GroupNames'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
