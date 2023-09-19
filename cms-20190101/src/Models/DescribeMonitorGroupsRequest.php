<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeMonitorGroupsRequest extends Model
{
    /**
     * @description The ID of the tag rule.
     *
     * @example 6b882d9a-5117-42e2-9d0c-4749a0c6****
     *
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @description The tag key that is created for the application group by using the tag rule.
     *
     * @example GroupKey1
     *
     * @var string
     */
    public $groupFounderTagKey;

    /**
     * @description The tag value that is created for the application group by using the tag rule.
     *
     * @example GroupValue1
     *
     * @var string
     */
    public $groupFounderTagValue;

    /**
     * @description The ID of the application group. Separate multiple application group IDs with commas (,).
     *
     * @example 92****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the application group.
     *
     * @example testGroup124
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Specifies whether to include the historical alert templates that are applied to the application group in the response. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $includeTemplateHistory;

    /**
     * @description The instance ID. This parameter is used to query the application group to which the specified instance belongs.
     *
     * @example i-abcdefgh12****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The keyword that is used for the search.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Pages start from page 1. Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to include the alert contact groups in the response. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $selectContactGroups;

    /**
     * @description The tags of the application group.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the application group. Valid values:
     *
     *   custom: a self-managed application group
     *   ehpc_cluster: an application group that is synchronized from an Elastic High Performance Computing (E-HPC) cluster
     *   kubernetes: an application group that is synchronized from a Container Service for Kubernetes (ACK) cluster
     *
     * @example custom
     *
     * @var string
     */
    public $type;

    /**
     * @description The type of the application group. Valid values:
     *
     *   custom: a self-managed application group
     *   ehpc_cluster: an application group that is synchronized from an Elastic High Performance Computing (E-HPC) cluster
     *   kubernetes: an application group that is synchronized from a Container Service for Kubernetes (ACK) cluster
     *   tag: an application group that is automatically created by using tags
     *   resMgr: an application group that is created by using resource groups
     *   ess: an application group that is synchronized from Auto Scaling (ESS)
     *
     * @example custom
     *
     * @var string
     */
    public $types;
    protected $_name = [
        'dynamicTagRuleId'       => 'DynamicTagRuleId',
        'groupFounderTagKey'     => 'GroupFounderTagKey',
        'groupFounderTagValue'   => 'GroupFounderTagValue',
        'groupId'                => 'GroupId',
        'groupName'              => 'GroupName',
        'includeTemplateHistory' => 'IncludeTemplateHistory',
        'instanceId'             => 'InstanceId',
        'keyword'                => 'Keyword',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'regionId'               => 'RegionId',
        'selectContactGroups'    => 'SelectContactGroups',
        'tag'                    => 'Tag',
        'type'                   => 'Type',
        'types'                  => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->groupFounderTagKey) {
            $res['GroupFounderTagKey'] = $this->groupFounderTagKey;
        }
        if (null !== $this->groupFounderTagValue) {
            $res['GroupFounderTagValue'] = $this->groupFounderTagValue;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->includeTemplateHistory) {
            $res['IncludeTemplateHistory'] = $this->includeTemplateHistory;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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
        if (null !== $this->selectContactGroups) {
            $res['SelectContactGroups'] = $this->selectContactGroups;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
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
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['GroupFounderTagKey'])) {
            $model->groupFounderTagKey = $map['GroupFounderTagKey'];
        }
        if (isset($map['GroupFounderTagValue'])) {
            $model->groupFounderTagValue = $map['GroupFounderTagValue'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IncludeTemplateHistory'])) {
            $model->includeTemplateHistory = $map['IncludeTemplateHistory'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
        if (isset($map['SelectContactGroups'])) {
            $model->selectContactGroups = $map['SelectContactGroups'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }

        return $model;
    }
}
