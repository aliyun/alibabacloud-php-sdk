<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody;

use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\statistics\policySourceList;
use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var policySourceList[]
     */
    public $policySourceList;

    /**
     * @example oss
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'policySourceList' => 'policySourceList',
        'productCode'      => 'productCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policySourceList) {
            $res['policySourceList'] = [];
            if (null !== $this->policySourceList && \is_array($this->policySourceList)) {
                $n = 0;
                foreach ($this->policySourceList as $item) {
                    $res['policySourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['policySourceList'])) {
            if (!empty($map['policySourceList'])) {
                $model->policySourceList = [];
                $n                       = 0;
                foreach ($map['policySourceList'] as $item) {
                    $model->policySourceList[$n++] = null !== $item ? policySourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        return $model;
    }
}
