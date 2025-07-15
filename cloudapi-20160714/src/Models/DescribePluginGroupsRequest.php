<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribePluginGroupsRequest extends Model
{
    /**
     * @description API group description
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description API group ID
     *
     * @example 8cc2a3cbe3394524b6e71be5db9b02a3
     *
     * @var string
     */
    public $groupId;

    /**
     * @description API group name
     *
     * @example crm_custom_service
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Pagination parameter: current page number
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Pagination parameter: number of items per page
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description API Gateway plugin ID
     *
     * This parameter is required.
     *
     * @example 1f3bde29b43d4d53989248327ff737f2
     *
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'pluginId' => 'PluginId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePluginGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
