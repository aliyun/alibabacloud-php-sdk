<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\contactGroupList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\matchExpress;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\tagValueBlacklist;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\templateIdList;

class tagGroup extends Model
{
    /**
     * @var contactGroupList
     */
    public $contactGroupList;

    /**
     * @var string
     */
    public $dynamicTagRuleId;

    /**
     * @var matchExpress
     */
    public $matchExpress;

    /**
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var tagValueBlacklist
     */
    public $tagValueBlacklist;

    /**
     * @var templateIdList
     */
    public $templateIdList;
    protected $_name = [
        'contactGroupList' => 'ContactGroupList',
        'dynamicTagRuleId' => 'DynamicTagRuleId',
        'matchExpress' => 'MatchExpress',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'tagKey' => 'TagKey',
        'tagValueBlacklist' => 'TagValueBlacklist',
        'templateIdList' => 'TemplateIdList',
    ];

    public function validate()
    {
        if (null !== $this->contactGroupList) {
            $this->contactGroupList->validate();
        }
        if (null !== $this->matchExpress) {
            $this->matchExpress->validate();
        }
        if (null !== $this->tagValueBlacklist) {
            $this->tagValueBlacklist->validate();
        }
        if (null !== $this->templateIdList) {
            $this->templateIdList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupList) {
            $res['ContactGroupList'] = null !== $this->contactGroupList ? $this->contactGroupList->toArray($noStream) : $this->contactGroupList;
        }

        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }

        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = null !== $this->matchExpress ? $this->matchExpress->toArray($noStream) : $this->matchExpress;
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

        if (null !== $this->tagValueBlacklist) {
            $res['TagValueBlacklist'] = null !== $this->tagValueBlacklist ? $this->tagValueBlacklist->toArray($noStream) : $this->tagValueBlacklist;
        }

        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = null !== $this->templateIdList ? $this->templateIdList->toArray($noStream) : $this->templateIdList;
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

        if (isset($map['TagValueBlacklist'])) {
            $model->tagValueBlacklist = tagValueBlacklist::fromMap($map['TagValueBlacklist']);
        }

        if (isset($map['TemplateIdList'])) {
            $model->templateIdList = templateIdList::fromMap($map['TemplateIdList']);
        }

        return $model;
    }
}
