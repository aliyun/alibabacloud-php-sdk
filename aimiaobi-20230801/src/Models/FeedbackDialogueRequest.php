<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class FeedbackDialogueRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $customerResponse;

    /**
     * @var string
     */
    public $goodText;

    /**
     * @var string
     */
    public $modifiedResponse;

    /**
     * @var string
     */
    public $rating;

    /**
     * @var string[]
     */
    public $ratingTags;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'customerResponse' => 'CustomerResponse',
        'goodText' => 'GoodText',
        'modifiedResponse' => 'ModifiedResponse',
        'rating' => 'Rating',
        'ratingTags' => 'RatingTags',
        'sessionId' => 'SessionId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->ratingTags)) {
            Model::validateArray($this->ratingTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->customerResponse) {
            $res['CustomerResponse'] = $this->customerResponse;
        }

        if (null !== $this->goodText) {
            $res['GoodText'] = $this->goodText;
        }

        if (null !== $this->modifiedResponse) {
            $res['ModifiedResponse'] = $this->modifiedResponse;
        }

        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
        }

        if (null !== $this->ratingTags) {
            if (\is_array($this->ratingTags)) {
                $res['RatingTags'] = [];
                $n1 = 0;
                foreach ($this->ratingTags as $item1) {
                    $res['RatingTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['CustomerResponse'])) {
            $model->customerResponse = $map['CustomerResponse'];
        }

        if (isset($map['GoodText'])) {
            $model->goodText = $map['GoodText'];
        }

        if (isset($map['ModifiedResponse'])) {
            $model->modifiedResponse = $map['ModifiedResponse'];
        }

        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
        }

        if (isset($map['RatingTags'])) {
            if (!empty($map['RatingTags'])) {
                $model->ratingTags = [];
                $n1 = 0;
                foreach ($map['RatingTags'] as $item1) {
                    $model->ratingTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
