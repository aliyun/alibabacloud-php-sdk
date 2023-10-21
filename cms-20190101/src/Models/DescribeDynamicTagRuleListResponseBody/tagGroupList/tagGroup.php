<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\contactGroupList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\matchExpress;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\templateIdList;
use AlibabaCloud\Tea\Model;

class tagGroup extends Model
{
    /**
     * @description The alert contact group.
     *
     * @var contactGroupList
     */
    public $contactGroupList;

    /**
     * @description The ID of the tag rule.
     *
     * @example 1536df65-a719-429d-8813-73cc40d7****
     *
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @description The conditional expressions used to create an application group based on the tag.
     *
     * @var matchExpress
     */
    public $matchExpress;

    /**
     * @description The logical operator that is used between conditional expressions. Valid values:
     *
     *   `and`
     *   `or`
     *
     * >  Only one logical operator can be used in a request.
     * @example or
     *
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @description The ID of the region to which the tags belong.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of adding instances that meet the tag rule to the application group. Valid values:
     *
     *   `RUNNING`
     *   `FINISH`
     *
     * @example FINISH
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag key.
     *
     * @example tagkey1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The IDs of the alert templates.
     *
     * @var templateIdList
     */
    public $templateIdList;
    protected $_name = [
        'contactGroupList'           => 'ContactGroupList',
        'dynamicTagRuleId'           => 'DynamicTagRuleId',
        'matchExpress'               => 'MatchExpress',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'regionId'                   => 'RegionId',
        'status'                     => 'Status',
        'tagKey'                     => 'TagKey',
        'templateIdList'             => 'TemplateIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupList) {
            $res['ContactGroupList'] = null !== $this->contactGroupList ? $this->contactGroupList->toMap() : null;
        }
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = null !== $this->matchExpress ? $this->matchExpress->toMap() : null;
        }
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = null !== $this->templateIdList ? $this->templateIdList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupList'])) {
            $model->contactGroupList = contactGroupList::fromMap($map['ContactGroupList']);
        }
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }
        if (isset($map['MatchExpress'])) {
            $model->matchExpress = matchExpress::fromMap($map['MatchExpress']);
        }
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TemplateIdList'])) {
            $model->templateIdList = templateIdList::fromMap($map['TemplateIdList']);
        }

        return $model;
    }
}
