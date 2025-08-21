<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindRequest\bindReq;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindRequest\userInfo;

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
        'bindReq' => 'BindReq',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->bindReq) {
            $this->bindReq->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindReq) {
            $res['BindReq'] = null !== $this->bindReq ? $this->bindReq->toArray($noStream) : $this->bindReq;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
