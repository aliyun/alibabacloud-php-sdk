<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\allRuleList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\ruleList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\skillGroupScreens;
use AlibabaCloud\Tea\Model;

class skillGroupConfig extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $allContentQualityCheck;

    /**
     * @example 223
     *
     * @var string
     */
    public $allRids;

    /**
     * @var allRuleList
     */
    public $allRuleList;

    /**
     * @example 2020-12-01T15:12Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 221
     *
     * @var int
     */
    public $id;

    /**
     * @example xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 211
     *
     * @var int
     */
    public $modelId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $modelName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var int
     */
    public $qualityCheckType;

    /**
     * @example 2221
     *
     * @var string
     */
    public $rid;

    /**
     * @var ruleList
     */
    public $ruleList;

    /**
     * @example true
     *
     * @var bool
     */
    public $screenSwitch;

    /**
     * @example 0
     *
     * @var int
     */
    public $skillGroupFrom;

    /**
     * @example 123
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $skillGroupName;

    /**
     * @var skillGroupScreens
     */
    public $skillGroupScreens;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example 2020-12-01T19:28Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 323
     *
     * @var int
     */
    public $vocabId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $vocabName;
    protected $_name = [
        'allContentQualityCheck' => 'AllContentQualityCheck',
        'allRids'                => 'AllRids',
        'allRuleList'            => 'AllRuleList',
        'createTime'             => 'CreateTime',
        'id'                     => 'Id',
        'instanceId'             => 'InstanceId',
        'modelId'                => 'ModelId',
        'modelName'              => 'ModelName',
        'name'                   => 'Name',
        'qualityCheckType'       => 'QualityCheckType',
        'rid'                    => 'Rid',
        'ruleList'               => 'RuleList',
        'screenSwitch'           => 'ScreenSwitch',
        'skillGroupFrom'         => 'SkillGroupFrom',
        'skillGroupId'           => 'SkillGroupId',
        'skillGroupName'         => 'SkillGroupName',
        'skillGroupScreens'      => 'SkillGroupScreens',
        'status'                 => 'Status',
        'type'                   => 'Type',
        'updateTime'             => 'UpdateTime',
        'vocabId'                => 'VocabId',
        'vocabName'              => 'VocabName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allContentQualityCheck) {
            $res['AllContentQualityCheck'] = $this->allContentQualityCheck;
        }
        if (null !== $this->allRids) {
            $res['AllRids'] = $this->allRids;
        }
        if (null !== $this->allRuleList) {
            $res['AllRuleList'] = null !== $this->allRuleList ? $this->allRuleList->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->qualityCheckType) {
            $res['QualityCheckType'] = $this->qualityCheckType;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toMap() : null;
        }
        if (null !== $this->screenSwitch) {
            $res['ScreenSwitch'] = $this->screenSwitch;
        }
        if (null !== $this->skillGroupFrom) {
            $res['SkillGroupFrom'] = $this->skillGroupFrom;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->skillGroupScreens) {
            $res['SkillGroupScreens'] = null !== $this->skillGroupScreens ? $this->skillGroupScreens->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vocabId) {
            $res['VocabId'] = $this->vocabId;
        }
        if (null !== $this->vocabName) {
            $res['VocabName'] = $this->vocabName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroupConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllContentQualityCheck'])) {
            $model->allContentQualityCheck = $map['AllContentQualityCheck'];
        }
        if (isset($map['AllRids'])) {
            $model->allRids = $map['AllRids'];
        }
        if (isset($map['AllRuleList'])) {
            $model->allRuleList = allRuleList::fromMap($map['AllRuleList']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QualityCheckType'])) {
            $model->qualityCheckType = $map['QualityCheckType'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }
        if (isset($map['ScreenSwitch'])) {
            $model->screenSwitch = $map['ScreenSwitch'];
        }
        if (isset($map['SkillGroupFrom'])) {
            $model->skillGroupFrom = $map['SkillGroupFrom'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['SkillGroupScreens'])) {
            $model->skillGroupScreens = skillGroupScreens::fromMap($map['SkillGroupScreens']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VocabId'])) {
            $model->vocabId = $map['VocabId'];
        }
        if (isset($map['VocabName'])) {
            $model->vocabName = $map['VocabName'];
        }

        return $model;
    }
}
