<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class SmartqQueryAbilityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 7c7223ae-****-3c744528014b
     *
     * @var string
     */
    public $cubeId;

    /**
     * @example 7c7223ae-****-3c744528014b
     *
     * @var string
     */
    public $userId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userQuestion;
    protected $_name = [
        'cubeId' => 'CubeId',
        'userId' => 'UserId',
        'userQuestion' => 'UserQuestion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userQuestion) {
            $res['UserQuestion'] = $this->userQuestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmartqQueryAbilityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserQuestion'])) {
            $model->userQuestion = $map['UserQuestion'];
        }

        return $model;
    }
}
