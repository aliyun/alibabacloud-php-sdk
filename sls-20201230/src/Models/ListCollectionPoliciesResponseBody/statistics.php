<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\statistics\policySourceList;

class statistics extends Model
{
    /**
     * @var policySourceList[]
     */
    public $policySourceList;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'policySourceList' => 'policySourceList',
        'productCode' => 'productCode',
    ];

    public function validate()
    {
        if (\is_array($this->policySourceList)) {
            Model::validateArray($this->policySourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policySourceList) {
            if (\is_array($this->policySourceList)) {
                $res['policySourceList'] = [];
                $n1 = 0;
                foreach ($this->policySourceList as $item1) {
                    $res['policySourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
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
        if (isset($map['policySourceList'])) {
            if (!empty($map['policySourceList'])) {
                $model->policySourceList = [];
                $n1 = 0;
                foreach ($map['policySourceList'] as $item1) {
                    $model->policySourceList[$n1] = policySourceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        return $model;
    }
}
