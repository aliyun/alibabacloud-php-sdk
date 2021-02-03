<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaProducingJobRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $timeline;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $clipsParam;

    /**
     * @var string
     */
    public $projectMetadata;

    /**
     * @var string
     */
    public $outputMediaTarget;

    /**
     * @var string
     */
    public $outputMediaConfig;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'projectId'         => 'ProjectId',
        'timeline'          => 'Timeline',
        'templateId'        => 'TemplateId',
        'clipsParam'        => 'ClipsParam',
        'projectMetadata'   => 'ProjectMetadata',
        'outputMediaTarget' => 'OutputMediaTarget',
        'outputMediaConfig' => 'OutputMediaConfig',
        'userData'          => 'UserData',
        'clientToken'       => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }
        if (null !== $this->projectMetadata) {
            $res['ProjectMetadata'] = $this->projectMetadata;
        }
        if (null !== $this->outputMediaTarget) {
            $res['OutputMediaTarget'] = $this->outputMediaTarget;
        }
        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = $this->outputMediaConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaProducingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }
        if (isset($map['ProjectMetadata'])) {
            $model->projectMetadata = $map['ProjectMetadata'];
        }
        if (isset($map['OutputMediaTarget'])) {
            $model->outputMediaTarget = $map['OutputMediaTarget'];
        }
        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = $map['OutputMediaConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
