<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountLabel\V20200315\Models\QueryCustomerLabelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountLabel\V20200315\Models\QueryCustomerLabelResponseBody\data\customerLabel;

class data extends Model
{
    /**
     * @var customerLabel[]
     */
    public $customerLabel;
    protected $_name = [
        'customerLabel' => 'CustomerLabel',
    ];

    public function validate()
    {
        if (\is_array($this->customerLabel)) {
            Model::validateArray($this->customerLabel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerLabel) {
            if (\is_array($this->customerLabel)) {
                $res['CustomerLabel'] = [];
                $n1 = 0;
                foreach ($this->customerLabel as $item1) {
                    $res['CustomerLabel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CustomerLabel'])) {
            if (!empty($map['CustomerLabel'])) {
                $model->customerLabel = [];
                $n1 = 0;
                foreach ($map['CustomerLabel'] as $item1) {
                    $model->customerLabel[$n1] = customerLabel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
