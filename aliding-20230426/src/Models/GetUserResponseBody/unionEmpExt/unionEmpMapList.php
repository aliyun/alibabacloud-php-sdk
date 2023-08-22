<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody\unionEmpExt;

use AlibabaCloud\Tea\Model;

class unionEmpMapList extends Model
{
    /**
     * @example dingxxx
     *
     * @var string
     */
    public $cropId;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $userid;
    protected $_name = [
        'cropId' => 'cropId',
        'userid' => 'userid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cropId) {
            $res['cropId'] = $this->cropId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unionEmpMapList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cropId'])) {
            $model->cropId = $map['cropId'];
        }
        if (isset($map['userid'])) {
            $model->userid = $map['userid'];
        }

        return $model;
    }
}
