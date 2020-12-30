<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class ListDependentQuotasRequest extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
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
