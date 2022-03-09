<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class UserListPermissionsRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserListPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }

        return $model;
    }
}
