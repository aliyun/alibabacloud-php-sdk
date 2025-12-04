<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $query;

    /**
     * @var mixed[]
     */
    public $retrieverResources;
    protected $_name = [
        'answer' => 'Answer',
        'conversationId' => 'ConversationId',
        'createdAt' => 'CreatedAt',
        'feedback' => 'Feedback',
        'id' => 'Id',
        'query' => 'Query',
        'retrieverResources' => 'RetrieverResources',
    ];

    public function validate()
    {
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

        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}
