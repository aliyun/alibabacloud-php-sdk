<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;

class GetRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $shardId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'projectName' => 'ProjectName',
        'shardId' => 'ShardId',
        'startTime' => 'StartTime',
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

        if (null !== $this->shardId) {
            $res['ShardId'] = $this->shardId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['ShardId'])) {
            $model->shardId = $map['ShardId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
