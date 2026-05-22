<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesResponseBody\data\events;

class data extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $generationFinishedAt;

    /**
     * @var string
     */
    public $generationStartedAt;

    /**
     * @var string
     */
    public $generationStatus;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $lastSentEntryId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var mixed[]
     */
    public $retrieverResources;

    /**
     * @var string
     */
    public $streamKey;
    protected $_name = [
        'answer' => 'Answer',
        'conversationId' => 'ConversationId',
        'createdAt' => 'CreatedAt',
        'events' => 'Events',
        'feedback' => 'Feedback',
        'generationFinishedAt' => 'GenerationFinishedAt',
        'generationStartedAt' => 'GenerationStartedAt',
        'generationStatus' => 'GenerationStatus',
        'id' => 'Id',
        'lastSentEntryId' => 'LastSentEntryId',
        'query' => 'Query',
        'retrieverResources' => 'RetrieverResources',
        'streamKey' => 'StreamKey',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->retrieverResources)) {
            Model::validateArray($this->retrieverResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['Events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['Events'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }

        if (null !== $this->generationFinishedAt) {
            $res['GenerationFinishedAt'] = $this->generationFinishedAt;
        }

        if (null !== $this->generationStartedAt) {
            $res['GenerationStartedAt'] = $this->generationStartedAt;
        }

        if (null !== $this->generationStatus) {
            $res['GenerationStatus'] = $this->generationStatus;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastSentEntryId) {
            $res['LastSentEntryId'] = $this->lastSentEntryId;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->retrieverResources) {
            if (\is_array($this->retrieverResources)) {
                $res['RetrieverResources'] = [];
                $n1 = 0;
                foreach ($this->retrieverResources as $item1) {
                    $res['RetrieverResources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->streamKey) {
            $res['StreamKey'] = $this->streamKey;
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
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['Events'] as $item1) {
                    $model->events[$n1] = events::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        if (isset($map['GenerationFinishedAt'])) {
            $model->generationFinishedAt = $map['GenerationFinishedAt'];
        }

        if (isset($map['GenerationStartedAt'])) {
            $model->generationStartedAt = $map['GenerationStartedAt'];
        }

        if (isset($map['GenerationStatus'])) {
            $model->generationStatus = $map['GenerationStatus'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastSentEntryId'])) {
            $model->lastSentEntryId = $map['LastSentEntryId'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RetrieverResources'])) {
            if (!empty($map['RetrieverResources'])) {
                $model->retrieverResources = [];
                $n1 = 0;
                foreach ($map['RetrieverResources'] as $item1) {
                    $model->retrieverResources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StreamKey'])) {
            $model->streamKey = $map['StreamKey'];
        }

        return $model;
    }
}
