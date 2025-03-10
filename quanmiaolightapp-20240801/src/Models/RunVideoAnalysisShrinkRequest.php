<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunVideoAnalysisShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $frameSampleMethodShrink;

    /**
     * @var string
     */
    public $generateOptionsShrink;

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
     * @var string
     */
    public $videoRolesShrink;

    /**
     * @example http://xxxx.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'frameSampleMethodShrink'        => 'frameSampleMethod',
        'generateOptionsShrink'          => 'generateOptions',
        'language'                       => 'language',
        'modelCustomPromptTemplate'      => 'modelCustomPromptTemplate',
        'modelCustomPromptTemplateId'    => 'modelCustomPromptTemplateId',
        'modelId'                        => 'modelId',
        'originalSessionId'              => 'originalSessionId',
        'snapshotInterval'               => 'snapshotInterval',
        'taskId'                         => 'taskId',
        'videoExtraInfo'                 => 'videoExtraInfo',
        'videoModelCustomPromptTemplate' => 'videoModelCustomPromptTemplate',
        'videoModelId'                   => 'videoModelId',
        'videoRolesShrink'               => 'videoRoles',
        'videoUrl'                       => 'videoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunVideoAnalysisShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
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
        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
