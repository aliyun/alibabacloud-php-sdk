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
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $groupFounderTagValue;

    /**
     * @var string
     */
    public $bindUrl;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $groupFounderTagKey;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var templateIds
     */
    public $templateIds;
    protected $_name = [
        'type'                 => 'Type',
        'groupFounderTagValue' => 'GroupFounderTagValue',
        'bindUrl'              => 'BindUrl',
        'groupName'            => 'GroupName',
        'groupId'              => 'GroupId',
        'serviceId'            => 'ServiceId',
        'dynamicTagRuleId'     => 'DynamicTagRuleId',
        'gmtCreate'            => 'GmtCreate',
        'groupFounderTagKey'   => 'GroupFounderTagKey',
        'gmtModified'          => 'GmtModified',
        'contactGroups'        => 'ContactGroups',
        'tags'                 => 'Tags',
        'templateIds'          => 'TemplateIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->groupFounderTagValue) {
            $res['GroupFounderTagValue'] = $this->groupFounderTagValue;
        }
        if (null !== $this->bindUrl) {
            $res['BindUrl'] = $this->bindUrl;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->groupFounderTagKey) {
            $res['GroupFounderTagKey'] = $this->groupFounderTagKey;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = null !== $this->templateIds ? $this->templateIds->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['GroupFounderTagValue'])) {
            $model->groupFounderTagValue = $map['GroupFounderTagValue'];
        }
        if (isset($map['BindUrl'])) {
            $model->bindUrl = $map['BindUrl'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GroupFounderTagKey'])) {
            $model->groupFounderTagKey = $map['GroupFounderTagKey'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TemplateIds'])) {
            $model->templateIds = templateIds::fromMap($map['TemplateIds']);
        }

        return $model;
    }
}
