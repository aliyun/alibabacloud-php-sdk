<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitBatchMediaProducingJobRequest extends Model
{
    /**
     * @description 调用方保证请求幂等性Client Token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 批量混剪ClipsParam
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description 剪辑合成配置
     *
     * @var string
     */
    public $editingProduceConfig;

    /**
     * @description 任务名称
     *
     * @var string
     */
    public $jobTitle;

    /**
     * @description 用户合成输出配置
     *
     * @var string
     */
    public $outputMediaConfig;

    /**
     * @description 用户合成输出目标
     *
     * @var string
     */
    public $outputMediaTarget;

    /**
     * @description 批量混剪下合成成片的个数
     *
     * @var int
     */
    public $outputNum;

    /**
     * @description 剪辑任务工程信息
     *
     * @var string
     */
    public $projectMetadata;

    /**
     * @description 任务来源
     *
     * @var string
     */
    public $source;

    /**
     * @description 提交任务类型
     *
     * @var string
     */
    public $submitBy;

    /**
     * @description 批量混剪模版id
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 用户配置UserData
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'clipsParam'           => 'ClipsParam',
        'editingProduceConfig' => 'EditingProduceConfig',
        'jobTitle'             => 'JobTitle',
        'outputMediaConfig'    => 'OutputMediaConfig',
        'outputMediaTarget'    => 'OutputMediaTarget',
        'outputNum'            => 'OutputNum',
        'projectMetadata'      => 'ProjectMetadata',
        'source'               => 'Source',
        'submitBy'             => 'SubmitBy',
        'templateId'           => 'TemplateId',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }
        if (null !== $this->editingProduceConfig) {
            $res['EditingProduceConfig'] = $this->editingProduceConfig;
        }
        if (null !== $this->jobTitle) {
            $res['JobTitle'] = $this->jobTitle;
        }
        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = $this->outputMediaConfig;
        }
        if (null !== $this->outputMediaTarget) {
            $res['OutputMediaTarget'] = $this->outputMediaTarget;
        }
        if (null !== $this->outputNum) {
            $res['OutputNum'] = $this->outputNum;
        }
        if (null !== $this->projectMetadata) {
            $res['ProjectMetadata'] = $this->projectMetadata;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->submitBy) {
            $res['SubmitBy'] = $this->submitBy;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBatchMediaProducingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }
        if (isset($map['EditingProduceConfig'])) {
            $model->editingProduceConfig = $map['EditingProduceConfig'];
        }
        if (isset($map['JobTitle'])) {
            $model->jobTitle = $map['JobTitle'];
        }
        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = $map['OutputMediaConfig'];
        }
        if (isset($map['OutputMediaTarget'])) {
            $model->outputMediaTarget = $map['OutputMediaTarget'];
        }
        if (isset($map['OutputNum'])) {
            $model->outputNum = $map['OutputNum'];
        }
        if (isset($map['ProjectMetadata'])) {
            $model->projectMetadata = $map['ProjectMetadata'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SubmitBy'])) {
            $model->submitBy = $map['SubmitBy'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
