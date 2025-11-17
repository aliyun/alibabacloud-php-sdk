<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class SmartqQueryAbilityRequest extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $multipleCubeIds;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userQuestion;
    protected $_name = [
        'cubeId' => 'CubeId',
        'multipleCubeIds' => 'MultipleCubeIds',
        'userId' => 'UserId',
        'userQuestion' => 'UserQuestion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        if (null !== $this->multipleCubeIds) {
            $res['MultipleCubeIds'] = $this->multipleCubeIds;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userQuestion) {
            $res['UserQuestion'] = $this->userQuestion;
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
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['MultipleCubeIds'])) {
            $model->multipleCubeIds = $map['MultipleCubeIds'];
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
