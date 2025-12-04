<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunRequest\extLoginUser;

class CreateRunRequest extends Model
{
    /**
     * @var bool
     */
    public $allowStructViewContent;

    /**
     * @var string
     */
    public $assistantId;

    /**
     * @var extLoginUser
     */
    public $extLoginUser;

    /**
     * @var string
     */
    public $originalAssistantId;

    /**
     * @var string
     */
    public $sourceIdOfOriginalAssistantId;

    /**
     * @var string
     */
    public $sourceTypeOfOriginalAssistantId;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'allowStructViewContent' => 'allowStructViewContent',
        'assistantId' => 'assistantId',
        'extLoginUser' => 'extLoginUser',
        'originalAssistantId' => 'originalAssistantId',
        'sourceIdOfOriginalAssistantId' => 'sourceIdOfOriginalAssistantId',
        'sourceTypeOfOriginalAssistantId' => 'sourceTypeOfOriginalAssistantId',
        'stream' => 'stream',
        'threadId' => 'threadId',
    ];

    public function validate()
    {
        if (null !== $this->extLoginUser) {
            $this->extLoginUser->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowStructViewContent) {
            $res['allowStructViewContent'] = $this->allowStructViewContent;
        }

        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }

        if (null !== $this->extLoginUser) {
            $res['extLoginUser'] = null !== $this->extLoginUser ? $this->extLoginUser->toArray($noStream) : $this->extLoginUser;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowStructViewContent'])) {
            $model->allowStructViewContent = $map['allowStructViewContent'];
        }

        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }

        if (isset($map['extLoginUser'])) {
            $model->extLoginUser = extLoginUser::fromMap($map['extLoginUser']);
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
