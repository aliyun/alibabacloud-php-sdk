<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest\messages;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest\stepForBroadcastContentConfig;
use AlibabaCloud\Tea\Model;

class RunHotTopicChatRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string[]
     */
    public $generateOptions;

    /**
     * @example 2024-09-13_12
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var string[]
     */
    public $hotTopics;

    /**
     * @example 1
     *
     * @var int
     */
    public $imageCount;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @example xx
     *
     * @var string
     */
    public $modelCustomPromptTemplate;

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
     * @var string
     */
    public $prompt;

    /**
     * @var stepForBroadcastContentConfig
     */
    public $stepForBroadcastContentConfig;

    /**
     * @example a3d1c2ac-f086-4a21-9069-f5631542f5a2
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'category' => 'category',
        'generateOptions' => 'generateOptions',
        'hotTopicVersion' => 'hotTopicVersion',
        'hotTopics' => 'hotTopics',
        'imageCount' => 'imageCount',
        'messages' => 'messages',
        'modelCustomPromptTemplate' => 'modelCustomPromptTemplate',
        'modelId' => 'modelId',
        'originalSessionId' => 'originalSessionId',
        'prompt' => 'prompt',
        'stepForBroadcastContentConfig' => 'stepForBroadcastContentConfig',
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->generateOptions) {
            $res['generateOptions'] = $this->generateOptions;
        }
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->hotTopics) {
            $res['hotTopics'] = $this->hotTopics;
        }
        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }
        if (null !== $this->messages) {
            $res['messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelCustomPromptTemplate) {
            $res['modelCustomPromptTemplate'] = $this->modelCustomPromptTemplate;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->originalSessionId) {
            $res['originalSessionId'] = $this->originalSessionId;
        }
        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }
        if (null !== $this->stepForBroadcastContentConfig) {
            $res['stepForBroadcastContentConfig'] = null !== $this->stepForBroadcastContentConfig ? $this->stepForBroadcastContentConfig->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunHotTopicChatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['generateOptions'])) {
            if (!empty($map['generateOptions'])) {
                $model->generateOptions = $map['generateOptions'];
            }
        }
        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }
        if (isset($map['hotTopics'])) {
            if (!empty($map['hotTopics'])) {
                $model->hotTopics = $map['hotTopics'];
            }
        }
        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n = 0;
                foreach ($map['messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modelCustomPromptTemplate'])) {
            $model->modelCustomPromptTemplate = $map['modelCustomPromptTemplate'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['originalSessionId'])) {
            $model->originalSessionId = $map['originalSessionId'];
        }
        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }
        if (isset($map['stepForBroadcastContentConfig'])) {
            $model->stepForBroadcastContentConfig = stepForBroadcastContentConfig::fromMap($map['stepForBroadcastContentConfig']);
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
