<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserByMobileAccountResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $boundUserId;

    /**
     * @var string
     */
    public $thirdAccountName;
    protected $_name = [
        'boundUserId' => 'BoundUserId',
        'thirdAccountName' => 'ThirdAccountName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundUserId) {
            $res['BoundUserId'] = $this->boundUserId;
        }

        if (null !== $this->thirdAccountName) {
            $res['ThirdAccountName'] = $this->thirdAccountName;
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
        if (isset($map['BoundUserId'])) {
            $model->boundUserId = $map['BoundUserId'];
        }

        if (isset($map['ThirdAccountName'])) {
            $model->thirdAccountName = $map['ThirdAccountName'];
        }

        return $model;
    }
}
