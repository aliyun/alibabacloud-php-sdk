<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ContentPlanTopic extends Model
{
    /**
     * @var string
     */
    public $articleConversationId;

    /**
     * @var string
     */
    public $articleId;

    /**
     * @var string
     */
    public $articleStatus;

    /**
     * @var string[]
     */
    public $diagnosisReferences;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $rationale;

    /**
     * @var string[]
     */
    public $recommendedChannels;

    /**
     * @var string
     */
    public $scheduledAt;

    /**
     * @var string
     */
    public $skipReason;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $topicId;

    /**
     * @var string
     */
    public $writingDirection;
    protected $_name = [
        'articleConversationId' => 'ArticleConversationId',
        'articleId' => 'ArticleId',
        'articleStatus' => 'ArticleStatus',
        'diagnosisReferences' => 'DiagnosisReferences',
        'direction' => 'Direction',
        'failReason' => 'FailReason',
        'planId' => 'PlanId',
        'projectId' => 'ProjectId',
        'rationale' => 'Rationale',
        'recommendedChannels' => 'RecommendedChannels',
        'scheduledAt' => 'ScheduledAt',
        'skipReason' => 'SkipReason',
        'status' => 'Status',
        'title' => 'Title',
        'topicId' => 'TopicId',
        'writingDirection' => 'WritingDirection',
    ];

    public function validate()
    {
        if (\is_array($this->diagnosisReferences)) {
            Model::validateArray($this->diagnosisReferences);
        }
        if (\is_array($this->recommendedChannels)) {
            Model::validateArray($this->recommendedChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articleConversationId) {
            $res['ArticleConversationId'] = $this->articleConversationId;
        }

        if (null !== $this->articleId) {
            $res['ArticleId'] = $this->articleId;
        }

        if (null !== $this->articleStatus) {
            $res['ArticleStatus'] = $this->articleStatus;
        }

        if (null !== $this->diagnosisReferences) {
            if (\is_array($this->diagnosisReferences)) {
                $res['DiagnosisReferences'] = [];
                $n1 = 0;
                foreach ($this->diagnosisReferences as $item1) {
                    $res['DiagnosisReferences'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->rationale) {
            $res['Rationale'] = $this->rationale;
        }

        if (null !== $this->recommendedChannels) {
            if (\is_array($this->recommendedChannels)) {
                $res['RecommendedChannels'] = [];
                $n1 = 0;
                foreach ($this->recommendedChannels as $item1) {
                    $res['RecommendedChannels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scheduledAt) {
            $res['ScheduledAt'] = $this->scheduledAt;
        }

        if (null !== $this->skipReason) {
            $res['SkipReason'] = $this->skipReason;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        if (null !== $this->writingDirection) {
            $res['WritingDirection'] = $this->writingDirection;
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
        if (isset($map['ArticleConversationId'])) {
            $model->articleConversationId = $map['ArticleConversationId'];
        }

        if (isset($map['ArticleId'])) {
            $model->articleId = $map['ArticleId'];
        }

        if (isset($map['ArticleStatus'])) {
            $model->articleStatus = $map['ArticleStatus'];
        }

        if (isset($map['DiagnosisReferences'])) {
            if (!empty($map['DiagnosisReferences'])) {
                $model->diagnosisReferences = [];
                $n1 = 0;
                foreach ($map['DiagnosisReferences'] as $item1) {
                    $model->diagnosisReferences[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Rationale'])) {
            $model->rationale = $map['Rationale'];
        }

        if (isset($map['RecommendedChannels'])) {
            if (!empty($map['RecommendedChannels'])) {
                $model->recommendedChannels = [];
                $n1 = 0;
                foreach ($map['RecommendedChannels'] as $item1) {
                    $model->recommendedChannels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScheduledAt'])) {
            $model->scheduledAt = $map['ScheduledAt'];
        }

        if (isset($map['SkipReason'])) {
            $model->skipReason = $map['SkipReason'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        if (isset($map['WritingDirection'])) {
            $model->writingDirection = $map['WritingDirection'];
        }

        return $model;
    }
}
