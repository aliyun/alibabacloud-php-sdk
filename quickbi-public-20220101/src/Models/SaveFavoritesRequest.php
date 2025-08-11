<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class SaveFavoritesRequest extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $worksId;
    protected $_name = [
        'userId' => 'UserId',
        'worksId' => 'WorksId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}
