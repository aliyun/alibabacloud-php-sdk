<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class SubmitVideoAnalysisTaskShrinkRequest extends Model
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
        'snapshotInterval'               => 'snapshotInterval',
        'videoExtraInfo'                 => 'videoExtraInfo',
        'videoModelCustomPromptTemplate' => 'videoModelCustomPromptTemplate',
        'videoModelId'                   => 'videoModelId',
        'videoRolesShrink'               => 'videoRoles',
        'videoUrl'                       => 'videoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->snapshotInterval) {
            $res['snapshotInterval'] = $this->snapshotInterval;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['snapshotInterval'])) {
            $model->snapshotInterval = $map['snapshotInterval'];
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
