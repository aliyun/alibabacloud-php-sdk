<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class AddYikeUserCreditRequest extends Model
{
    /**
     * @var int
     */
    public $credit;

    /**
     * @var string
     */
    public $yikeUserId;
    protected $_name = [
        'credit' => 'Credit',
        'yikeUserId' => 'YikeUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credit) {
            $res['Credit'] = $this->credit;
        }

        if (null !== $this->yikeUserId) {
            $res['YikeUserId'] = $this->yikeUserId;
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
        if (isset($map['Credit'])) {
            $model->credit = $map['Credit'];
        }

        if (isset($map['YikeUserId'])) {
            $model->yikeUserId = $map['YikeUserId'];
        }

        return $model;
    }
}
