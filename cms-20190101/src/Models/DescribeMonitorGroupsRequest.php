<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsRequest\tag;

class DescribeMonitorGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @var string
     */
    public $groupFounderTagKey;

    /**
     * @var string
     */
    public $groupFounderTagValue;

    /**
     * @var string
     */
    public $groupId;

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
    public $instanceId;

    /**
     * @var string
     */
    public $keyword;

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
    public $regionId;

    /**
     * @var bool
     */
    public $selectContactGroups;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $types;
    protected $_name = [
        'dynamicTagRuleId' => 'DynamicTagRuleId',
        'groupFounderTagKey' => 'GroupFounderTagKey',
        'groupFounderTagValue' => 'GroupFounderTagValue',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'includeTemplateHistory' => 'IncludeTemplateHistory',
        'instanceId' => 'InstanceId',
        'keyword' => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'selectContactGroups' => 'SelectContactGroups',
        'tag' => 'Tag',
        'type' => 'Type',
        'types' => 'Types',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
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
