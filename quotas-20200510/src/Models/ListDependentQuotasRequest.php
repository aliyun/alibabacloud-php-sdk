<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class ListDependentQuotasRequest extends Model
{
    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * This parameter is required.
     * @example csk
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The quota ID.
     *
     * This parameter is required.
     * @example q_i5uzm3
     *
     * @var string
     */
    public $quotaActionCode;
    protected $_name = [
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDependentQuotasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }

        return $model;
    }
}
