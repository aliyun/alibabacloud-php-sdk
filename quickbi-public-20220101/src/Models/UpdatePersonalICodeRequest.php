<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdatePersonalICodeRequest extends Model
{
    /**
     * @var string
     */
    public $quickBIUserId;
    protected $_name = [
        'quickBIUserId' => 'QuickBIUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quickBIUserId) {
            $res['QuickBIUserId'] = $this->quickBIUserId;
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
        if (isset($map['QuickBIUserId'])) {
            $model->quickBIUserId = $map['QuickBIUserId'];
        }

        return $model;
    }
}
