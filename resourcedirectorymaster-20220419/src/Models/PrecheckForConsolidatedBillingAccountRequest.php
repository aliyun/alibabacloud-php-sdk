<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class PrecheckForConsolidatedBillingAccountRequest extends Model
{
    /**
     * @description The ID of the management account or member to be used as a main financial account.
     *
     * This parameter is required.
     *
     * @example 111***089
     *
     * @var string
     */
    public $billingAccountId;
    protected $_name = [
        'billingAccountId' => 'BillingAccountId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingAccountId) {
            $res['BillingAccountId'] = $this->billingAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrecheckForConsolidatedBillingAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingAccountId'])) {
            $model->billingAccountId = $map['BillingAccountId'];
        }

        return $model;
    }
}
