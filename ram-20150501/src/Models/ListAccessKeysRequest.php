<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ListAccessKeysRequest extends Model
{
    /**
     * @description The name of the RAM user. If a RAM user calls this operation and does not specify this parameter, the AccessKey pairs of the RAM user are returned.
     *
     * @example zhangq****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
