<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeMonitorGroupsRequest extends Model
{
    /**
     * @var bool
     */
    public $selectContactGroups;

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
    public $keyword;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $includeTemplateHistory;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'selectContactGroups'    => 'SelectContactGroups',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'keyword'                => 'Keyword',
        'instanceId'             => 'InstanceId',
        'groupName'              => 'GroupName',
        'includeTemplateHistory' => 'IncludeTemplateHistory',
        'type'                   => 'Type',
        'dynamicTagRuleId'       => 'DynamicTagRuleId',
        'groupId'                => 'GroupId',
        'serviceId'              => 'ServiceId',
        'resourceGroupId'        => 'ResourceGroupId',
        'tag'                    => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectContactGroups) {
            $res['SelectContactGroups'] = $this->selectContactGroups;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->includeTemplateHistory) {
            $res['IncludeTemplateHistory'] = $this->includeTemplateHistory;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectContactGroups'])) {
            $model->selectContactGroups = $map['SelectContactGroups'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IncludeTemplateHistory'])) {
            $model->includeTemplateHistory = $map['IncludeTemplateHistory'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
