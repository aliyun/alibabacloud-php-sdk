<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\frameSampleMethod;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\textProcessTasks;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\videoCaptionInfo;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\videoRoles;
use AlibabaCloud\Tea\Model;

class SubmitVideoAnalysisTaskRequest extends Model
{
    /**
     * @var string
     */
    public $autoRoleRecognitionVideoUrl;

    /**
     * @example 1
     *
     * @var string
     */
    public $deduplicationId;

    /**
     * @var string[]
     */
    public $excludeGenerateOptions;

    /**
     * @var float
     */
    public $faceIdentitySimilarityMinScore;

    /**
     * @var frameSampleMethod
     */
    public $frameSampleMethod;

    /**
     * @var string[]
     */
    public $generateOptions;

    /**
     * @example chinese
     *
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $modelCustomPromptTemplate;

    /**
     * @example PlotDetail
     *
     * @var string
     */
    public $modelCustomPromptTemplateId;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 2
     *
     * @var float
     */
    public $snapshotInterval;

    /**
     * @example 10
     *
     * @var int
     */
    public $splitInterval;

    /**
     * @var textProcessTasks[]
     */
    public $textProcessTasks;

    /**
     * @var videoCaptionInfo
     */
    public $videoCaptionInfo;

    /**
     * @var string
     */
    public $videoExtraInfo;

    /**
     * @var string
     */
    public $videoModelCustomPromptTemplate;

    /**
     * @example qwen-vl-max-latest
     *
     * @var string
     */
    public $videoModelId;

    /**
     * @var videoRoles[]
     */
    public $videoRoles;

    /**
     * @var int
     */
    public $videoShotFaceIdentityCount;

    /**
     * @description This parameter is required.
     *
     * @example http://xxxx.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'autoRoleRecognitionVideoUrl' => 'autoRoleRecognitionVideoUrl',
        'deduplicationId' => 'deduplicationId',
        'excludeGenerateOptions' => 'excludeGenerateOptions',
        'faceIdentitySimilarityMinScore' => 'faceIdentitySimilarityMinScore',
        'frameSampleMethod' => 'frameSampleMethod',
        'generateOptions' => 'generateOptions',
        'language' => 'language',
        'modelCustomPromptTemplate' => 'modelCustomPromptTemplate',
        'modelCustomPromptTemplateId' => 'modelCustomPromptTemplateId',
        'modelId' => 'modelId',
        'snapshotInterval' => 'snapshotInterval',
        'splitInterval' => 'splitInterval',
        'textProcessTasks' => 'textProcessTasks',
        'videoCaptionInfo' => 'videoCaptionInfo',
        'videoExtraInfo' => 'videoExtraInfo',
        'videoModelCustomPromptTemplate' => 'videoModelCustomPromptTemplate',
        'videoModelId' => 'videoModelId',
        'videoRoles' => 'videoRoles',
        'videoShotFaceIdentityCount' => 'videoShotFaceIdentityCount',
        'videoUrl' => 'videoUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRoleRecognitionVideoUrl) {
            $res['autoRoleRecognitionVideoUrl'] = $this->autoRoleRecognitionVideoUrl;
        }
        if (null !== $this->deduplicationId) {
            $res['deduplicationId'] = $this->deduplicationId;
        }
        if (null !== $this->excludeGenerateOptions) {
            $res['excludeGenerateOptions'] = $this->excludeGenerateOptions;
        }
        if (null !== $this->faceIdentitySimilarityMinScore) {
            $res['faceIdentitySimilarityMinScore'] = $this->faceIdentitySimilarityMinScore;
        }
        if (null !== $this->frameSampleMethod) {
            $res['frameSampleMethod'] = null !== $this->frameSampleMethod ? $this->frameSampleMethod->toMap() : null;
        }
        if (null !== $this->generateOptions) {
            $res['generateOptions'] = $this->generateOptions;
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
        if (null !== $this->snapshotInterval) {
            $res['snapshotInterval'] = $this->snapshotInterval;
        }
        if (null !== $this->splitInterval) {
            $res['splitInterval'] = $this->splitInterval;
        }
        if (null !== $this->textProcessTasks) {
            $res['textProcessTasks'] = [];
            if (null !== $this->textProcessTasks && \is_array($this->textProcessTasks)) {
                $n = 0;
                foreach ($this->textProcessTasks as $item) {
                    $res['textProcessTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoCaptionInfo) {
            $res['videoCaptionInfo'] = null !== $this->videoCaptionInfo ? $this->videoCaptionInfo->toMap() : null;
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
        if (null !== $this->videoRoles) {
            $res['videoRoles'] = [];
            if (null !== $this->videoRoles && \is_array($this->videoRoles)) {
                $n = 0;
                foreach ($this->videoRoles as $item) {
                    $res['videoRoles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoShotFaceIdentityCount) {
            $res['videoShotFaceIdentityCount'] = $this->videoShotFaceIdentityCount;
        }
        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitVideoAnalysisTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRoleRecognitionVideoUrl'])) {
            $model->autoRoleRecognitionVideoUrl = $map['autoRoleRecognitionVideoUrl'];
        }
        if (isset($map['deduplicationId'])) {
            $model->deduplicationId = $map['deduplicationId'];
        }
        if (isset($map['excludeGenerateOptions'])) {
            if (!empty($map['excludeGenerateOptions'])) {
                $model->excludeGenerateOptions = $map['excludeGenerateOptions'];
            }
        }
        if (isset($map['faceIdentitySimilarityMinScore'])) {
            $model->faceIdentitySimilarityMinScore = $map['faceIdentitySimilarityMinScore'];
        }
        if (isset($map['frameSampleMethod'])) {
            $model->frameSampleMethod = frameSampleMethod::fromMap($map['frameSampleMethod']);
        }
        if (isset($map['generateOptions'])) {
            if (!empty($map['generateOptions'])) {
                $model->generateOptions = $map['generateOptions'];
            }
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
        if (isset($map['snapshotInterval'])) {
            $model->snapshotInterval = $map['snapshotInterval'];
        }
        if (isset($map['splitInterval'])) {
            $model->splitInterval = $map['splitInterval'];
        }
        if (isset($map['textProcessTasks'])) {
            if (!empty($map['textProcessTasks'])) {
                $model->textProcessTasks = [];
                $n = 0;
                foreach ($map['textProcessTasks'] as $item) {
                    $model->textProcessTasks[$n++] = null !== $item ? textProcessTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['videoCaptionInfo'])) {
            $model->videoCaptionInfo = videoCaptionInfo::fromMap($map['videoCaptionInfo']);
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
            if (!empty($map['videoRoles'])) {
                $model->videoRoles = [];
                $n = 0;
                foreach ($map['videoRoles'] as $item) {
                    $model->videoRoles[$n++] = null !== $item ? videoRoles::fromMap($item) : $item;
                }
            }
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
