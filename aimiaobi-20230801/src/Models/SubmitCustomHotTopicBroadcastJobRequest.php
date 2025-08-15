<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest\hotTopicBroadcastConfig;

class SubmitCustomHotTopicBroadcastJobRequest extends Model
{
    /**
     * @var hotTopicBroadcastConfig
     */
    public $hotTopicBroadcastConfig;

    /**
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var string[]
     */
    public $topics;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'hotTopicBroadcastConfig' => 'HotTopicBroadcastConfig',
        'hotTopicVersion' => 'HotTopicVersion',
        'topics' => 'Topics',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->hotTopicBroadcastConfig) {
            $this->hotTopicBroadcastConfig->validate();
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotTopicBroadcastConfig) {
            $res['HotTopicBroadcastConfig'] = null !== $this->hotTopicBroadcastConfig ? $this->hotTopicBroadcastConfig->toArray($noStream) : $this->hotTopicBroadcastConfig;
        }

        if (null !== $this->hotTopicVersion) {
            $res['HotTopicVersion'] = $this->hotTopicVersion;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['Topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['Topics'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['HotTopicBroadcastConfig'])) {
            $model->hotTopicBroadcastConfig = hotTopicBroadcastConfig::fromMap($map['HotTopicBroadcastConfig']);
        }

        if (isset($map['HotTopicVersion'])) {
            $model->hotTopicVersion = $map['HotTopicVersion'];
        }

        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['Topics'] as $item1) {
                    $model->topics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
