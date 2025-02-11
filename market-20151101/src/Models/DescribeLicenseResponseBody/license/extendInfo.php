<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license;

use AlibabaCloud\Dara\Model;

class extendInfo extends Model
{
    /**
     * @var int
     */
    public $accountQuantity;
    /**
     * @var int
     */
    public $aliUid;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $mobile;
    protected $_name = [
        'accountQuantity' => 'AccountQuantity',
        'aliUid'          => 'AliUid',
        'email'           => 'Email',
        'mobile'          => 'Mobile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountQuantity) {
            $res['AccountQuantity'] = $this->accountQuantity;
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
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
        if (isset($map['AccountQuantity'])) {
            $model->accountQuantity = $map['AccountQuantity'];
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        return $model;
    }
}
