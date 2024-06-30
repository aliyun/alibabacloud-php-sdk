<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaRequest\dimensions;
use AlibabaCloud\Tea\Model;

class GetProductQuotaRequest extends Model
{
    /**
     * @description The quota dimensions.
     *
     * @example {\\"regionId\\":\\"cn-beijing\\"}
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * This parameter is required.
     * @example q_security-groups
     *
     * @var string
     */
    public $quotaActionCode;
    protected $_name = [
        'dimensions'      => 'Dimensions',
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
     * @return GetProductQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }

        return $model;
    }
}
