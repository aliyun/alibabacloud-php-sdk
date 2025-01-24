<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Dara\Model;

class CreateRelatedConversationRequest extends Model
{
    /**
     * @var string
     */
    public $exerciseCode;
    /**
     * @var string
     */
    public $outerBizId;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'exerciseCode' => 'ExerciseCode',
        'outerBizId'   => 'OuterBizId',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exerciseCode) {
            $res['ExerciseCode'] = $this->exerciseCode;
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
        if (isset($map['ExerciseCode'])) {
            $model->exerciseCode = $map['ExerciseCode'];
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
