<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Tea\Model;

class CreateRelatedConversationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Ex_pop_1731848070815_funI
     *
     * @var string
     */
    public $exerciseCode;

    /**
     * @description This parameter is required.
     *
     * @example 725e5550-8f81-42e0-a4db-d2de1be52afc
     *
     * @var string
     */
    public $outerBizId;

    /**
     * @description This parameter is required.
     *
     * @example pop_1731848070815
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateRelatedConversationRequest
     */
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
