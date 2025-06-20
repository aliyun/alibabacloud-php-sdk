<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\influenceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\influenceInfo\sensitiveCustomers\customerInfo;

class sensitiveCustomers extends Model
{
    /**
     * @var customerInfo[]
     */
    public $customerInfo;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'customerInfo' => 'CustomerInfo',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        if (\is_array($this->customerInfo)) {
            Model::validateArray($this->customerInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerInfo) {
            if (\is_array($this->customerInfo)) {
                $res['CustomerInfo'] = [];
                $n1 = 0;
                foreach ($this->customerInfo as $item1) {
                    $res['CustomerInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['CustomerInfo'])) {
            if (!empty($map['CustomerInfo'])) {
                $model->customerInfo = [];
                $n1 = 0;
                foreach ($map['CustomerInfo'] as $item1) {
                    $model->customerInfo[$n1] = customerInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
