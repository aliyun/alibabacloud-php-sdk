<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\contactGroups;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\tags;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\templateIds;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\templateInfos;

class resource extends Model
{
    /**
     * @var string
     */
    public $bindUrl;

    /**
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $groupFounderTagKey;

    /**
     * @var string
     */
    public $groupFounderTagValue;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var templateIds
     */
    public $templateIds;

    /**
     * @var templateInfos
     */
    public $templateInfos;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bindUrl' => 'BindUrl',
        'contactGroups' => 'ContactGroups',
        'dynamicTagRuleId' => 'DynamicTagRuleId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groupFounderTagKey' => 'GroupFounderTagKey',
        'groupFounderTagValue' => 'GroupFounderTagValue',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceId' => 'ServiceId',
        'tags' => 'Tags',
        'templateIds' => 'TemplateIds',
        'templateInfos' => 'TemplateInfos',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->contactGroups) {
            $this->contactGroups->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->templateIds) {
            $this->templateIds->validate();
        }
        if (null !== $this->templateInfos) {
            $this->templateInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindUrl) {
            $res['BindUrl'] = $this->bindUrl;
        }

        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toArray($noStream) : $this->contactGroups;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->templateIds) {
            $res['TemplateIds'] = null !== $this->templateIds ? $this->templateIds->toArray($noStream) : $this->templateIds;
        }

        if (null !== $this->templateInfos) {
            $res['TemplateInfos'] = null !== $this->templateInfos ? $this->templateInfos->toArray($noStream) : $this->templateInfos;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['TemplateInfos'])) {
            $model->templateInfos = templateInfos::fromMap($map['TemplateInfos']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
