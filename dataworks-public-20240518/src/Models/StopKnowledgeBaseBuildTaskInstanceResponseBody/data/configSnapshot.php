<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopKnowledgeBaseBuildTaskInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StopKnowledgeBaseBuildTaskInstanceResponseBody\data\configSnapshot\runtimeResource;

class configSnapshot extends Model
{
    /**
     * @var string
     */
    public $contentLocale;

    /**
     * @var string
     */
    public $llmModel;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var runtimeResource
     */
    public $runtimeResource;
    protected $_name = [
        'contentLocale' => 'ContentLocale',
        'llmModel' => 'LlmModel',
        'projectId' => 'ProjectId',
        'runtimeResource' => 'RuntimeResource',
    ];

    public function validate()
    {
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentLocale) {
            $res['ContentLocale'] = $this->contentLocale;
        }

        if (null !== $this->llmModel) {
            $res['LlmModel'] = $this->llmModel;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
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
        if (isset($map['ContentLocale'])) {
            $model->contentLocale = $map['ContentLocale'];
        }

        if (isset($map['LlmModel'])) {
            $model->llmModel = $map['LlmModel'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        return $model;
    }
}
