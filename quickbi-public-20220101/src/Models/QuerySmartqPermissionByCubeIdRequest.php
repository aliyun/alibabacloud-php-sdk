<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class QuerySmartqPermissionByCubeIdRequest extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'cubeId' => 'CubeId',
        'userId' => 'UserId',
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
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
