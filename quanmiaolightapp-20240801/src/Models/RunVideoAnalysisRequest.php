<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest\frameSampleMethod;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest\textProcessTasks;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest\videoRoles;
use AlibabaCloud\Tea\Model;

class RunVideoAnalysisRequest extends Model
{
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
     * @example english
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
     * @example a3d1c2ac-f086-4a21-9069-f5631542f5ax
     *
     * @var string
     */
    public $originalSessionId;

    /**
     * @var float
     */
    public $snapshotInterval;

    /**
     * @example a3d1c2ac-f086-4a21-9069-f5631542f5a2
     *
     * @var string
     */
    public $taskId;

    /**
     * @var textProcessTasks[]
     */
    public $textProcessTasks;

    /**
     * @var string
     */
    public $videoExtraInfo;

    /**
     * @var string
     */
    public $videoModelCustomPromptTemplate;

    /**
     * @example qwen-vl-max
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
     * @example http://xxxx.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'faceIdentitySimilarityMinScore' => 'faceIdentitySimilarityMinScore',
        'frameSampleMethod' => 'frameSampleMethod',
        'generateOptions' => 'generateOptions',
        'language' => 'language',
        'modelCustomPromptTemplate' => 'modelCustomPromptTemplate',
        'modelCustomPromptTemplateId' => 'modelCustomPromptTemplateId',
        'modelId' => 'modelId',
        'originalSessionId' => 'originalSessionId',
        'snapshotInterval' => 'snapshotInterval',
        'taskId' => 'taskId',
        'textProcessTasks' => 'textProcessTasks',
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
        if (null !== $this->originalSessionId) {
            $res['originalSessionId'] = $this->originalSessionId;
        }
        if (null !== $this->snapshotInterval) {
            $res['snapshotInterval'] = $this->snapshotInterval;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
     * @return RunVideoAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['originalSessionId'])) {
            $model->originalSessionId = $map['originalSessionId'];
        }
        if (isset($map['snapshotInterval'])) {
            $model->snapshotInterval = $map['snapshotInterval'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
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
