<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\OpenServiceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\OpenServiceRequest\communication\userInfo;

class communication extends Model
{
    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'userInfo' => 'user_info',
    ];

    public function validate()
    {
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userInfo) {
            $res['user_info'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
        if (isset($map['user_info'])) {
            $model->userInfo = userInfo::fromMap($map['user_info']);
        }

        return $model;
    }
}
