<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class RunAgentRequest extends Model
{
    /**
     * @var string
     */
    public $botId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var bool
     */
    public $useDraft;

    /**
     * @var string
     */
    public $userContent;

    /**
     * @var mixed[]
     */
    public $userInputs;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'botId' => 'botId',
        'modelId' => 'modelId',
        'stream' => 'stream',
        'threadId' => 'threadId',
        'useDraft' => 'useDraft',
        'userContent' => 'userContent',
        'userInputs' => 'userInputs',
        'versionId' => 'versionId',
    ];

    public function validate()
    {
        if (\is_array($this->userInputs)) {
            Model::validateArray($this->userInputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botId) {
            $res['botId'] = $this->botId;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->useDraft) {
            $res['useDraft'] = $this->useDraft;
        }

        if (null !== $this->userContent) {
            $res['userContent'] = $this->userContent;
        }

        if (null !== $this->userInputs) {
            if (\is_array($this->userInputs)) {
                $res['userInputs'] = [];
                foreach ($this->userInputs as $key1 => $value1) {
                    $res['userInputs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['botId'])) {
            $model->botId = $map['botId'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['useDraft'])) {
            $model->useDraft = $map['useDraft'];
        }

        if (isset($map['userContent'])) {
            $model->userContent = $map['userContent'];
        }

        if (isset($map['userInputs'])) {
            if (!empty($map['userInputs'])) {
                $model->userInputs = [];
                foreach ($map['userInputs'] as $key1 => $value1) {
                    $model->userInputs[$key1] = $value1;
                }
            }
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
