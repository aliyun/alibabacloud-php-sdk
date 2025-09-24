<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class SetAllExpirationDayRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $unifyExpireDay;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'unifyExpireDay' => 'UnifyExpireDay',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->unifyExpireDay) {
            $res['UnifyExpireDay'] = $this->unifyExpireDay;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['UnifyExpireDay'])) {
            $model->unifyExpireDay = $map['UnifyExpireDay'];
        }

        return $model;
    }
}
