<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimProjectShareModelResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 失效时间
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description 分享id
     *
     * @var string
     */
    public $shareId;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'shareId'    => 'ShareId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }

        return $model;
    }
}
