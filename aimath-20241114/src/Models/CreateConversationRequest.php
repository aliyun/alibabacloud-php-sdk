<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Dara\Model;

class CreateConversationRequest extends Model
{
    /**
     * @var string
     */
    public $exerciseAnalysis;
    /**
     * @var string
     */
    public $exerciseAnswer;
    /**
     * @var string
     */
    public $exerciseContent;
    /**
     * @var string
     */
    public $exerciseType;
    /**
     * @var string
     */
    public $outerBizId;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'exerciseAnalysis' => 'ExerciseAnalysis',
        'exerciseAnswer'   => 'ExerciseAnswer',
        'exerciseContent'  => 'ExerciseContent',
        'exerciseType'     => 'ExerciseType',
        'outerBizId'       => 'OuterBizId',
        'userId'           => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exerciseAnalysis) {
            $res['ExerciseAnalysis'] = $this->exerciseAnalysis;
        }

        if (null !== $this->exerciseAnswer) {
            $res['ExerciseAnswer'] = $this->exerciseAnswer;
        }

        if (null !== $this->exerciseContent) {
            $res['ExerciseContent'] = $this->exerciseContent;
        }

        if (null !== $this->exerciseType) {
            $res['ExerciseType'] = $this->exerciseType;
        }

        if (null !== $this->outerBizId) {
            $res['OuterBizId'] = $this->outerBizId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ExerciseAnalysis'])) {
            $model->exerciseAnalysis = $map['ExerciseAnalysis'];
        }

        if (isset($map['ExerciseAnswer'])) {
            $model->exerciseAnswer = $map['ExerciseAnswer'];
        }

        if (isset($map['ExerciseContent'])) {
            $model->exerciseContent = $map['ExerciseContent'];
        }

        if (isset($map['ExerciseType'])) {
            $model->exerciseType = $map['ExerciseType'];
        }

        if (isset($map['OuterBizId'])) {
            $model->outerBizId = $map['OuterBizId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
