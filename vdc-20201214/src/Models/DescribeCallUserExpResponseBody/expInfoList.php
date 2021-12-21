<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserExpResponseBody;

use AlibabaCloud\Tea\Model;

class expInfoList extends Model
{
    /**
     * @description 用户体验：GOOD:优良, BAD:欠佳
     *
     * @var string
     */
    public $callExp;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'callExp' => 'CallExp',
        'userId'  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callExp) {
            $res['CallExp'] = $this->callExp;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallExp'])) {
            $model->callExp = $map['CallExp'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
