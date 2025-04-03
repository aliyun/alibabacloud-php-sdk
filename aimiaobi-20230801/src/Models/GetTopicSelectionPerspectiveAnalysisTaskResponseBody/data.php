<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\freshViewPointsResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\hotViewPointsResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\timedViewPointsResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\topicSummaryResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\webReviewPointsResult;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var freshViewPointsResult
     */
    public $freshViewPointsResult;

    /**
     * @var hotViewPointsResult
     */
    public $hotViewPointsResult;

    /**
     * @var string
     */
    public $status;

    /**
     * @var timedViewPointsResult
     */
    public $timedViewPointsResult;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var topicSummaryResult
     */
    public $topicSummaryResult;

    /**
     * @var webReviewPointsResult
     */
    public $webReviewPointsResult;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'freshViewPointsResult' => 'FreshViewPointsResult',
        'hotViewPointsResult' => 'HotViewPointsResult',
        'status' => 'Status',
        'timedViewPointsResult' => 'TimedViewPointsResult',
        'topic' => 'Topic',
        'topicSummaryResult' => 'TopicSummaryResult',
        'webReviewPointsResult' => 'WebReviewPointsResult',
    ];

    public function validate()
    {
        if (null !== $this->freshViewPointsResult) {
            $this->freshViewPointsResult->validate();
        }
        if (null !== $this->hotViewPointsResult) {
            $this->hotViewPointsResult->validate();
        }
        if (null !== $this->timedViewPointsResult) {
            $this->timedViewPointsResult->validate();
        }
        if (null !== $this->topicSummaryResult) {
            $this->topicSummaryResult->validate();
        }
        if (null !== $this->webReviewPointsResult) {
            $this->webReviewPointsResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->freshViewPointsResult) {
            $res['FreshViewPointsResult'] = null !== $this->freshViewPointsResult ? $this->freshViewPointsResult->toArray($noStream) : $this->freshViewPointsResult;
        }

        if (null !== $this->hotViewPointsResult) {
            $res['HotViewPointsResult'] = null !== $this->hotViewPointsResult ? $this->hotViewPointsResult->toArray($noStream) : $this->hotViewPointsResult;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timedViewPointsResult) {
            $res['TimedViewPointsResult'] = null !== $this->timedViewPointsResult ? $this->timedViewPointsResult->toArray($noStream) : $this->timedViewPointsResult;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->topicSummaryResult) {
            $res['TopicSummaryResult'] = null !== $this->topicSummaryResult ? $this->topicSummaryResult->toArray($noStream) : $this->topicSummaryResult;
        }

        if (null !== $this->webReviewPointsResult) {
            $res['WebReviewPointsResult'] = null !== $this->webReviewPointsResult ? $this->webReviewPointsResult->toArray($noStream) : $this->webReviewPointsResult;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FreshViewPointsResult'])) {
            $model->freshViewPointsResult = freshViewPointsResult::fromMap($map['FreshViewPointsResult']);
        }

        if (isset($map['HotViewPointsResult'])) {
            $model->hotViewPointsResult = hotViewPointsResult::fromMap($map['HotViewPointsResult']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TimedViewPointsResult'])) {
            $model->timedViewPointsResult = timedViewPointsResult::fromMap($map['TimedViewPointsResult']);
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['TopicSummaryResult'])) {
            $model->topicSummaryResult = topicSummaryResult::fromMap($map['TopicSummaryResult']);
        }

        if (isset($map['WebReviewPointsResult'])) {
            $model->webReviewPointsResult = webReviewPointsResult::fromMap($map['WebReviewPointsResult']);
        }

        return $model;
    }
}
