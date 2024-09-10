<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\freshViewPointsResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\hotViewPointsResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\timedViewPointsResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\topicSummaryResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\webReviewPointsResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 错误信息
     *
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
     * @example SUSPENDED
     *
     * @var string
     */
    public $status;

    /**
     * @var timedViewPointsResult
     */
    public $timedViewPointsResult;

    /**
     * @example 热点主题事件
     *
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
        'errorMessage'          => 'ErrorMessage',
        'freshViewPointsResult' => 'FreshViewPointsResult',
        'hotViewPointsResult'   => 'HotViewPointsResult',
        'status'                => 'Status',
        'timedViewPointsResult' => 'TimedViewPointsResult',
        'topic'                 => 'Topic',
        'topicSummaryResult'    => 'TopicSummaryResult',
        'webReviewPointsResult' => 'WebReviewPointsResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->freshViewPointsResult) {
            $res['FreshViewPointsResult'] = null !== $this->freshViewPointsResult ? $this->freshViewPointsResult->toMap() : null;
        }
        if (null !== $this->hotViewPointsResult) {
            $res['HotViewPointsResult'] = null !== $this->hotViewPointsResult ? $this->hotViewPointsResult->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timedViewPointsResult) {
            $res['TimedViewPointsResult'] = null !== $this->timedViewPointsResult ? $this->timedViewPointsResult->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->topicSummaryResult) {
            $res['TopicSummaryResult'] = null !== $this->topicSummaryResult ? $this->topicSummaryResult->toMap() : null;
        }
        if (null !== $this->webReviewPointsResult) {
            $res['WebReviewPointsResult'] = null !== $this->webReviewPointsResult ? $this->webReviewPointsResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
