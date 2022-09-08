<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class ScanCodeBindShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bindReqShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'bindReqShrink'  => 'BindReq',
        'userInfoShrink' => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindReqShrink) {
            $res['BindReq'] = $this->bindReqShrink;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanCodeBindShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindReq'])) {
            $model->bindReqShrink = $map['BindReq'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
