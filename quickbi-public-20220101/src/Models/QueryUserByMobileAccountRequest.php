<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class QueryUserByMobileAccountRequest extends Model
{
    /**
     * @var string
     */
    public $mobileType;

    /**
     * @var string
     */
    public $mobileUserId;
    protected $_name = [
        'mobileType' => 'MobileType',
        'mobileUserId' => 'MobileUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mobileType) {
            $res['MobileType'] = $this->mobileType;
        }

        if (null !== $this->mobileUserId) {
            $res['MobileUserId'] = $this->mobileUserId;
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
        if (isset($map['MobileType'])) {
            $model->mobileType = $map['MobileType'];
        }

        if (isset($map['MobileUserId'])) {
            $model->mobileUserId = $map['MobileUserId'];
        }

        return $model;
    }
}
