<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;

class PrecheckForConsolidatedBillingAccountRequest extends Model
{
    /**
     * @var string
     */
    public $billingAccountId;
    protected $_name = [
        'billingAccountId' => 'BillingAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingAccountId) {
            $res['BillingAccountId'] = $this->billingAccountId;
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
        if (isset($map['BillingAccountId'])) {
            $model->billingAccountId = $map['BillingAccountId'];
        }

        return $model;
    }
}
