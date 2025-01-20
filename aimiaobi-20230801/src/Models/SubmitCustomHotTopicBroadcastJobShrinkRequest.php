<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitCustomHotTopicBroadcastJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotTopicBroadcastConfigShrink;
    /**
     * @var string
     */
    public $hotTopicVersion;
    /**
     * @var string
     */
    public $topicsShrink;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'hotTopicBroadcastConfigShrink' => 'HotTopicBroadcastConfig',
        'hotTopicVersion'               => 'HotTopicVersion',
        'topicsShrink'                  => 'Topics',
        'workspaceId'                   => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
