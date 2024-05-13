<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class FeedbackDialogueRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example fcb14f25c9ee41ccad33a049de8f941b_p_outbound_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example test
     *
     * @var string
     */
    public $customerResponse;

    /**
     * @example test
     *
     * @var string
     */
    public $goodText;

    /**
     * @example test
     *
     * @var string
     */
    public $modifiedResponse;

    /**
     * @example thumbsDown
     *
     * @var string
     */
    public $rating;

    /**
     * @var string[]
     */
    public $ratingTags;

    /**
     * @description This parameter is required.
     *
     * @example 75bf82fa-b71b-45d7-ae40-0b00e496cd9e
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'customerResponse' => 'CustomerResponse',
        'goodText'         => 'GoodText',
        'modifiedResponse' => 'ModifiedResponse',
        'rating'           => 'Rating',
        'ratingTags'       => 'RatingTags',
        'sessionId'        => 'SessionId',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['RatingTags'] = $this->ratingTags;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FeedbackDialogueRequest
     */
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
                $model->ratingTags = $map['RatingTags'];
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
