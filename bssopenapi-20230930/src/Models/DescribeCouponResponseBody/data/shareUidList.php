<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponResponseBody\data;

use AlibabaCloud\Dara\Model;

class shareUidList extends Model
{
    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'uid' => 'Uid',
        'userNick' => 'UserNick',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
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
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
