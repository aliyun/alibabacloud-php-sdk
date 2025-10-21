<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class UpdatePolicyShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $contentSafeModelInstanceId;

    /**
     * @var int
     */
    public $enableSensitiveInputCheck;

    /**
     * @var int
     */
    public $enableSensitiveOutputCheck;

    /**
     * @var string
     */
    public $harmfulCategoryConfigInfoListShrink;

    /**
     * @var string
     */
    public $inputSafeAnswer;

    /**
     * @var int
     */
    public $inputSafeAnswerSwitch;

    /**
     * @var int
     */
    public $isSidecarPolicy;

    /**
     * @var string
     */
    public $outputSafeAnswer;

    /**
     * @var int
     */
    public $outputSafeAnswerSwitch;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $promptAttackInfoShrink;

    /**
     * @var string
     */
    public $promptAttackInfoListShrink;

    /**
     * @var int
     */
    public $promptAttackModelInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regularExpressListShrink;

    /**
     * @var int
     */
    public $sceneType;

    /**
     * @var string
     */
    public $sensitiveConfigListShrink;

    /**
     * @var string
     */
    public $sensitiveTopicListShrink;

    /**
     * @var int
     */
    public $sensitiveTopicModelInstanceId;

    /**
     * @var string
     */
    public $sensitiveWordListShrink;

    /**
     * @var string
     */
    public $topicConfigInfoListShrink;

    /**
     * @var string
     */
    public $wordGroupInfoListShrink;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'contentSafeModelInstanceId' => 'ContentSafeModelInstanceId',
        'enableSensitiveInputCheck' => 'EnableSensitiveInputCheck',
        'enableSensitiveOutputCheck' => 'EnableSensitiveOutputCheck',
        'harmfulCategoryConfigInfoListShrink' => 'HarmfulCategoryConfigInfoList',
        'inputSafeAnswer' => 'InputSafeAnswer',
        'inputSafeAnswerSwitch' => 'InputSafeAnswerSwitch',
        'isSidecarPolicy' => 'IsSidecarPolicy',
        'outputSafeAnswer' => 'OutputSafeAnswer',
        'outputSafeAnswerSwitch' => 'OutputSafeAnswerSwitch',
        'policyId' => 'PolicyId',
        'policyName' => 'PolicyName',
        'promptAttackInfoShrink' => 'PromptAttackInfo',
        'promptAttackInfoListShrink' => 'PromptAttackInfoList',
        'promptAttackModelInstanceId' => 'PromptAttackModelInstanceId',
        'regionId' => 'RegionId',
        'regularExpressListShrink' => 'RegularExpressList',
        'sceneType' => 'SceneType',
        'sensitiveConfigListShrink' => 'SensitiveConfigList',
        'sensitiveTopicListShrink' => 'SensitiveTopicList',
        'sensitiveTopicModelInstanceId' => 'SensitiveTopicModelInstanceId',
        'sensitiveWordListShrink' => 'SensitiveWordList',
        'topicConfigInfoListShrink' => 'TopicConfigInfoList',
        'wordGroupInfoListShrink' => 'WordGroupInfoList',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentSafeModelInstanceId) {
            $res['ContentSafeModelInstanceId'] = $this->contentSafeModelInstanceId;
        }

        if (null !== $this->enableSensitiveInputCheck) {
            $res['EnableSensitiveInputCheck'] = $this->enableSensitiveInputCheck;
        }

        if (null !== $this->enableSensitiveOutputCheck) {
            $res['EnableSensitiveOutputCheck'] = $this->enableSensitiveOutputCheck;
        }

        if (null !== $this->harmfulCategoryConfigInfoListShrink) {
            $res['HarmfulCategoryConfigInfoList'] = $this->harmfulCategoryConfigInfoListShrink;
        }

        if (null !== $this->inputSafeAnswer) {
            $res['InputSafeAnswer'] = $this->inputSafeAnswer;
        }

        if (null !== $this->inputSafeAnswerSwitch) {
            $res['InputSafeAnswerSwitch'] = $this->inputSafeAnswerSwitch;
        }

        if (null !== $this->isSidecarPolicy) {
            $res['IsSidecarPolicy'] = $this->isSidecarPolicy;
        }

        if (null !== $this->outputSafeAnswer) {
            $res['OutputSafeAnswer'] = $this->outputSafeAnswer;
        }

        if (null !== $this->outputSafeAnswerSwitch) {
            $res['OutputSafeAnswerSwitch'] = $this->outputSafeAnswerSwitch;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->promptAttackInfoShrink) {
            $res['PromptAttackInfo'] = $this->promptAttackInfoShrink;
        }

        if (null !== $this->promptAttackInfoListShrink) {
            $res['PromptAttackInfoList'] = $this->promptAttackInfoListShrink;
        }

        if (null !== $this->promptAttackModelInstanceId) {
            $res['PromptAttackModelInstanceId'] = $this->promptAttackModelInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regularExpressListShrink) {
            $res['RegularExpressList'] = $this->regularExpressListShrink;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        if (null !== $this->sensitiveConfigListShrink) {
            $res['SensitiveConfigList'] = $this->sensitiveConfigListShrink;
        }

        if (null !== $this->sensitiveTopicListShrink) {
            $res['SensitiveTopicList'] = $this->sensitiveTopicListShrink;
        }

        if (null !== $this->sensitiveTopicModelInstanceId) {
            $res['SensitiveTopicModelInstanceId'] = $this->sensitiveTopicModelInstanceId;
        }

        if (null !== $this->sensitiveWordListShrink) {
            $res['SensitiveWordList'] = $this->sensitiveWordListShrink;
        }

        if (null !== $this->topicConfigInfoListShrink) {
            $res['TopicConfigInfoList'] = $this->topicConfigInfoListShrink;
        }

        if (null !== $this->wordGroupInfoListShrink) {
            $res['WordGroupInfoList'] = $this->wordGroupInfoListShrink;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ContentSafeModelInstanceId'])) {
            $model->contentSafeModelInstanceId = $map['ContentSafeModelInstanceId'];
        }

        if (isset($map['EnableSensitiveInputCheck'])) {
            $model->enableSensitiveInputCheck = $map['EnableSensitiveInputCheck'];
        }

        if (isset($map['EnableSensitiveOutputCheck'])) {
            $model->enableSensitiveOutputCheck = $map['EnableSensitiveOutputCheck'];
        }

        if (isset($map['HarmfulCategoryConfigInfoList'])) {
            $model->harmfulCategoryConfigInfoListShrink = $map['HarmfulCategoryConfigInfoList'];
        }

        if (isset($map['InputSafeAnswer'])) {
            $model->inputSafeAnswer = $map['InputSafeAnswer'];
        }

        if (isset($map['InputSafeAnswerSwitch'])) {
            $model->inputSafeAnswerSwitch = $map['InputSafeAnswerSwitch'];
        }

        if (isset($map['IsSidecarPolicy'])) {
            $model->isSidecarPolicy = $map['IsSidecarPolicy'];
        }

        if (isset($map['OutputSafeAnswer'])) {
            $model->outputSafeAnswer = $map['OutputSafeAnswer'];
        }

        if (isset($map['OutputSafeAnswerSwitch'])) {
            $model->outputSafeAnswerSwitch = $map['OutputSafeAnswerSwitch'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['PromptAttackInfo'])) {
            $model->promptAttackInfoShrink = $map['PromptAttackInfo'];
        }

        if (isset($map['PromptAttackInfoList'])) {
            $model->promptAttackInfoListShrink = $map['PromptAttackInfoList'];
        }

        if (isset($map['PromptAttackModelInstanceId'])) {
            $model->promptAttackModelInstanceId = $map['PromptAttackModelInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegularExpressList'])) {
            $model->regularExpressListShrink = $map['RegularExpressList'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        if (isset($map['SensitiveConfigList'])) {
            $model->sensitiveConfigListShrink = $map['SensitiveConfigList'];
        }

        if (isset($map['SensitiveTopicList'])) {
            $model->sensitiveTopicListShrink = $map['SensitiveTopicList'];
        }

        if (isset($map['SensitiveTopicModelInstanceId'])) {
            $model->sensitiveTopicModelInstanceId = $map['SensitiveTopicModelInstanceId'];
        }

        if (isset($map['SensitiveWordList'])) {
            $model->sensitiveWordListShrink = $map['SensitiveWordList'];
        }

        if (isset($map['TopicConfigInfoList'])) {
            $model->topicConfigInfoListShrink = $map['TopicConfigInfoList'];
        }

        if (isset($map['WordGroupInfoList'])) {
            $model->wordGroupInfoListShrink = $map['WordGroupInfoList'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
