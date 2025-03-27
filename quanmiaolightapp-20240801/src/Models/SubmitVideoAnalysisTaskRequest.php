<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\frameSampleMethod;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\textProcessTasks;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\videoRoles;

class SubmitVideoAnalysisTaskRequest extends Model
{
    /**
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
     * @var float
     */
    public $snapshotInterval;

    /**
     * @var int
     */
    public $splitInterval;

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
     * @var string
     */
    public $videoUrl;
    protected $_name = [
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
        'videoExtraInfo' => 'videoExtraInfo',
        'videoModelCustomPromptTemplate' => 'videoModelCustomPromptTemplate',
        'videoModelId' => 'videoModelId',
        'videoRoles' => 'videoRoles',
        'videoShotFaceIdentityCount' => 'videoShotFaceIdentityCount',
        'videoUrl' => 'videoUrl',
    ];

    public function validate()
    {
        if (\is_array($this->excludeGenerateOptions)) {
            Model::validateArray($this->excludeGenerateOptions);
        }
        if (null !== $this->frameSampleMethod) {
            $this->frameSampleMethod->validate();
        }
        if (\is_array($this->generateOptions)) {
            Model::validateArray($this->generateOptions);
        }
        if (\is_array($this->textProcessTasks)) {
            Model::validateArray($this->textProcessTasks);
        }
        if (\is_array($this->videoRoles)) {
            Model::validateArray($this->videoRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deduplicationId) {
            $res['deduplicationId'] = $this->deduplicationId;
        }

        if (null !== $this->excludeGenerateOptions) {
            if (\is_array($this->excludeGenerateOptions)) {
                $res['excludeGenerateOptions'] = [];
                $n1 = 0;
                foreach ($this->excludeGenerateOptions as $item1) {
                    $res['excludeGenerateOptions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->faceIdentitySimilarityMinScore) {
            $res['faceIdentitySimilarityMinScore'] = $this->faceIdentitySimilarityMinScore;
        }

        if (null !== $this->frameSampleMethod) {
            $res['frameSampleMethod'] = null !== $this->frameSampleMethod ? $this->frameSampleMethod->toArray($noStream) : $this->frameSampleMethod;
        }

        if (null !== $this->generateOptions) {
            if (\is_array($this->generateOptions)) {
                $res['generateOptions'] = [];
                $n1 = 0;
                foreach ($this->generateOptions as $item1) {
                    $res['generateOptions'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->textProcessTasks)) {
                $res['textProcessTasks'] = [];
                $n1 = 0;
                foreach ($this->textProcessTasks as $item1) {
                    $res['textProcessTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->videoRoles)) {
                $res['videoRoles'] = [];
                $n1 = 0;
                foreach ($this->videoRoles as $item1) {
                    $res['videoRoles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deduplicationId'])) {
            $model->deduplicationId = $map['deduplicationId'];
        }

        if (isset($map['excludeGenerateOptions'])) {
            if (!empty($map['excludeGenerateOptions'])) {
                $model->excludeGenerateOptions = [];
                $n1 = 0;
                foreach ($map['excludeGenerateOptions'] as $item1) {
                    $model->excludeGenerateOptions[$n1++] = $item1;
                }
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
                $model->generateOptions = [];
                $n1 = 0;
                foreach ($map['generateOptions'] as $item1) {
                    $model->generateOptions[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['textProcessTasks'] as $item1) {
                    $model->textProcessTasks[$n1++] = textProcessTasks::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['videoRoles'] as $item1) {
                    $model->videoRoles[$n1++] = videoRoles::fromMap($item1);
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
