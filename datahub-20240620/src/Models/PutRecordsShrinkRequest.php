<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;

class PutRecordsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $recordsShrink;

    /**
     * @var string
     */
    public $shardId;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'projectName' => 'ProjectName',
        'recordsShrink' => 'Records',
        'shardId' => 'ShardId',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->recordsShrink) {
            $res['Records'] = $this->recordsShrink;
        }

        if (null !== $this->shardId) {
            $res['ShardId'] = $this->shardId;
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Records'])) {
            $model->recordsShrink = $map['Records'];
        }

        if (isset($map['ShardId'])) {
            $model->shardId = $map['ShardId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
