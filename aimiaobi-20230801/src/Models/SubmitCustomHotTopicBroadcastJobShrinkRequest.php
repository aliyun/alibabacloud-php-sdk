<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SubmitCustomHotTopicBroadcastJobShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $hotTopicBroadcastConfigShrink;

    /**
     * @example 热点版本
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var string
     */
    public $topicsShrink;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'hotTopicBroadcastConfigShrink' => 'HotTopicBroadcastConfig',
        'hotTopicVersion' => 'HotTopicVersion',
        'topicsShrink' => 'Topics',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotTopicBroadcastConfigShrink) {
            $res['HotTopicBroadcastConfig'] = $this->hotTopicBroadcastConfigShrink;
        }
        if (null !== $this->hotTopicVersion) {
            $res['HotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->topicsShrink) {
            $res['Topics'] = $this->topicsShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCustomHotTopicBroadcastJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotTopicBroadcastConfig'])) {
            $model->hotTopicBroadcastConfigShrink = $map['HotTopicBroadcastConfig'];
        }
        if (isset($map['HotTopicVersion'])) {
            $model->hotTopicVersion = $map['HotTopicVersion'];
        }
        if (isset($map['Topics'])) {
            $model->topicsShrink = $map['Topics'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
