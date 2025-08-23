<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest\messages;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest\stepForBroadcastContentConfig;

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
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var string[]
     */
    public $hotTopics;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $modelCustomPromptTemplate;

    /**
     * @var string
     */
    public $modelId;

    /**
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

    public function validate()
    {
        if (\is_array($this->generateOptions)) {
            Model::validateArray($this->generateOptions);
        }
        if (\is_array($this->hotTopics)) {
            Model::validateArray($this->hotTopics);
        }
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (null !== $this->stepForBroadcastContentConfig) {
            $this->stepForBroadcastContentConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->generateOptions) {
            if (\is_array($this->generateOptions)) {
                $res['generateOptions'] = [];
                $n1 = 0;
                foreach ($this->generateOptions as $item1) {
                    $res['generateOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }

        if (null !== $this->hotTopics) {
            if (\is_array($this->hotTopics)) {
                $res['hotTopics'] = [];
                $n1 = 0;
                foreach ($this->hotTopics as $item1) {
                    $res['hotTopics'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['stepForBroadcastContentConfig'] = null !== $this->stepForBroadcastContentConfig ? $this->stepForBroadcastContentConfig->toArray($noStream) : $this->stepForBroadcastContentConfig;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['generateOptions'])) {
            if (!empty($map['generateOptions'])) {
                $model->generateOptions = [];
                $n1 = 0;
                foreach ($map['generateOptions'] as $item1) {
                    $model->generateOptions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }

        if (isset($map['hotTopics'])) {
            if (!empty($map['hotTopics'])) {
                $model->hotTopics = [];
                $n1 = 0;
                foreach ($map['hotTopics'] as $item1) {
                    $model->hotTopics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
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
