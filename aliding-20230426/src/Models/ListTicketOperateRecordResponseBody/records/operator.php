<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponseBody\records;

use AlibabaCloud\Tea\Model;

class operator extends Model
{
    /**
     * @example 贤文
     *
     * @var string
     */
    public $nickName;

    /**
     * @example 012345
     *
     * @var string
     */
    public $unionId;
    protected $_name = [
        'nickName' => 'NickName',
        'unionId' => 'UnionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }

        return $model;
    }
}
