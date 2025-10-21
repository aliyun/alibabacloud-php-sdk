<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class CreateTopicShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bodyDataShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $topicDefinition;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'bodyDataShrink' => 'BodyData',
        'regionId' => 'RegionId',
        'topicDefinition' => 'TopicDefinition',
        'topicName' => 'TopicName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyDataShrink) {
            $res['BodyData'] = $this->bodyDataShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->topicDefinition) {
            $res['TopicDefinition'] = $this->topicDefinition;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['BodyData'])) {
            $model->bodyDataShrink = $map['BodyData'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TopicDefinition'])) {
            $model->topicDefinition = $map['TopicDefinition'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
