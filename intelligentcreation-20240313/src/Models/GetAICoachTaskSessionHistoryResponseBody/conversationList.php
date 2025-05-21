<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class conversationList extends Model
{
    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @var string
     */
    public $dateLabel;

    /**
     * @var string
     */
    public $evaluationFeedback;

    /**
     * @var string
     */
    public $evaluationResult;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'audioUrl' => 'audioUrl',
        'dateLabel' => 'dateLabel',
        'evaluationFeedback' => 'evaluationFeedback',
        'evaluationResult' => 'evaluationResult',
        'message' => 'message',
        'recordId' => 'recordId',
        'role' => 'role',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioUrl) {
            $res['audioUrl'] = $this->audioUrl;
        }

        if (null !== $this->dateLabel) {
            $res['dateLabel'] = $this->dateLabel;
        }

        if (null !== $this->evaluationFeedback) {
            $res['evaluationFeedback'] = $this->evaluationFeedback;
        }

        if (null !== $this->evaluationResult) {
            $res['evaluationResult'] = $this->evaluationResult;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
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
        if (isset($map['audioUrl'])) {
            $model->audioUrl = $map['audioUrl'];
        }

        if (isset($map['dateLabel'])) {
            $model->dateLabel = $map['dateLabel'];
        }

        if (isset($map['evaluationFeedback'])) {
            $model->evaluationFeedback = $map['evaluationFeedback'];
        }

        if (isset($map['evaluationResult'])) {
            $model->evaluationResult = $map['evaluationResult'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
