<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class RunVideoAnalysisShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $excludeGenerateOptionsShrink;

    /**
     * @var float
     */
    public $faceIdentitySimilarityMinScore;

    /**
     * @var string
     */
    public $frameSampleMethodShrink;

    /**
     * @var string
     */
    public $generateOptionsShrink;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $modelCustomPromptTemplate;

    /**
     * @var string
     */
    public $modelCustomPromptTemplateId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $originalSessionId;

    /**
     * @var float
     */
    public $snapshotInterval;

    /**
     * @var int
     */
    public $splitInterval;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $textProcessTasksShrink;

    /**
     * @var string
     */
    public $videoCaptionInfoShrink;

    /**
     * @var string
     */
    public $videoExtraInfo;

    /**
     * @var string
     */
    public $videoModelCustomPromptTemplate;

    /**
     * @var string
     */
    public $videoModelId;

    /**
     * @var string
     */
    public $videoRolesShrink;

    /**
     * @var int
     */
    public $videoShotFaceIdentityCount;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'excludeGenerateOptionsShrink' => 'excludeGenerateOptions',
        'faceIdentitySimilarityMinScore' => 'faceIdentitySimilarityMinScore',
        'frameSampleMethodShrink' => 'frameSampleMethod',
        'generateOptionsShrink' => 'generateOptions',
        'language' => 'language',
        'modelCustomPromptTemplate' => 'modelCustomPromptTemplate',
        'modelCustomPromptTemplateId' => 'modelCustomPromptTemplateId',
        'modelId' => 'modelId',
        'originalSessionId' => 'originalSessionId',
        'snapshotInterval' => 'snapshotInterval',
        'splitInterval' => 'splitInterval',
        'taskId' => 'taskId',
        'textProcessTasksShrink' => 'textProcessTasks',
        'videoCaptionInfoShrink' => 'videoCaptionInfo',
        'videoExtraInfo' => 'videoExtraInfo',
        'videoModelCustomPromptTemplate' => 'videoModelCustomPromptTemplate',
        'videoModelId' => 'videoModelId',
        'videoRolesShrink' => 'videoRoles',
        'videoShotFaceIdentityCount' => 'videoShotFaceIdentityCount',
        'videoUrl' => 'videoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeGenerateOptionsShrink) {
            $res['excludeGenerateOptions'] = $this->excludeGenerateOptionsShrink;
        }

        if (null !== $this->faceIdentitySimilarityMinScore) {
            $res['faceIdentitySimilarityMinScore'] = $this->faceIdentitySimilarityMinScore;
        }

        if (null !== $this->frameSampleMethodShrink) {
            $res['frameSampleMethod'] = $this->frameSampleMethodShrink;
        }

        if (null !== $this->generateOptionsShrink) {
            $res['generateOptions'] = $this->generateOptionsShrink;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->modelCustomPromptTemplate) {
            $res['modelCustomPromptTemplate'] = $this->modelCustomPromptTemplate;
        }

        if (null !== $this->modelCustomPromptTemplateId) {
            $res['modelCustomPromptTemplateId'] = $this->modelCustomPromptTemplateId;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->originalSessionId) {
            $res['originalSessionId'] = $this->originalSessionId;
        }

        if (null !== $this->snapshotInterval) {
            $res['snapshotInterval'] = $this->snapshotInterval;
        }

        if (null !== $this->splitInterval) {
            $res['splitInterval'] = $this->splitInterval;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->textProcessTasksShrink) {
            $res['textProcessTasks'] = $this->textProcessTasksShrink;
        }

        if (null !== $this->videoCaptionInfoShrink) {
            $res['videoCaptionInfo'] = $this->videoCaptionInfoShrink;
        }

        if (null !== $this->videoExtraInfo) {
            $res['videoExtraInfo'] = $this->videoExtraInfo;
        }

        if (null !== $this->videoModelCustomPromptTemplate) {
            $res['videoModelCustomPromptTemplate'] = $this->videoModelCustomPromptTemplate;
        }

        if (null !== $this->videoModelId) {
            $res['videoModelId'] = $this->videoModelId;
        }

        if (null !== $this->videoRolesShrink) {
            $res['videoRoles'] = $this->videoRolesShrink;
        }

        if (null !== $this->videoShotFaceIdentityCount) {
            $res['videoShotFaceIdentityCount'] = $this->videoShotFaceIdentityCount;
        }

        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
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
        if (isset($map['excludeGenerateOptions'])) {
            $model->excludeGenerateOptionsShrink = $map['excludeGenerateOptions'];
        }

        if (isset($map['faceIdentitySimilarityMinScore'])) {
            $model->faceIdentitySimilarityMinScore = $map['faceIdentitySimilarityMinScore'];
        }

        if (isset($map['frameSampleMethod'])) {
            $model->frameSampleMethodShrink = $map['frameSampleMethod'];
        }

        if (isset($map['generateOptions'])) {
            $model->generateOptionsShrink = $map['generateOptions'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['modelCustomPromptTemplate'])) {
            $model->modelCustomPromptTemplate = $map['modelCustomPromptTemplate'];
        }

        if (isset($map['modelCustomPromptTemplateId'])) {
            $model->modelCustomPromptTemplateId = $map['modelCustomPromptTemplateId'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['originalSessionId'])) {
            $model->originalSessionId = $map['originalSessionId'];
        }

        if (isset($map['snapshotInterval'])) {
            $model->snapshotInterval = $map['snapshotInterval'];
        }

        if (isset($map['splitInterval'])) {
            $model->splitInterval = $map['splitInterval'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['textProcessTasks'])) {
            $model->textProcessTasksShrink = $map['textProcessTasks'];
        }

        if (isset($map['videoCaptionInfo'])) {
            $model->videoCaptionInfoShrink = $map['videoCaptionInfo'];
        }

        if (isset($map['videoExtraInfo'])) {
            $model->videoExtraInfo = $map['videoExtraInfo'];
        }

        if (isset($map['videoModelCustomPromptTemplate'])) {
            $model->videoModelCustomPromptTemplate = $map['videoModelCustomPromptTemplate'];
        }

        if (isset($map['videoModelId'])) {
            $model->videoModelId = $map['videoModelId'];
        }

        if (isset($map['videoRoles'])) {
            $model->videoRolesShrink = $map['videoRoles'];
        }

        if (isset($map['videoShotFaceIdentityCount'])) {
            $model->videoShotFaceIdentityCount = $map['videoShotFaceIdentityCount'];
        }

        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
