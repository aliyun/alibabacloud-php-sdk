<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunVideoAnalysisShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $generateOptionsShrink;

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
     * @example a3d1c2ac-f086-4a21-9069-f5631542f5a2
     *
     * @var string
     */
    public $taskId;

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
     * @example http://xxxx.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'generateOptionsShrink'          => 'generateOptions',
        'modelCustomPromptTemplate'      => 'modelCustomPromptTemplate',
        'modelCustomPromptTemplateId'    => 'modelCustomPromptTemplateId',
        'modelId'                        => 'modelId',
        'originalSessionId'              => 'originalSessionId',
        'taskId'                         => 'taskId',
        'videoModelCustomPromptTemplate' => 'videoModelCustomPromptTemplate',
        'videoModelId'                   => 'videoModelId',
        'videoUrl'                       => 'videoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateOptionsShrink) {
            $res['generateOptions'] = $this->generateOptionsShrink;
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
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->videoModelCustomPromptTemplate) {
            $res['videoModelCustomPromptTemplate'] = $this->videoModelCustomPromptTemplate;
        }
        if (null !== $this->videoModelId) {
            $res['videoModelId'] = $this->videoModelId;
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
        if (isset($map['generateOptions'])) {
            $model->generateOptionsShrink = $map['generateOptions'];
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
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['videoModelCustomPromptTemplate'])) {
            $model->videoModelCustomPromptTemplate = $map['videoModelCustomPromptTemplate'];
        }
        if (isset($map['videoModelId'])) {
            $model->videoModelId = $map['videoModelId'];
        }
        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
