<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class DedicatedIpAutoRenewalRequest extends Model
{
    /**
     * @var string
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $buyResourceIds;
    protected $_name = [
        'autoRenewal' => 'AutoRenewal',
        'buyResourceIds' => 'BuyResourceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->buyResourceIds) {
            $res['BuyResourceIds'] = $this->buyResourceIds;
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
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }

        if (isset($map['BuyResourceIds'])) {
            $model->buyResourceIds = $map['BuyResourceIds'];
        }

        return $model;
    }
}
