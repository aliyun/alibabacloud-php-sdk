<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitBatchMediaProducingJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clipsParam;

    /**
     * @var string
     */
    public $editingProduceConfig;

    /**
     * @var string
     */
    public $jobTitle;

    /**
     * @var string
     */
    public $outputMediaConfig;

    /**
     * @var string
     */
    public $outputMediaTarget;

    /**
     * @var int
     */
    public $outputNum;

    /**
     * @var string
     */
    public $projectMetadata;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $submitBy;

    /**
     * @var string
     */
    public $templateId;

    /**
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
