<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class AutomaticWriteOffRequest extends Model
{
    /**
     * @var int
     */
    public $automaticWriteOffAmount;

    /**
     * @var bool
     */
    public $automaticWriteOffEnabled;

    /**
     * @var int
     */
    public $customerUid;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'automaticWriteOffAmount' => 'AutomaticWriteOffAmount',
        'automaticWriteOffEnabled' => 'AutomaticWriteOffEnabled',
        'customerUid' => 'CustomerUid',
        'language' => 'Language',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->automaticWriteOffAmount) {
            $res['AutomaticWriteOffAmount'] = $this->automaticWriteOffAmount;
        }

        if (null !== $this->automaticWriteOffEnabled) {
            $res['AutomaticWriteOffEnabled'] = $this->automaticWriteOffEnabled;
        }

        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
        if (isset($map['AutomaticWriteOffAmount'])) {
            $model->automaticWriteOffAmount = $map['AutomaticWriteOffAmount'];
        }

        if (isset($map['AutomaticWriteOffEnabled'])) {
            $model->automaticWriteOffEnabled = $map['AutomaticWriteOffEnabled'];
        }

        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
