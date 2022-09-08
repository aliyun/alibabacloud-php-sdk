<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindRequest\bindReq;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindRequest\userInfo;
use AlibabaCloud\Tea\Model;

class ScanCodeBindRequest extends Model
{
    /**
     * @var bindReq
     */
    public $bindReq;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'bindReq'  => 'BindReq',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindReq) {
            $res['BindReq'] = null !== $this->bindReq ? $this->bindReq->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanCodeBindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindReq'])) {
            $model->bindReq = bindReq::fromMap($map['BindReq']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
