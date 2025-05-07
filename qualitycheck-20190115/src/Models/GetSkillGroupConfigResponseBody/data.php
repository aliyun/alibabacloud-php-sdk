<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponseBody\data\allRuleList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponseBody\data\ruleList;

class data extends Model
{
    /**
     * @var int
     */
    public $allContentQualityCheck;

    /**
     * @var string
     */
    public $allRids;

    /**
     * @var allRuleList
     */
    public $allRuleList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $qualityCheckType;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var ruleList
     */
    public $ruleList;

    /**
     * @var int
     */
    public $skillGroupFrom;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $vocabId;

    /**
     * @var string
     */
    public $vocabName;
    protected $_name = [
        'allContentQualityCheck' => 'AllContentQualityCheck',
        'allRids' => 'AllRids',
        'allRuleList' => 'AllRuleList',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
        'name' => 'Name',
        'qualityCheckType' => 'QualityCheckType',
        'rid' => 'Rid',
        'ruleList' => 'RuleList',
        'skillGroupFrom' => 'SkillGroupFrom',
        'skillGroupId' => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
        'status' => 'Status',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'vocabId' => 'VocabId',
        'vocabName' => 'VocabName',
    ];

    public function validate()
    {
        if (null !== $this->allRuleList) {
            $this->allRuleList->validate();
        }
        if (null !== $this->ruleList) {
            $this->ruleList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allContentQualityCheck) {
            $res['AllContentQualityCheck'] = $this->allContentQualityCheck;
        }

        if (null !== $this->allRids) {
            $res['AllRids'] = $this->allRids;
        }

        if (null !== $this->allRuleList) {
            $res['AllRuleList'] = null !== $this->allRuleList ? $this->allRuleList->toArray($noStream) : $this->allRuleList;
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
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toArray($noStream) : $this->ruleList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SkillGroupFrom'])) {
            $model->skillGroupFrom = $map['SkillGroupFrom'];
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
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
