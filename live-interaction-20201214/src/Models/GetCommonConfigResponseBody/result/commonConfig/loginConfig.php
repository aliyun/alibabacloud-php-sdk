<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody\result\commonConfig;

use AlibabaCloud\Tea\Model;

class loginConfig extends Model
{
    /**
     * @description 登录类型
     *
     * @var int
     */
    public $loginType;
    protected $_name = [
        'loginType' => 'LoginType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginType) {
            $res['LoginType'] = $this->loginType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginType'])) {
            $model->loginType = $map['LoginType'];
        }

        return $model;
    }
}
