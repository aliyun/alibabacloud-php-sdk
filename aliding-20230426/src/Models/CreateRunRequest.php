<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateRunRequest extends Model
{
    /**
     * @var bool
     */
    public $allowStructViewContent;

    /**
     * @description This parameter is required.
     *
     * @example assistantId1
     *
     * @var string
     */
    public $assistantId;

    /**
     * @example assistantId
     *
     * @var string
     */
    public $originalAssistantId;

    /**
     * @example agentKey1
     *
     * @var string
     */
    public $sourceIdOfOriginalAssistantId;

    /**
     * @example 1
     *
     * @var string
     */
    public $sourceTypeOfOriginalAssistantId;

    /**
     * @example false
     *
     * @var bool
     */
    public $stream;

    /**
     * @description This parameter is required.
     *
     * @example threadId123
     *
     * @var string
     */
    public $threadId;
    protected $_name = [
        'allowStructViewContent' => 'allowStructViewContent',
        'assistantId' => 'assistantId',
        'originalAssistantId' => 'originalAssistantId',
        'sourceIdOfOriginalAssistantId' => 'sourceIdOfOriginalAssistantId',
        'sourceTypeOfOriginalAssistantId' => 'sourceTypeOfOriginalAssistantId',
        'stream' => 'stream',
        'threadId' => 'threadId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowStructViewContent) {
            $res['allowStructViewContent'] = $this->allowStructViewContent;
        }
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }
        if (null !== $this->originalAssistantId) {
            $res['originalAssistantId'] = $this->originalAssistantId;
        }
        if (null !== $this->sourceIdOfOriginalAssistantId) {
            $res['sourceIdOfOriginalAssistantId'] = $this->sourceIdOfOriginalAssistantId;
        }
        if (null !== $this->sourceTypeOfOriginalAssistantId) {
            $res['sourceTypeOfOriginalAssistantId'] = $this->sourceTypeOfOriginalAssistantId;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }
        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowStructViewContent'])) {
            $model->allowStructViewContent = $map['allowStructViewContent'];
        }
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }
        if (isset($map['originalAssistantId'])) {
            $model->originalAssistantId = $map['originalAssistantId'];
        }
        if (isset($map['sourceIdOfOriginalAssistantId'])) {
            $model->sourceIdOfOriginalAssistantId = $map['sourceIdOfOriginalAssistantId'];
        }
        if (isset($map['sourceTypeOfOriginalAssistantId'])) {
            $model->sourceTypeOfOriginalAssistantId = $map['sourceTypeOfOriginalAssistantId'];
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }
        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
