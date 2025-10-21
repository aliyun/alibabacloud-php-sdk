<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class UpdateTopicShrinkRequest extends Model
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
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'bodyDataShrink' => 'BodyData',
        'regionId' => 'RegionId',
        'topicDefinition' => 'TopicDefinition',
        'topicId' => 'TopicId',
        'topicName' => 'TopicName',
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

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
