<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponResponseBody\data;

use AlibabaCloud\Tea\Model;

class shareUidList extends Model
{
    /**
     * @example 1902671110151254
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return shareUidList
     */
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
