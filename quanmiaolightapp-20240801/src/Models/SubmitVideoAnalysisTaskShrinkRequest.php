<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class SubmitVideoAnalysisTaskShrinkRequest extends Model
{
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
     * @var string
     */
    public $textProcessTasksShrink;

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
     * @var string
     */
    public $videoRolesShrink;

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
        'faceIdentitySimilarityMinScore' => 'faceIdentitySimilarityMinScore',
        'frameSampleMethodShrink' => 'frameSampleMethod',
        'generateOptionsShrink' => 'generateOptions',
        'language' => 'language',
        'modelCustomPromptTemplate' => 'modelCustomPromptTemplate',
        'modelCustomPromptTemplateId' => 'modelCustomPromptTemplateId',
        'modelId' => 'modelId',
        'snapshotInterval' => 'snapshotInterval',
        'textProcessTasksShrink' => 'textProcessTasks',
        'videoExtraInfo' => 'videoExtraInfo',
        'videoModelCustomPromptTemplate' => 'videoModelCustomPromptTemplate',
        'videoModelId' => 'videoModelId',
        'videoRolesShrink' => 'videoRoles',
        'videoShotFaceIdentityCount' => 'videoShotFaceIdentityCount',
        'videoUrl' => 'videoUrl',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->snapshotInterval) {
            $res['snapshotInterval'] = $this->snapshotInterval;
        }
        if (null !== $this->textProcessTasksShrink) {
            $res['textProcessTasks'] = $this->textProcessTasksShrink;
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

    /**
     * @param array $map
     *
     * @return SubmitVideoAnalysisTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['snapshotInterval'])) {
            $model->snapshotInterval = $map['snapshotInterval'];
        }
        if (isset($map['textProcessTasks'])) {
            $model->textProcessTasksShrink = $map['textProcessTasks'];
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
