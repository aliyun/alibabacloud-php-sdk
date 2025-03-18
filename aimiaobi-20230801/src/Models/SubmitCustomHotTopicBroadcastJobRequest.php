<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest\hotTopicBroadcastConfig;
use AlibabaCloud\Tea\Model;

class SubmitCustomHotTopicBroadcastJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var hotTopicBroadcastConfig
     */
    public $hotTopicBroadcastConfig;

    /**
     * @example 热点版本
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var string[]
     */
    public $topics;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'hotTopicBroadcastConfig' => 'HotTopicBroadcastConfig',
        'hotTopicVersion' => 'HotTopicVersion',
        'topics' => 'Topics',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotTopicBroadcastConfig) {
            $res['HotTopicBroadcastConfig'] = null !== $this->hotTopicBroadcastConfig ? $this->hotTopicBroadcastConfig->toMap() : null;
        }
        if (null !== $this->hotTopicVersion) {
            $res['HotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCustomHotTopicBroadcastJobRequest
     */
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
                $model->topics = $map['Topics'];
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
