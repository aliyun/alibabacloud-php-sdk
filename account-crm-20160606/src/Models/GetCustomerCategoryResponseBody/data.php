<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryResponseBody\data\bizCategory;

class data extends Model
{
    /**
     * @var bizCategory[]
     */
    public $bizCategory;
    protected $_name = [
        'bizCategory' => 'BizCategory',
    ];

    public function validate()
    {
        if (\is_array($this->bizCategory)) {
            Model::validateArray($this->bizCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCategory) {
            if (\is_array($this->bizCategory)) {
                $res['BizCategory'] = [];
                $n1 = 0;
                foreach ($this->bizCategory as $item1) {
                    $res['BizCategory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BizCategory'])) {
            if (!empty($map['BizCategory'])) {
                $model->bizCategory = [];
                $n1 = 0;
                foreach ($map['BizCategory'] as $item1) {
                    $model->bizCategory[$n1] = bizCategory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
