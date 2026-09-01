<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataAgentFeedbackResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $feedbackContent;

    /**
     * @var string
     */
    public $feedbackType;

    /**
     * @var int
     */
    public $likeValue;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'feedbackContent' => 'FeedbackContent',
        'feedbackType' => 'FeedbackType',
        'likeValue' => 'LikeValue',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
        'targetId' => 'TargetId',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feedbackContent) {
            $res['FeedbackContent'] = $this->feedbackContent;
        }

        if (null !== $this->feedbackType) {
            $res['FeedbackType'] = $this->feedbackType;
        }

        if (null !== $this->likeValue) {
            $res['LikeValue'] = $this->likeValue;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['FeedbackContent'])) {
            $model->feedbackContent = $map['FeedbackContent'];
        }

        if (isset($map['FeedbackType'])) {
            $model->feedbackType = $map['FeedbackType'];
        }

        if (isset($map['LikeValue'])) {
            $model->likeValue = $map['LikeValue'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
