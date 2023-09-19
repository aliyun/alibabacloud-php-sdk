<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\contactGroups;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\tags;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\templateIds;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The URL of the ACK cluster from which the application group is synchronized.
     *
     * @example https://aliyun.com
     *
     * @var string
     */
    public $bindUrl;

    /**
     * @description The alert contact groups.
     *
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @description The ID of the tag rule.
     *
     * @example 6b882d9a-5117-42e2-9d0c-4749a0c6****
     *
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @description The timestamp when the application group was created. Unit: milliseconds.
     *
     * @example 1603181891000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The timestamp when the application group was modified. Unit: milliseconds.
     *
     * @example 1603181891000
     *
     * @var int
     */
    public $gmtModified;

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
     * @description The ID of the application group.
     *
     * @example 12345
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the application group.
     *
     * @example test123
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The resource ID.
     *
     * @example rg-aek2hopjh*******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the Alibaba Cloud service.
     *
     * @example 49****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The tags that are attached to the application group.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the template.
     *
     * @var templateIds
     */
    public $templateIds;

    /**
     * @description The type of the application group. Valid values:
     *
     *   custom: a self-managed application group
     *   ehpc_cluster: an application group that is synchronized from an E-HPC cluster
     *   kubernetes: an application group that is synchronized from an ACK cluster
     *
     * @example custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bindUrl'              => 'BindUrl',
        'contactGroups'        => 'ContactGroups',
        'dynamicTagRuleId'     => 'DynamicTagRuleId',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'groupFounderTagKey'   => 'GroupFounderTagKey',
        'groupFounderTagValue' => 'GroupFounderTagValue',
        'groupId'              => 'GroupId',
        'groupName'            => 'GroupName',
        'resourceGroupId'      => 'ResourceGroupId',
        'serviceId'            => 'ServiceId',
        'tags'                 => 'Tags',
        'templateIds'          => 'TemplateIds',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindUrl) {
            $res['BindUrl'] = $this->bindUrl;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = null !== $this->templateIds ? $this->templateIds->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindUrl'])) {
            $model->bindUrl = $map['BindUrl'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TemplateIds'])) {
            $model->templateIds = templateIds::fromMap($map['TemplateIds']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
