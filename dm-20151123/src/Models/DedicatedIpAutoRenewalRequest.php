<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DedicatedIpAutoRenewalRequest extends Model
{
    /**
     * @description Whether to enable auto-renewal
     *
     * This parameter is required.
     *
     * @example false
     *
     * @var string
     */
    public $autoRenewal;

    /**
     * @description Purchase instance ID, separated by English commas if multiple.
     *
     * This parameter is required.
     *
     * @example xxx,xxx
     *
     * @var string
     */
    public $buyResourceIds;
    protected $_name = [
        'autoRenewal' => 'AutoRenewal',
        'buyResourceIds' => 'BuyResourceIds',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DedicatedIpAutoRenewalRequest
     */
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
